<?php

$get_key = $_POST['user'];

$link=mysqli_connect("localhost", "root", "", "server");

$b_temp_1 = $_POST['temp_1'];
$b_temp_2 = $_POST['temp_2'];
$b_temp_3 = $_POST['temp_3'];

$b_conn_1 = $_POST['con_1'];
$b_conn_2 = $_POST['con_2'];
//, con_sock_1 = $b_conn_1, con_sock_2 = $b_conn_2,
$update_bedroom = mysqli_query($link, "UPDATE bedroom SET b_temp_sock_1 = $b_temp_1, b_temp_sock_2 = $b_temp_2, b_temp_sock_3 = $b_temp_3, con_sock_1 = $b_conn_1, con_sock_2 = $b_conn_2, date= NOW() WHERE api_key='$get_key'");

 ?>
