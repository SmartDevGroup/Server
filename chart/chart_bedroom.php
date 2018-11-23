<?php

session_start();
$get_key = $_SESSION['api'];
$link=mysqli_connect("localhost", "root", "", "server");
$data_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);

$temp = array("sum" => $bedroom['Sum'], "b_s_1" => $bedroom['b_temp_sock_1'], "b_s_2" => $bedroom['b_temp_sock_2'] , "b_s_3" => $bedroom['b_temp_sock_3'] , "b_s_4" => $bedroom['b_temp_sock_4'] , "b_s_5" => $bedroom['b_temp_sock_5'],
"b_s_6" => $bedroom['b_temp_sock_6']);
$json_temp = json_encode($temp);
echo $json_temp;
 ?>
