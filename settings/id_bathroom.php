<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$data_bathroom_id = mysqli_query($link, "SELECT * FROM id WHERE api_key='$get_key'");
$bathroom = mysqli_fetch_assoc($data_bathroom_id);

$data_bathroom_name = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom_name = mysqli_fetch_assoc($data_bathroom_name);


$id_bathroom = array("id_ba_1" => $bathroom['id_ba_1'], "id_ba_2" => $bathroom['id_ba_2'], "id_ba_3" => $bathroom['id_ba_3'], "id_ba_4" => $bathroom['id_ba_4'], "id_ba_5" => $bathroom['id_ba_5'], "id_ba_6" => $bathroom['id_ba_6'],
"name_ba_1" => $bathroom_name['name_sock_1'], "name_ba_2" => $bathroom_name['name_sock_2'], "name_ba_3" => $bathroom_name['name_sock_3'], "name_ba_4" => $bathroom_name['name_sock_4'], "name_ba_5" => $bathroom_name['name_sock_5'], "name_ba_6" => $bathroom_name['name_sock_6']);

$json = json_encode($id_bathroom);
echo $json;
?>
