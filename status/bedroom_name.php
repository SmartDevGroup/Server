<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($bedroom);

for ($i=1; $i < 7; $i++) {
  $arr_name["b_s_$i"] = $data["name_sock_$i"];
}

$arr = array("b_s_1" => $arr_name['b_s_1'], "b_s_2" => $arr_name['b_s_2'], "b_s_3" => $arr_name['b_s_3'], "b_s_4" => $arr_name['b_s_4'], "b_s_5" => $arr_name['b_s_5'], "b_s_6" => $arr_name['b_s_6']);

$json_n = json_encode($arr);
echo $json_n;
 ?>
