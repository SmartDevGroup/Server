<?php
$api_key = $_GET['api'];
$link=mysqli_connect("localhost", "root", "123", "server");

$mysql = mysqli_query($link,"SELECT * FROM bedroom WHERE api_key = '$api_key'");
$bedroom = mysqli_fetch_assoc($mysql);

echo $bedroom['b_temp_sock_1'];
 ?>
