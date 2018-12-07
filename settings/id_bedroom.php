<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$data_bedroom_id = mysqli_query($link, "SELECT * FROM id WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom_id);

$data_bedroom_name = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom_name = mysqli_fetch_assoc($data_bedroom_name);

$id_bedroom = array("id_b_1" => $bedroom['id_b_1'], "id_b_2" => $bedroom['id_b_2'], "id_b_3" => $bedroom['id_b_3'], "id_b_4" => $bedroom['id_b_4'], "id_b_5" => $bedroom['id_b_5'], "id_b_6" => $bedroom['id_b_6'],
"name_b_1" => $bedroom_name['name_sock_1'], "name_b_2" => $bedroom_name['name_sock_2'], "name_b_3" => $bedroom_name['name_sock_3'], "name_b_4" => $bedroom_name['name_sock_4'], "name_b_5" => $bedroom_name['name_sock_5'], "name_b_6" => $bedroom_name['name_sock_6']);

$json = json_encode($id_bedroom);
echo $json;
?>
