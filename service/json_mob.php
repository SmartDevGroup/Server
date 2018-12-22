<?php

$api_key = $_GET['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$db_connect = mysqli_query($link, "SELECT * FROM users WHERE api_key = '$api_key'");
$data_db = mysqli_num_rows($db_connect);

if($data_db == 1)
{
  $db_id_bedroom = mysqli_query($link, "SELECT * FROM id WHERE api_key='$api_key'");
  $id_bedroom = mysqli_fetch_assoc($db_id_bedroom);

  $db_status_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$api_key'");
  $status_data_bedroom = mysqli_fetch_assoc($db_status_bedroom);

  if($status_data_bedroom['bedroom_socket_1'] == 1){$bed_stat_1 = "Enable";}else {$bed_stat_1 = "Disable";}
  if($status_data_bedroom['bedroom_socket_2'] == 1){$bed_stat_2 = "Enable";}else {$bed_stat_2 = "Disable";}
  if($status_data_bedroom['bedroom_socket_3'] == 1){$bed_stat_3 = "Enable";}else {$bed_stat_3 = "Disable";}
  if($status_data_bedroom['bedroom_socket_4'] == 1){$bed_stat_4 = "Enable";}else {$bed_stat_4 = "Disable";}
  if($status_data_bedroom['bedroom_socket_5'] == 1){$bed_stat_5 = "Enable";}else {$bed_stat_5 = "Disable";}
  if($status_data_bedroom['bedroom_socket_6'] == 1){$bed_stat_6 = "Enable";}else {$bed_stat_6 = "Disable";}

  $name_b_1 = (string)$status_data_bedroom['name_sock_1'];
  $name_b_2 = (string)$status_data_bedroom['name_sock_2'];
  $name_b_3 = (string)$status_data_bedroom['name_sock_3'];
  $name_b_4 = (string)$status_data_bedroom['name_sock_4'];
  $name_b_5 = (string)$status_data_bedroom['name_sock_5'];
  $name_b_6 = (string)$status_data_bedroom['name_sock_6'];

  //bedroom
  //kitchen
  $db_id_kitchen = mysqli_query($link, "SELECT * FROM id WHERE api_key='$api_key'");
  $id_kitchen = mysqli_fetch_assoc($db_id_kitchen);

  $db_status_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$api_key'");
  $status_data_kitchen = mysqli_fetch_assoc($db_status_kitchen);

  if($status_data_kitchen['kitchen_socket_1'] == 1){$kit_stat_1 = "Enable";}else {$kit_stat_1 = "Disable";}
  if($status_data_kitchen['kitchen_socket_2'] == 1){$kit_stat_2 = "Enable";}else {$kit_stat_2 = "Disable";}
  if($status_data_kitchen['kitchen_socket_3'] == 1){$kit_stat_3 = "Enable";}else {$kit_stat_3 = "Disable";}
  if($status_data_kitchen['kitchen_socket_4'] == 1){$kit_stat_4 = "Enable";}else {$kit_stat_4 = "Disable";}
  if($status_data_kitchen['kitchen_socket_5'] == 1){$kit_stat_5 = "Enable";}else {$kit_stat_5 = "Disable";}
  if($status_data_kitchen['kitchen_socket_6'] == 1){$kit_stat_6 = "Enable";}else {$kit_stat_6 = "Disable";}

  $name_k_1 = (string)$status_data_kitchen['name_sock_1'];
  $name_k_2 = (string)$status_data_kitchen['name_sock_2'];
  $name_k_3 = (string)$status_data_kitchen['name_sock_3'];
  $name_k_4 = (string)$status_data_kitchen['name_sock_4'];
  $name_k_5 = (string)$status_data_kitchen['name_sock_5'];
  $name_k_6 = (string)$status_data_kitchen['name_sock_6'];
  //kitchen
  //json
  $data = array(
  1 => array("id" => $id_bedroom['id_b_1'],"room" => "bedroom","group" => "socket","name" => "$name_b_1","value" => $bed_stat_1,"temp" => $status_data_bedroom['b_temp_sock_1']),
  2 => array("id" => $id_bedroom['id_b_2'],"room" => "bedroom","group" => "socket","name" => "$name_b_2","value" => $bed_stat_2,"temp" => $status_data_bedroom['b_temp_sock_2']),
  3 => array("id" => $id_bedroom['id_b_3'],"room" => "bedroom","group" => "socket","name" => "$name_b_3","value" => $bed_stat_3,"temp" => $status_data_bedroom['b_temp_sock_3']),
  4 => array("id" => $id_bedroom['id_b_4'],"room" => "bedroom","group" => "socket","name" => "$name_b_4","value" => $bed_stat_4,"temp" => $status_data_bedroom['b_temp_sock_4']),
  5 => array("id" => $id_bedroom['id_b_5'],"room" => "bedroom","group" => "socket","name" => "$name_b_5","value" => $bed_stat_5,"temp" => $status_data_bedroom['b_temp_sock_5']),
  6 => array("id" => $id_bedroom['id_b_6'],"room" => "bedroom","group" => "socket","name" => "$name_b_6","value" => $bed_stat_6,"temp" => $status_data_bedroom['b_temp_sock_6']),

  7 => array("id" => $id_kitchen['id_k_1'],"room" => "kitchen","group" => "socket","name" => $name_k_1,"value" => $kit_stat_1,"temp" => $status_data_kitchen['k_temp_sock_1']),
  8 => array("id" => $id_kitchen['id_k_2'],"room" => "kitchen","group" => "socket","name" => $name_k_2,"value" => $kit_stat_2,"temp" => $status_data_kitchen['k_temp_sock_2']),
  9 => array("id" => $id_kitchen['id_k_3'],"room" => "kitchen","group" => "socket","name" => $name_k_3,"value" => $kit_stat_3,"temp" => $status_data_kitchen['k_temp_sock_3']),
  10 => array("id" => $id_kitchen['id_k_4'],"room" => "kitchen","group" => "socket","name" => $name_k_4,"value" => $kit_stat_4,"temp" => $status_data_kitchen['k_temp_sock_4']),
  11 => array("id" => $id_kitchen['id_k_5'],"room" => "kitchen","group" => "socket","name" => $name_k_5,"value" => $kit_stat_5,"temp" => $status_data_kitchen['k_temp_sock_5']),
  12 => array("id" => $id_kitchen['id_k_6'],"room" => "kitchen","group" => "socket","name" => $name_k_6,"value" => $kit_stat_6,"temp" => $status_data_kitchen['k_temp_sock_6'])
  );

  $json = json_encode($data);
  echo $json;
}
else {

}
?>
