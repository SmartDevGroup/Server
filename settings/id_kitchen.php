<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$data_kitchen_id = mysqli_query($link, "SELECT * FROM id WHERE api_key='$get_key'");
$kitchen = mysqli_fetch_assoc($data_kitchen_id);

$data_kitchen_name = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen_name = mysqli_fetch_assoc($data_kitchen_name);


$id_kitchen = array("id_k_1" => $kitchen['id_k_1'], "id_k_2" => $kitchen['id_k_2'], "id_k_3" => $kitchen['id_k_3'], "id_k_4" => $kitchen['id_k_4'], "id_k_5" => $kitchen['id_k_5'], "id_k_6" => $kitchen['id_k_6'],
"name_k_1" => $kitchen_name['name_sock_1'], "name_k_2" => $kitchen_name['name_sock_2'], "name_k_3" => $kitchen_name['name_sock_3'], "name_k_4" => $kitchen_name['name_sock_4'], "name_k_5" => $kitchen_name['name_sock_5'], "name_k_6" => $kitchen_name['name_sock_6']);

$json = json_encode($id_kitchen);
echo $json;
?>
