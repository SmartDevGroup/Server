<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($bathroom);

$ba_s_1 = $data['name_sock_1'];
$ba_s_2 = $data['name_sock_2'];
$ba_s_3 = $data['name_sock_3'];
$ba_s_4 = $data['name_sock_4'];
$ba_s_5 = $data['name_sock_5'];
$ba_s_6 = $data['name_sock_6'];

$arr = array("ba_s_1" => $ba_s_1, "ba_s_2" => $ba_s_2, "ba_s_3" => $ba_s_3, "ba_s_4" => $ba_s_4, "ba_s_5" => $ba_s_5, "ba_s_6" => $ba_s_6);

$json_n = json_encode($arr);
echo $json_n;
 ?>
