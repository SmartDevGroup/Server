<?php

$get_key = $_POST['user'];

$link=mysqli_connect("localhost", "root", "", "server");

for ($i=1; $i < 7; $i++) {
    $array["b_temp_$i"] = $_POST["$i"];
    if($array["b_temp_$i"] == "" || $array["b_temp_$i"] == 0)
    {
      $array["b_conn_$i"] = 0;
    }
    else
    {
      $array["b_conn_$i"] = 1;
    }
}
for ($j=1; $j < 7; $j++) {
    $a = $j + 6;
    $array["k_temp_$j"] = $_POST["$a"];
    if($array["k_temp_$j"] == "" || $array["k_temp_$j"] == 0)
    {
      $array["k_conn_$j"] = 0;
    }
    else
    {
      $array["k_conn_$j"] = 1;
    }
}
//ob_start();
//file_put_contents('log.txt', $array["k_temp_1"].$array["k_conn_1"]);

$update_bedroom = mysqli_query($link, "UPDATE bedroom SET b_temp_sock_1 = $array[b_temp_1], b_temp_sock_2 = $array[b_temp_2], b_temp_sock_3 = $array[b_temp_3], b_temp_sock_4 = $array[b_temp_4], b_temp_sock_5 = $array[b_temp_5], b_temp_sock_6 = $array[b_temp_6], con_sock_1 = $array[b_conn_1], con_sock_2 = $array[b_conn_2],
  con_sock_3 = $array[b_conn_3], con_sock_4 = $array[b_conn_4], con_sock_5 = $array[b_conn_5], con_sock_6 = $array[b_conn_6], date= NOW() WHERE api_key='$get_key'");

$update_kitchen = mysqli_query($link, "UPDATE kitchen SET k_temp_sock_1 = $array[k_temp_1], k_temp_sock_2 = $array[k_temp_2], k_temp_sock_3 = $array[k_temp_3], k_temp_sock_4 = $array[k_temp_4], k_temp_sock_5 = $array[k_temp_5], k_temp_sock_6 = $array[k_temp_6], con_sock_1 = $array[k_conn_1], con_sock_2 = $array[k_conn_2],
  con_sock_3 = $array[k_conn_3], con_sock_4 = $array[k_conn_4], con_sock_5 = $array[k_conn_5], con_sock_6 = $array[k_conn_6], date= NOW() WHERE api_key='$get_key'");



$id = mysqli_query($link, "SELECT COUNT(id) as count FROM  temp");
$data = mysqli_fetch_assoc($id);
$id_bd = $data['count'] + 1;

$insert_temp = mysqli_query($link, "INSERT INTO temp (id, api_key, date, b_sock_1, b_sock_2, b_sock_3, b_sock_4, b_sock_5, b_sock_6) VALUES ($id_bd, $get_key, NOW(), $array[b_temp_1], $array[b_temp_2], $array[b_temp_3], $array[b_temp_4], $array[b_temp_5], $array[b_temp_6])");


?>
