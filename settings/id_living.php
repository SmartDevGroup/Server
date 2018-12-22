<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$data_living_id = mysqli_query($link, "SELECT * FROM id WHERE api_key='$get_key'");
$living = mysqli_fetch_assoc($data_living_id);

$data_living_name = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$living_name = mysqli_fetch_assoc($data_living_name);


$id_living = array("id_l_1" => $living['id_l_1'], "id_l_2" => $living['id_l_2'], "id_l_3" => $living['id_l_3'], "id_l_4" => $living['id_l_4'], "id_l_5" => $living['id_l_5'], "id_l_6" => $living['id_l_6'],
"name_l_1" => $living_name['name_sock_1'], "name_l_2" => $living_name['name_sock_2'], "name_l_3" => $living_name['name_sock_3'], "name_l_4" => $living_name['name_sock_4'], "name_l_5" => $living_name['name_sock_5'], "name_l_6" => $living_name['name_sock_6']);

$json = json_encode($id_living);
echo $json;
?>
