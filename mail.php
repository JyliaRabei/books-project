<?php
$recepient = "jyrabey.gmail.com";
$siteName = "Book Project";
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$item = trim($_POST["item"]);
$message = "Ім'я: $name \nMail: $mail \nПовідомлення: $item";
$pagetitle = "Заявка з сайту \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>

