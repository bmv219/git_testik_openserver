<?php
session_start();
$lal = $_SESSION["snamee"];
$lol = filter_var(trim($_POST['comm']), FILTER_SANITIZE_STRING);
$data = date("m.d.y");

$sss = new mysqli('localhost','root','','Users');
if(!$sss) {
    die('Error connect to DataBase');
} 


$sss->query("INSERT INTO `Otz` (`niks`, `comment`, `data`) VALUES ('$lal', '$lol', '$data')");
header('Location: ../test.html');



?>