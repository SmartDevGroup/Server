<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$home = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($home);

for ($i=1; $i < 7; $i++) {
  $arr_name["h_s_$i"] = $data["name_sock_$i"];
}


$arr = array("h_s_1" => $arr_name['h_s_1'], "h_s_2" => $arr_name['h_s_2'], "h_s_3" => $arr_name['h_s_3'], "h_s_4" => $arr_name['h_s_4'], "h_s_5" => $arr_name['h_s_5'], "h_s_6" => $arr_name['h_s_6']);

$json_n = json_encode($arr);
echo $json_n;
 ?>
