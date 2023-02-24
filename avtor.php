<?php
session_start();

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "Users";

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
    $_SESSION['snamee'] = $us['nik'];



    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $coment = "SELECT `niks`, `comment`, `data` FROM `Otz`";
    $statement = $db->prepare($coment);
    $statement->execute();
    $result_array = $statement->fetchAll();
    $maaas = array();
    $maaas1 = array();
    $maaas2 = array();
    foreach ($result_array as $result_row) {
        array_push($maaas, $result_row['niks']);
        array_push($maaas1, $result_row['comment']);
        array_push($maaas2, $result_row['data']);
    }
    $_SESSION['masivjs'] = $maaas;
    $_SESSION['masivjs1'] = $maaas1;
    $_SESSION['masivjs2'] = $maaas2;




    header('Location: test.html');
} else {
    $_SESSION['message1'] = 'Не верный логин или пароль!<script>regist.style.display="block"</script>';
    header('Location: test.html'); 
}

$conn->close();
?>