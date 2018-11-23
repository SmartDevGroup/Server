<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$data_home = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$home = mysqli_fetch_assoc($data_home);

$Stan_home = array("home_socket_1" => $home['home_socket_1'], "home_socket_2" => $home['home_socket_2'], "home_socket_3" => $home['home_socket_3'],
"home_socket_4" => $home['home_socket_4'], "home_socket_5" => $home['home_socket_5'], "home_socket_6" => $home['home_socket_6'], "home_light" => $home['home_light'], "dimer" => $home['dimer']);

$json_button = json_encode($Stan_home);
echo $json_button;
?>
