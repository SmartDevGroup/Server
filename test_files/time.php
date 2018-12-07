<?php
date_default_timezone_set('Europe/Kiev');
$link=mysqli_connect("localhost", "root", "123", "server");
$res = mysqli_query($link, "SELECT * FROM temp WHERE api_key='123456789' ORDER BY id DESC LIMIT 1 ");
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
echo "|||БАЗА: ".$db['date']."|||"."Секунди Бази: ".$sec_db."|||".$maketime." ".$real_time_sec." ";

if($real_time_sec > $maketime)
{
  echo "string";
}
else {
  echo "no";
}
?>
