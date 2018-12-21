<?php
$data = json_decode(file_get_contents('php://input'), true);
$link=mysqli_connect("localhost", "root", "123", "server");
date_default_timezone_set('Europe/Kiev');
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
file_put_contents('log.txt', $output." ".$array['temp_1']);

$update_bedroom = mysqli_query($link, "UPDATE bedroom SET b_temp_sock_1 = $array[temp_1], b_temp_sock_2 = $array[temp_2], b_temp_sock_3 = $array[temp_3], b_temp_sock_4 = $array[temp_4], b_temp_sock_5 = $array[temp_5], b_temp_sock_6 = $array[temp_6], con_sock_1 = $array[conn_1],
  con_sock_2 = $array[conn_2],con_sock_3 = $array[conn_3], con_sock_4 = $array[conn_4], con_sock_5 = $array[conn_5], con_sock_6 = $array[conn_6], date= NOW() WHERE api_key='$get_key'");

//TIME 1 MIN
$res = mysqli_query($link, "SELECT * FROM temp WHERE api_key='$get_key' ORDER BY id DESC LIMIT 1 ");
$db = mysqli_fetch_assoc($res);

$sec_db = strtotime($db['date']);
$timezone = $sec_db + date("Z");

$date_bd = gmdate("Y-n-j", $timezone);
$time_bd = gmdate("G:i:s", $timezone);

$str_date = $date_bd;
$arr_date = explode("-", $str_date);

$str_time = $time_bd;
$arr_time = explode(":", $str_time);

$maketime = mktime ($arr_time[0], $arr_time[1] + 1,  $arr_time[2], $arr_date[1], $arr_date[2], $arr_date[0]);

$real_date = date("Y-n-j G:i:s");
$real_time_sec = strtotime($real_date);

if($real_time_sec > $maketime)
{
  $id = mysqli_query($link, "SELECT COUNT(id) as count FROM  temp");
  $data = mysqli_fetch_assoc($id);
  $id_bd = $data['count'] + 1;

  $insert_temp = mysqli_query($link, "INSERT INTO temp (id, api_key, date, b_sock_1, b_sock_2, b_sock_3, b_sock_4, b_sock_5, b_sock_6) VALUES ($id_bd, $get_key, NOW(), $array[temp_1], $array[temp_2], $array[temp_3], $array[temp_4], $array[temp_5], $array[temp_6])");
}
?>
