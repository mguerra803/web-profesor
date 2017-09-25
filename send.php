<?php
$dest = $_POST['mariaguerra803@gmail.com'];
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$content = "Nombre: " . $name . "\nEmail: " . $email . "\nTeléfono: " . $telephone . "\nMensaje: " . $message;

mail($dest,$subject,$content);
header("Location:contacto.html");
?>