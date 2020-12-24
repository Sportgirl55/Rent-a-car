<?php


/**
 * загружаемые скрипты и стили
 */
function load_style_script(){
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');

    wp_enqueue_style('wp-editor', get_template_directory_uri() . '/css/wp-editor.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

/**
 * загружаем скрипты и стили
 */

add_action('wp_enqueue_scripts', 'load_style_script');

/**
 * регистрация виджетов
 */


/**
 * регистрация меню
 */

register_nav_menus( array(

    'header_menu' => 'Главное меню в шапке',
    'footer_menu' => 'Меню футер',
   ) );


/**
* регистрация виджетов
*/

// register_sidebar(
//     array(
//         'id' => 'right-side', // уникальный id для сайта, назначается правому сайдбару
//         'name' => 'Правая колонка', // название сайдбара, которое будет отображаться в админке
//         'description' => 'Перетяните виджеты, чтобы добавить их в сайдбар.', // описание выводимое в админке для сайдбара
//         'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
//         'after_widget' => '', // в этой и предыдущей строке мы задали контейнер в котором будет размещен сайдбар
//         'before_title' => '<h3 class="r-wtitle">', // если оставить пустым, будет выводиться в <h2>
//         'after_title' => '</h3>'
//     )
// );

/**
 * подключение миниатюр
 */

add_theme_support( 'post-thumbnails', array( 'post' ) );


/**
 * Пагинация
 */

function wp_corenavi() {
    global $wp_query;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
    $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
    $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
    $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

    if ($max > 1) echo '<div class="navigation">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
}

/* Remove Images From Yoast Sitemap */
add_filter( 'wpseo_xml_sitemap_img', '__return_false' );

/*количество постов*/

if( !function_exists('post_count_on_archive') ):
    function post_count_on_archive( $query ) {
        if ( $query->is_tag() || $query->is_search() || $query->is_archive() ) {
            $query->set( 'posts_per_page', '150' ); /*количество постов*/
        }
    }
    add_action( 'pre_get_posts', 'post_count_on_archive' );
endif;

remove_filter(‘the_content’,’wptexturize’); // Отключаем автоформатирование в полном посте

/* поиск */

function cf_search_join( $join ) {
    global $wpdb;
    if ( is_search() ) {
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */

function cf_search_where( $where ) {
    global $pagenow, $wpdb;
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}
add_filter('posts_where', 'cf_search_where');

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */

function cf_search_distinct( $where ) {
    global $wpdb;
    if ( is_search() ) {
        return "DISTINCT";
    }
    return $where;
}
add_filter('posts_distinct', 'cf_search_distinct');

// похожие посты
// 
// // необязательно, но в некоторых случаях без этого не обойтись
global $post;
 
// тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
$related_tax = 'category';
 
// получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
$cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );
 
// массив параметров для WP_Query
$args = array(
	'posts_per_page' => 4, // сколько похожих постов нужно вывести,
	'tax_query' => array(
		array(
			'taxonomy' => $related_tax,
			'field' => 'id',
			'include_children' => false, // нужно ли включать посты дочерних рубрик
			'terms' => $cats_tags_or_taxes,
			'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
		)
	)
);
$misha_query = new WP_Query( $args );
 
// если посты, удовлетворяющие нашим условиям, найдены
if( $misha_query->have_posts() ) :
 
	// выводим заголовок блока похожих постов
	echo '<h3>Похожие посты</h3>';
 
	// запускаем цикл
	while( $misha_query->have_posts() ) : $misha_query->the_post();
		// в данном случае посты выводятся просто в виде ссылок
		echo '<a href="' . get_permalink( $misha_query->post->ID ) . '">' . $misha_query->post->post_title . '</a>';
	endwhile;
endif;
 
// не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
wp_reset_postdata();
