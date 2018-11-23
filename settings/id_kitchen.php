<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$data_kitchen_id = mysqli_query($link, "SELECT * FROM id WHERE api_key='$get_key'");
$kitchen = mysqli_fetch_assoc($data_kitchen_id);


$id_kitchen = array("id_k_1" => $kitchen['id_k_1'], "id_k_2" => $kitchen['id_k_2'], "id_k_3" => $kitchen['id_k_3'], "id_k_4" => $kitchen['id_k_4'], "id_k_5" => $kitchen['id_k_5'], "id_k_6" => $kitchen['id_k_6']);

$json = json_encode($id_kitchen);
echo $json;
?>
