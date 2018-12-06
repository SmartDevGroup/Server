<?php
$data = json_decode(file_get_contents('php://input'), true);
$link=mysqli_connect("localhost", "root", "", "server");
$get_key = $data["user"];
for ($i=1; $i < 13; $i++) {
  $array["temp_$i"] = intval($data["$i"]["temp"]);
  $array["conn_$i"] = $data["$i"]["connection"];
  if($array["temp_$i"] == "-127")
  {
    $array["temp_$i"] = 25;
  }
}

ob_start();
var_dump($array);
$output = ob_get_clean();
file_put_contents('log.txt', $output." ".$array["temp_1"]." ".$array["conn_1"]);

$update_bedroom = mysqli_query($link, "UPDATE bedroom SET b_temp_sock_1 = $array[temp_1], b_temp_sock_2 = $array[temp_2], b_temp_sock_3 = $array[temp_3], b_temp_sock_4 = $array[temp_4], b_temp_sock_5 = $array[temp_5], b_temp_sock_6 = $array[temp_6], con_sock_1 = $array[conn_1], con_sock_2 = $array[conn_2],
  con_sock_3 = $array[conn_3], con_sock_4 = $array[conn_4], con_sock_5 = $array[conn_5], con_sock_6 = $array[conn_6], date= NOW() WHERE api_key='$get_key'");

$id = mysqli_query($link, "SELECT COUNT(id) as count FROM  temp");
$data = mysqli_fetch_assoc($id);
$id_bd = $data['count'] + 1;

$insert_temp = mysqli_query($link, "INSERT INTO temp (id, api_key, date, b_sock_1, b_sock_2, b_sock_3, b_sock_4, b_sock_5, b_sock_6) VALUES ($id_bd, $get_key, NOW(), $array[temp_1], $array[temp_2], $array[temp_3], $array[temp_4], $array[temp_5], $array[temp_6])");


?>
