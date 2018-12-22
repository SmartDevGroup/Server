<?php

session_start();
$get_key = $_SESSION['api'];
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
$data_home = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$home = mysqli_fetch_assoc($data_home);

$temp = array("sum" => $home['Sum'], "h_s_1" => $home['h_temp_sock_1'], "h_s_2" => $home['h_temp_sock_2'] , "h_s_3" => $home['h_temp_sock_3'] , "h_s_4" => $home['h_temp_sock_4'] , "h_s_5" => $home['h_temp_sock_5'] , "h_s_6" => $home['h_temp_sock_6']);
$json_temp = json_encode($temp);
echo $json_temp;
 ?>
