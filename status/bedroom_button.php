<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$data_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);

$Stan_bedroom = array("bedroom_socket_1" => $bedroom['bedroom_socket_1'], "bedroom_socket_2" => $bedroom['bedroom_socket_2'], "bedroom_socket_3" => $bedroom['bedroom_socket_3'],
"bedroom_socket_4" => $bedroom['bedroom_socket_4'], "bedroom_socket_5" => $bedroom['bedroom_socket_5'], "bedroom_socket_6" => $bedroom['bedroom_socket_6'], "bedroom_light" => $bedroom['bedroom_light'], "dimer" => $bedroom['dimer']);

$json_button = json_encode($Stan_bedroom);
echo $json_button;
?>
