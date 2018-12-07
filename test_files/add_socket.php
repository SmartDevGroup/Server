<?php

$serial_socket = $_GET['serial'];
$ip_socket = $_GET['ip'];

$link=mysqli_connect("localhost", "root", "123", "server");


$id = mysqli_query($link, "SELECT COUNT(id) as count FROM  users");
$data_id = mysqli_fetch_assoc($id);
$id_bd = $data_id['count'];

$select_from_db = mysqli_query($link, "SELECT * FROM id LIMIT 0, 100");
$data = mysqli_fetch_assoc($select_from_db);

for ($i=0; $i < 25; $i++) {

  if($data["id_b_$i"] == $serial_socket)
  {
      $lol = "id_b_$i";
      $network_device = "ip_bedroom_$i";
      $select_user_key_db = mysqli_query($link, "SELECT api_key FROM id WHERE $lol ='$serial_socket'");
      $data_user = mysqli_fetch_assoc($select_user_key_db);
      $user_key = $data_user["api_key"];

      $update_ip = mysqli_query($link, "UPDATE network_device SET $network_device = '$ip_socket' WHERE api_key='$user_key'");

      $bedroom = mysqli_query($link, "SELECT * FROM network_device WHERE api_key='$user_key'");
      $data_ip = mysqli_fetch_assoc($bedroom);

      if($data_ip[$network_device] == $ip_socket)
      {
        echo "ok";
      }
  }
  if ($data["id_k_$i"] == $serial_socket) {
    $lol = "id_k_$i";
    $network_device = "ip_kitchen_$i";

    $select_user_key_db = mysqli_query($link, "SELECT api_key FROM id WHERE $lol ='$serial_socket'");
    $data_user = mysqli_fetch_assoc($select_user_key_db);
    $user_key = $data_user["api_key"];

    $update_ip = mysqli_query($link, "UPDATE network_device SET $network_device = '$ip_socket' WHERE api_key='$user_key'");

    $kitchen = mysqli_query($link, "SELECT * FROM network_device WHERE api_key='$user_key'");
    $data_ip = mysqli_fetch_assoc($kitchen);

    if($data_ip[$network_device] == $ip_socket)
    {
      echo "ok";
    }
  }

}
 ?>
