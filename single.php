<?php include('header.php') ?>
<body>
  <main class="single-page">
    Страница одной машины

    <form action="send.php" method="post">
    <label>
      <input type="text" name="name" placeholder="Ваше имя">
    </label>
    <label>
      <input type="tel" name="phone" placeholder="Телефон">
    </label>
    <label>
      <input type="date" name="start-date" placeholder="Начало аренды">
    </label>
    <label>
    <input type="date" name="end-date" placeholder="Окончание аренды">
    </label>
    <label>
    <textarea name="comment" placeholder="Ваше сообщение">
    
    </textarea>
    </label>
    <button type="submit">Арендовать</button>
    </form>
  </main>
  <?php include('footer.php') ?>