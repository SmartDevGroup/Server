<?php
header("Refresh: 10");
$get_key = $_GET['api'];
$link=mysqli_connect("localhost", "root", "", "server");

$id = mysqli_query($link, "SELECT COUNT(id) as count FROM  temp");
$data = mysqli_fetch_assoc($id);
echo $id_bd = $data['count'] + 1;

for ($i=1; $i < 7; $i++) {
  $bedroom["b_temp_$i"] = rand(20, 30);
}
var_dump($bedroom);
$insert_temp = mysqli_query($link, "INSERT INTO temp (id, api_key, date, b_sock_1, b_sock_2, b_sock_3, b_sock_4, b_sock_5, b_sock_6) VALUES ($id_bd, $get_key, NOW(), $bedroom[b_temp_1], $bedroom[b_temp_2], $bedroom[b_temp_3], $bedroom[b_temp_4], $bedroom[b_temp_5], $bedroom[b_temp_6])");
 ?>
