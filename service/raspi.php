<?php
session_write_close();
ignore_user_abort(false);
set_time_limit(40);

$api_key = $_GET['api'];
$connection = $_GET['con'];

$link=mysqli_connect("localhost", "root", "", "server");

$mysql = mysqli_query($link,"SELECT * FROM users WHERE api_key = '$api_key'");
$num_rows = mysqli_num_rows($mysql);

if($num_rows == 1 || $num_rows > 1)
{
  if($connection == "first")
  {
    //bedroom
    $db_id_bedroom = mysqli_query($link, "SELECT * FROM id WHERE api_key='$api_key'");
    $id_bedroom = mysqli_fetch_assoc($db_id_bedroom);

    $db_ip_bedroom = mysqli_query($link, "SELECT * FROM network_device WHERE api_key='$api_key'");
    $ip_bedroom = mysqli_fetch_assoc($db_ip_bedroom);

    $db_status_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$api_key'");
    $status_data_bedroom = mysqli_fetch_assoc($db_status_bedroom);

    if($status_data_bedroom['bedroom_socket_1'] == 1){$bed_stat_1 = "Enable";}else {$bed_stat_1 = "Disable";}
    if($status_data_bedroom['bedroom_socket_2'] == 1){$bed_stat_2 = "Enable";}else {$bed_stat_2 = "Disable";}
    if($status_data_bedroom['bedroom_socket_3'] == 1){$bed_stat_3 = "Enable";}else {$bed_stat_3 = "Disable";}
    if($status_data_bedroom['bedroom_socket_4'] == 1){$bed_stat_4 = "Enable";}else {$bed_stat_4 = "Disable";}
    if($status_data_bedroom['bedroom_socket_5'] == 1){$bed_stat_5 = "Enable";}else {$bed_stat_5 = "Disable";}
    if($status_data_bedroom['bedroom_socket_6'] == 1){$bed_stat_6 = "Enable";}else {$bed_stat_6 = "Disable";}

    $name_b_1 = (string)$status_data_kitchen['name_sock_1'];
    $name_b_2 = (string)$status_data_kitchen['name_sock_2'];
    $name_b_3 = (string)$status_data_kitchen['name_sock_3'];
    $name_b_4 = (string)$status_data_kitchen['name_sock_4'];
    $name_b_5 = (string)$status_data_kitchen['name_sock_5'];
    $name_b_6 = (string)$status_data_kitchen['name_sock_6'];

    //bedroom
    //kitchen
    $db_id_kitchen = mysqli_query($link, "SELECT * FROM id WHERE api_key='$api_key'");
    $id_kitchen = mysqli_fetch_assoc($db_id_kitchen);

    $db_ip_kitchen = mysqli_query($link, "SELECT * FROM network_device WHERE api_key='$api_key'");
    $ip_kitchen = mysqli_fetch_assoc($db_ip_kitchen);

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
    1 => array("id" => $id_bedroom['id_b_1'],"room" => "bedroom","group" => "socket","name" => "$name_b_1","value" => $bed_stat_1,"ip" => $ip_bedroom['ip_bedroom_1']),
    2 => array("id" => $id_bedroom['id_b_2'],"room" => "bedroom","group" => "socket","name" => "$name_b_2","value" => $bed_stat_2,"ip" => $ip_bedroom['ip_bedroom_2']),
    3 => array("id" => $id_bedroom['id_b_3'],"room" => "bedroom","group" => "socket","name" => "$name_b_3","value" => $bed_stat_3,"ip" => $ip_bedroom['ip_bedroom_3']),
    4 => array("id" => $id_bedroom['id_b_4'],"room" => "bedroom","group" => "socket","name" => "$name_b_4","value" => $bed_stat_4,"ip" => $ip_bedroom['ip_bedroom_4']),
    5 => array("id" => $id_bedroom['id_b_5'],"room" => "bedroom","group" => "socket","name" => "$name_b_5","value" => $bed_stat_5,"ip" => $ip_bedroom['ip_bedroom_5']),
    6 => array("id" => $id_bedroom['id_b_6'],"room" => "bedroom","group" => "socket","name" => "$name_b_6","value" => $bed_stat_6,"ip" => $ip_bedroom['ip_bedroom_6']),

    7 => array("id" => $id_kitchen['id_k_1'],"room" => "kitchen","group" => "socket","name" => $name_k_1,"value" => $kit_stat_1,"ip" => $ip_kitchen['ip_kitchen_1']),
    8 => array("id" => $id_kitchen['id_k_2'],"room" => "kitchen","group" => "socket","name" => $name_k_2,"value" => $kit_stat_2,"ip" => $ip_kitchen['ip_kitchen_2']),
    9 => array("id" => $id_kitchen['id_k_3'],"room" => "kitchen","group" => "socket","name" => $name_k_3,"value" => $kit_stat_3,"ip" => $ip_kitchen['ip_kitchen_3']),
    10 => array("id" => $id_kitchen['id_k_4'],"room" => "kitchen","group" => "socket","name" => $name_k_4,"value" => $kit_stat_4,"ip" => $ip_kitchen['ip_kitchen_4']),
    11 => array("id" => $id_kitchen['id_k_5'],"room" => "kitchen","group" => "socket","name" => $name_k_5,"value" => $kit_stat_5,"ip" => $ip_kitchen['ip_kitchen_5']),
    12 => array("id" => $id_kitchen['id_k_6'],"room" => "kitchen","group" => "socket","name" => $name_k_6,"value" => $kit_stat_6,"ip" => $ip_kitchen['ip_kitchen_6'])
    );

    $json = json_encode($data);
    echo $json;
    //json
  }
  else
  {
    while (true) {
      $select_user_data = mysqli_query($link,"SELECT * FROM users WHERE api_key = '$api_key'");
      $select_user = mysqli_fetch_assoc($select_user_data);

      $select_data_bedroom = mysqli_query($link,"SELECT * FROM bedroom WHERE api_key = '$api_key'");
      $select_data_b = mysqli_fetch_assoc($select_data_bedroom);

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

        $lastId = 0;

        $data = array(
        1 => array("id" => $id_bedroom['id_b_1'],"room" => "bedroom","group" => "socket","name" => "$name_b_1","value" => $bed_stat_1,"ip" => $ip_bedroom['ip_bedroom_1']),
        2 => array("id" => $id_bedroom['id_b_2'],"room" => "bedroom","group" => "socket","name" => "$name_b_2","value" => $bed_stat_2,"ip" => $ip_bedroom['ip_bedroom_2']),
        3 => array("id" => $id_bedroom['id_b_3'],"room" => "bedroom","group" => "socket","name" => "$name_b_3","value" => $bed_stat_3,"ip" => $ip_bedroom['ip_bedroom_3']),
        4 => array("id" => $id_bedroom['id_b_4'],"room" => "bedroom","group" => "socket","name" => "$name_b_4","value" => $bed_stat_4,"ip" => $ip_bedroom['ip_bedroom_4']),
        5 => array("id" => $id_bedroom['id_b_5'],"room" => "bedroom","group" => "socket","name" => "$name_b_5","value" => $bed_stat_5,"ip" => $ip_bedroom['ip_bedroom_5']),
        6 => array("id" => $id_bedroom['id_b_6'],"room" => "bedroom","group" => "socket","name" => "$name_b_6","value" => $bed_stat_6,"ip" => $ip_bedroom['ip_bedroom_6']),
        );

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

        $lastId = 0;

        $data = array(
        7 => array("id" => $id_kitchen['id_k_1'],"room" => "kitchen","group" => "socket","name" => $name_k_1,"value" => $kit_stat_1,"ip" => $ip_kitchen['ip_kitchen_1']),
        8 => array("id" => $id_kitchen['id_k_2'],"room" => "kitchen","group" => "socket","name" => $name_k_2,"value" => $kit_stat_2,"ip" => $ip_kitchen['ip_kitchen_2']),
        9 => array("id" => $id_kitchen['id_k_3'],"room" => "kitchen","group" => "socket","name" => $name_k_3,"value" => $kit_stat_3,"ip" => $ip_kitchen['ip_kitchen_3']),
        10 => array("id" => $id_kitchen['id_k_4'],"room" => "kitchen","group" => "socket","name" => $name_k_4,"value" => $kit_stat_4,"ip" => $ip_kitchen['ip_kitchen_4']),
        11 => array("id" => $id_kitchen['id_k_5'],"room" => "kitchen","group" => "socket","name" => $name_k_5,"value" => $kit_stat_5,"ip" => $ip_kitchen['ip_kitchen_5']),
        12 => array("id" => $id_kitchen['id_k_6'],"room" => "kitchen","group" => "socket","name" => $name_k_6,"value" => $kit_stat_6,"ip" => $ip_kitchen['ip_kitchen_6'])
        );

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
  }
}
else
{
  header("HTTP/1.0 404 Not Found");
  //header('Location: https://coub.com/view/1gpa64');
}

 ?>
