<?php
session_start();

$conn = new mysqli('localhost','root','','Users');
if(!$conn) {
    die('Error connect to DataBase');
}

$vvod_nik = filter_var(trim($_POST['vvod_nik']), FILTER_SANITIZE_STRING);
$vvod_password = filter_var(trim($_POST['vvod_password']), FILTER_SANITIZE_STRING);

$vvod_password = md5($vvod_password."фиaa22");

$check_user = mysqli_query($conn, "SELECT * FROM `User` WHERE `nik`='$vvod_nik' AND `password`='$vvod_password'");

if (mysqli_num_rows($check_user) > 0) {
    $us = mysqli_fetch_assoc($check_user);
    $_SESSION['mess'] = $us['name'];
    header('Location: test.html');
} else {
    $_SESSION['message1'] = 'Не верный логин или пароль!<script>regist.style.display="block"</script>';
    header('Location: test.html'); 
}
$conn->close();
?>