<?php

$get_key = $_POST['user'];

$link=mysqli_connect("localhost", "root", "", "server");

$b_temp_1 = $_POST['temp_1'];
$b_temp_2 = $_POST['temp_2'];
$b_temp_3 = $_POST['temp_3'];
$b_temp_4 = $_POST['temp_4'];
$b_temp_5 = $_POST['temp_5'];
$b_temp_6 = $_POST['temp_6'];

$k_temp_1 = $_POST['temp_7'];
$k_temp_2 = $_POST['temp_8'];
$k_temp_3 = $_POST['temp_9'];
$k_temp_4 = $_POST['temp_10'];
$k_temp_5 = $_POST['temp_11'];
$k_temp_6 = $_POST['temp_12'];

$b_conn_1 = $_POST['con_1'];
$b_conn_2 = $_POST['con_2'];
$b_conn_3 = $_POST['con_3'];
$b_conn_4 = $_POST['con_4'];
$b_conn_5 = $_POST['con_5'];
$b_conn_6 = $_POST['con_6'];

$k_conn_1 = $_POST['con_1'];
$k_conn_2 = $_POST['con_2'];
$k_conn_3 = $_POST['con_3'];
$k_conn_4 = $_POST['con_4'];
$k_conn_5 = $_POST['con_5'];
$k_conn_6 = $_POST['con_6'];

$update_bedroom = mysqli_query($link, "UPDATE bedroom SET b_temp_sock_1 = $b_temp_1, b_temp_sock_2 = $b_temp_2, b_temp_sock_3 = $b_temp_3, con_sock_1 = $b_conn_1, con_sock_2 = $b_conn_2, date= NOW() WHERE api_key='$get_key'");

 ?>
