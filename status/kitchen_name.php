<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($kitchen);

$k_s_1 = $data['name_sock_1'];
$k_s_2 = $data['name_sock_2'];
$k_s_3 = $data['name_sock_3'];
$k_s_4 = $data['name_sock_4'];
$k_s_5 = $data['name_sock_5'];
$k_s_6 = $data['name_sock_6'];

$arr = array("k_s_1" => $k_s_1, "k_s_2" => $k_s_2, "k_s_3" => $k_s_3, "k_s_4" => $k_s_4, "k_s_5" => $k_s_5, "k_s_6" => $k_s_6);

$json_n = json_encode($arr);
echo $json_n;
 ?>
