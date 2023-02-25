<?php 


$link = mysqli_connect('localhost','root','','Users')
or die('Ошибка ' . mysqli_error($link));

$json_data = [];

$query = 'SELECT `niks`, `comment`, `data` FROM `Otz`';

$result = mysqli_query($link, $query) or die('Ошибка ' . mysqli_error($link));

while ($row = $result->fetch_assoc()) {
    $json_data[] = $row;
}

echo json_encode($json_data);
?>