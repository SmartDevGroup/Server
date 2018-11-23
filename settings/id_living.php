<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$data_bedroom_id = mysqli_query($link, "SELECT * FROM id WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom_id);


$id_bedroom = array("id_l_1" => $bedroom['id_l_1'], "id_l_2" => $bedroom['id_l_2'], "id_l_3" => $bedroom['id_l_3'], "id_l_4" => $bedroom['id_l_4'], "id_l_5" => $bedroom['id_l_5'], "id_l_6" => $bedroom['id_l_6']);

$json = json_encode($id_bedroom);
echo $json;
?>
