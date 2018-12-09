<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($bathroom);

for ($i=1; $i < 7; $i++) {
  $arr_name["ba_s_$i"] = $data["name_sock_$i"];
}

$arr = array("ba_s_1" => $arr_name['ba_s_1'], "ba_s_2" => $arr_name['ba_s_2'], "ba_s_3" => $arr_name['ba_s_3'], "ba_s_4" => $arr_name['ba_s_4'], "ba_s_5" => $arr_name['ba_s_5'], "ba_s_6" => $arr_name['ba_s_6']);

$json_n = json_encode($arr);
echo $json_n;
 ?>
