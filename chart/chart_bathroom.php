<?php

session_start();
$get_key = $_SESSION['api'];
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
$data_bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom = mysqli_fetch_assoc($data_bathroom);

$temp = array("sum" => $bathroom['Sum'], "ba_s_1" => $bathroom['ba_temp_sock_1'], "ba_s_2" => $bathroom['ba_temp_sock_2'] , "ba_s_3" => $bathroom['ba_temp_sock_3'] , "ba_s_4" => $bathroom['ba_temp_sock_4'] , "ba_s_5" => $bathroom['ba_temp_sock_5'] , "ba_s_6" => $bathroom['ba_temp_sock_6']);
$json_temp = json_encode($temp);
echo $json_temp;
 ?>
