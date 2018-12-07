<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$home = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($home);

$h_s_1 = $data['name_sock_1'];
$h_s_2 = $data['name_sock_2'];
$h_s_3 = $data['name_sock_3'];
$h_s_4 = $data['name_sock_4'];
$h_s_5 = $data['name_sock_5'];
$h_s_6 = $data['name_sock_6'];

$arr = $arrayName = array("h_s_1" => $h_s_1, "h_s_2" => $h_s_2, "h_s_3" => $h_s_3, "h_s_4" => $h_s_4, "h_s_5" => $h_s_5, "h_s_6" => $h_s_6);

$json_n = json_encode($arr);
echo $json_n;
 ?>
