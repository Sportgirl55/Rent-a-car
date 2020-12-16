<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$start_date = $_POST['start-date'];
$end_date = $_POST['end-date'];
$comment = $_POST['comment'];
$subject = 'Аренда автомобиля';
$email_admin = 'test@mail.ru';

$message = 
'имя ' . $name . '\n' . 
'телефон ' . $phone . '\n' . 
'начало аренды ' . $start_date . '\n' .
'конец аренды ' . $end_date . '\n' . 
'сообщение ' . $comment;



mail ( $email_admin , $subject , $message );