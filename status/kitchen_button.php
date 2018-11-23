<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen = mysqli_fetch_assoc($data_kitchen);

$Stan_kitchen = array("kitchen_socket_1" => $kitchen['kitchen_socket_1'], "kitchen_socket_2" => $kitchen['kitchen_socket_2'], "kitchen_socket_3" => $kitchen['kitchen_socket_3'],
"kitchen_socket_4" => $kitchen['kitchen_socket_4'], "kitchen_socket_5" => $kitchen['kitchen_socket_5'], "kitchen_socket_6" => $kitchen['kitchen_socket_6'], "kitchen_light" => $kitchen['kitchen_light'], "dimer" => $kitchen['dimer']);

$json_button = json_encode($Stan_kitchen);
echo $json_button;
?>
