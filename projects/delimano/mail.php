<?php
//Принимаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
//Тут указываем на какой ящик посылать письмо
$to = "fil14022002@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка на НутриБулет";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a>";
// Отправляем письмо при помощи функции mail();
$headers = "From: stastroi.ru <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>