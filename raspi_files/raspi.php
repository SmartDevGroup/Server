<?php

$api_key = $_GET['api'];
$temp = $_GET['temp'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

//STATUS
$db_status_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$api_key'");
$status_data_bedroom = mysqli_fetch_assoc($db_status_bedroom);
//
if($status_data_bedroom['bedroom_socket_1'] == 1){$bed_stat_1 = "Enable";}else {$bed_stat_1 = "Disable";}
if($status_data_bedroom['bedroom_socket_2'] == 1){$bed_stat_2 = "Enable";}else {$bed_stat_2 = "Disable";}
//STATUS

//ID
$db_id_bedroom = mysqli_query($link, "SELECT * FROM id WHERE api_key='$api_key'");
$id_bedroom = mysqli_fetch_assoc($db_id_bedroom);
//ID

//IP
$db_ip_bedroom = mysqli_query($link, "SELECT * FROM network_device WHERE api_key='$api_key'");
$ip_bedroom = mysqli_fetch_assoc($db_ip_bedroom);
//IP

$data = array(1 => array("id" => $id_bedroom['id_b_1'],"room" => "bedroom","group" => "socket","name" => "Socket","value" => $bed_stat_1,"ip" => $ip_bedroom['ip_bedroom_1']),
2 => array("id" => $id_bedroom['id_b_2'],"room" => "bedroom","group" => "socket","name" => "Socket","value" => $bed_stat_2,"ip" => $ip_bedroom['ip_bedroom_2']));

$update_bedroom = mysqli_query($link, "UPDATE bedroom SET b_temp_sock_1 = $temp, date= NOW() WHERE api_key='$api_key'");

$json = json_encode($data);
echo $json;
 ?>
