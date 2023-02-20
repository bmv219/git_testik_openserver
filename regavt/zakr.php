<?php
session_start();

unset($_SESSION['mess']);
header('Location: ../test.html');
die();
?>