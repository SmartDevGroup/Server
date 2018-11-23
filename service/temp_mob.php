<?php
$get_key = $_GET['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($bedroom);

$arr = $arrayName = array("bedroom_socket_1" => $data['b_temp_sock_1'], "bedroom_socket_2" => $data['b_temp_sock_2'],"bedroom_socket_3" => $data['b_temp_sock_3'], "bedroom_socket_4" => $data['b_temp_sock_4'],"bedroom_socket_5" => $data['b_temp_sock_5'], "bedroom_socket_6" => $data['b_temp_sock_6']);

$json = json_encode($arr);
echo $json;
 ?>
