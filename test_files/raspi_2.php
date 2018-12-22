<?php
session_write_close();
ignore_user_abort(true);
set_time_limit(40);


$api_key = $_GET['api'];
$temp = $_GET['temp'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

while (true) {
  $select_user_data = mysqli_query($link,"SELECT * FROM users WHERE api_key = '$api_key'");
  $select_user = mysqli_fetch_assoc($select_user_data);

  $select_data_bedroom = mysqli_query($link,"SELECT * FROM bedroom WHERE api_key = '$api_key'");
  $select_data_b = mysqli_fetch_assoc($select_data_bedroom);
  mysqli_query($link, "UPDATE kitchen SET output_k = $lastId WHERE api_key = '$api_key'");
  $select_data_kitchen = mysqli_query($link,"SELECT * FROM kitchen WHERE api_key = '$api_key'");
  $select_data_k = mysqli_fetch_assoc($select_data_kitchen);


  if ($select_data_b['output_b'] > $select_user['output']) {

    $db_id_bedroom = mysqli_query($link, "SELECT * FROM id WHERE api_key='$api_key'");
    $id_bedroom = mysqli_fetch_assoc($db_id_bedroom);

    $db_ip_bedroom = mysqli_query($link, "SELECT * FROM network_device WHERE api_key='$api_key'");
    $ip_bedroom = mysqli_fetch_assoc($db_ip_bedroom);

    $db_status_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$api_key'");
    $status_data_bedroom = mysqli_fetch_assoc($db_status_bedroom);

    if($status_data_bedroom['bedroom_socket_1'] == 1){$bed_stat_1 = "Enable";}else {$bed_stat_1 = "Disable";}
    if($status_data_bedroom['bedroom_socket_2'] == 1){$bed_stat_2 = "Enable";}else {$bed_stat_2 = "Disable";}

    $myText = (string)$status_data_bedroom['name_sock_1'];

    $lastId = 0;

    $data = array(1 => array("id" => $id_bedroom['id_b_1'],"room" => "bedroom","group" => "socket","name" => "$myText","value" => $bed_stat_1,"ip" => $ip_bedroom['ip_bedroom_1']),
    2 => array("id" => $id_bedroom['id_b_2'],"room" => "bedroom","group" => "socket","name" => $status_data_bedroom['name_sock_2'],"value" => $bed_stat_2,"ip" => $ip_bedroom['ip_bedroom_2']));

    $lastId = $status_data_bedroom['output_b'];


    mysqli_query($link, "UPDATE users SET output = $lastId WHERE api_key = '$api_key'");
    mysqli_query($link, "UPDATE kitchen SET output_k = $lastId WHERE api_key = '$api_key'");

    $json = json_encode($data);
    echo $json;
    exit;
  }

  //kitchen
  if ($select_data_k['output_k'] > $select_user['output']) {

    $db_id_kitchen = mysqli_query($link, "SELECT * FROM id WHERE api_key='$api_key'");
    $id_kitchen = mysqli_fetch_assoc($db_id_kitchen);

    $db_ip_kitchen = mysqli_query($link, "SELECT * FROM network_device WHERE api_key='$api_key'");
    $ip_kitchen = mysqli_fetch_assoc($db_ip_kitchen);

    $db_status_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$api_key'");
    $status_data_kitchen = mysqli_fetch_assoc($db_status_kitchen);

    if($status_data_kitchen['kitchen_socket_1'] == 1){$kit_stat_1 = "Enable";}else {$kit_stat_1 = "Disable";}
    if($status_data_kitchen['kitchen_socket_2'] == 1){$kit_stat_2 = "Enable";}else {$kit_stat_2 = "Disable";}

    $name_1 = (string)$status_data_kitchen['name_sock_1'];
    $name_2 = (string)$status_data_kitchen['name_sock_2'];

    $lastId = 0;

    $data = array(1 => array("id" => $id_kitchen['id_k_1'],"room" => "kitchen","group" => "socket","name" => "$name_1","value" => $kit_stat_1,"ip" => $ip_kitchen['ip_kitchen_1']),
    2 => array("id" => $id_kitchen['id_k_2'],"room" => "kitchen","group" => "socket","name" => $name_2,"value" => $kit_stat_2,"ip" => $ip_kitchen['ip_kitchen_2']));

    $lastId = $status_data_kitchen['output_k'];


    mysqli_query($link, "UPDATE users SET output = $lastId WHERE api_key = '$api_key'");
    mysqli_query($link, "UPDATE bedroom SET output_b = $lastId WHERE api_key = '$api_key'");

    $json = json_encode($data);
    echo $json;

    exit;
  }
  //
  sleep(2);
}
 ?>
