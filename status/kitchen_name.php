<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($kitchen);

for ($i=1; $i < 7; $i++) {
  $arr_name["k_s_$i"] = $data["name_sock_$i"];
}

$arr = array("k_s_1" => $arr_name['k_s_1'], "k_s_2" => $arr_name['k_s_2'], "k_s_3" => $arr_name['k_s_3'], "k_s_4" => $arr_name['k_s_4'], "k_s_5" => $arr_name['k_s_5'], "k_s_6" => $arr_name['k_s_6']);

$json_n = json_encode($arr);
echo $json_n;
 ?>
