<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$home = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($home);

$b_s_1 = $data['name_sock_1'];
$b_s_2 = $data['name_sock_2'];
$b_s_3 = $data['name_sock_3'];
$b_s_4 = $data['name_sock_4'];
$b_s_5 = $data['name_sock_5'];
$b_s_6 = $data['name_sock_6'];

$arr = $arrayName = array("b_s_1" => $b_s_1, "b_s_2" => $b_s_2, "b_s_3" => $b_s_3, "b_s_4" => $b_s_4, "b_s_5" => $b_s_5, "b_s_6" => $b_s_6);

$json_n = json_encode($arr);
echo $json_n;
 ?>
