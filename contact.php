<?php
error_reporting(E_ALL);

/**
  * Name: Henry Ko
  * Date: 1/31/2020
  * Project: Stephanie Porter
  * Description: PHP for emailing script.
  * -------------------------------------- POST ---------------------------------------------
  * If sent a POST request, a parameter 'submit' is required to be passed with one of multiple values:
  * ====================
  *   - choose
  *     |  returns prefix of the sender.
  * ====================
  *   - name
  *     | returns name of the sender.
  * ====================
  *   - email
  *     | returns email address of the sender.
  * ====================
  *   - category
  *     | returns the purpose of the message.
  *
  * ====================
  *   - textbox
  *     | returns the text.
  *
  */

$prefix = $_POST['choose'];
$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$text = $_POST['textBox'];

$mailTo = "henry.ko67@gmail.com";
$headers = "From: ".$email;
$message = "Email Request from "$prefix." ".$name.".\n\n".$text;

mail($mailTo, $category, $message, $headers);

header("Location: contact.html");
?>
