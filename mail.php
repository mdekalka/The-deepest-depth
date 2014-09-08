<?
#Получаем данные методом POST и отсекаем пробельные символы в начале и конце:
$name = @ trim ($_POST['name']);
$email = @ trim ($_POST['email']);
$message = @ trim ($_POST['message']);
#Простая проверка были ли переданы все данные
if (! $name or ! $email or ! $message) exit ('Fill all forms, please.');
#Отправка данных с помощью функции mail()
mail ("ebashus7let@mail.ru",
      "Новое сообщение с сайта (от : $name)",
      " Имя:$name \n Email:$email \n Сообщение: $message",
	  "Content-type:text/plain; charset=utf-8");
header ("Location: http://thedeepestdepth.hol.es");
?>