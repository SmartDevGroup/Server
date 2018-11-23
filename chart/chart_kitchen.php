<?php

session_start();
$get_key = $_SESSION['api'];
$link=mysqli_connect("localhost", "root", "", "server");
$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen = mysqli_fetch_assoc($data_kitchen);

$temp = array("sum" => $kitchen['Sum'], "k_s_1" => $kitchen['k_temp_sock_1'], "k_s_2" => $kitchen['k_temp_sock_2'] , "k_s_3" => $kitchen['k_temp_sock_3'] , "k_s_4" => $kitchen['k_temp_sock_4'] , "k_s_5" => $kitchen['k_temp_sock_5'] , "k_s_6" => $kitchen['k_temp_sock_6']);
$json_temp = json_encode($temp);
echo $json_temp;
 ?>
