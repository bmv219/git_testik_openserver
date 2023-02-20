<?php
session_start();


$sname = filter_var(trim($_POST['sname']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$passwordd = filter_var(trim($_POST['passwordd']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$dr = filter_var(trim($_POST['dr']), FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost','root','','Users');
if(!$mysql) {
    die('Error connect to DataBase');
}

$telef = mysqli_query($mysql, "SELECT * FROM `User` WHERE `tel`='$tel'");

if (mysqli_num_rows($telef) > 0) {
    $_SESSION['message']='Телефон уже зарегестрирован!';
    header('Location: reg.html');
    die();
}

$snamepoisk = mysqli_query($mysql, "SELECT * FROM `User` WHERE `nik`='$sname'");

if (mysqli_num_rows($snamepoisk) > 0) {
    $_SESSION['message']='Этот ник уже занят!';
    header('Location: reg.html');
    die();
}

if ($password !== $passwordd) {
    $_SESSION['message']='Пароли не совпадают!';
    header('Location: reg.html');
    die();
}

$password = md5($password."фиaa22");

$mysql->query("INSERT INTO `User` (`nik`, `password`, `name`, `tel`, `dr`) VALUES ('$sname','$password', '$name', '$tel', '$dr')");
header('Location: ../test.html');
$mysql->close();

?>