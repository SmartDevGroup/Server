<?php
$api_key = $_GET['api'];
$link=mysqli_connect("localhost", "root", "123", "server");

$mysql = mysqli_query($link,"SELECT * FROM bedroom WHERE api_key = '$api_key'");
$bedroom = mysqli_fetch_assoc($mysql);

$array = array('bedroom_socket_1' => $bedroom['b_temp_sock_1']);

$json_button = json_encode($array);
echo $json_button;

 ?>
