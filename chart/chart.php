<?php
session_start();
$get_key = $_SESSION['api'];
date_default_timezone_set('Europe/Kiev');
//$time = date("Y-n-j G:i:s");
//$time."   ";
//echo int mktime( 0, 0, 0, date("n"), date("j") - 1, date("Y"));

$lol = mktime (date("H"), date("i"), date("s") , date("n"), date("j") - 1, date("Y"))."  ";
$date = gmdate("Y-n-j G:i:s", $lol);

$link=mysqli_connect("localhost", "root", "123", "server");

$res = mysqli_query($link, "SELECT * FROM temp WHERE (date >= '$date' AND date <= NOW()) AND api_key='$get_key'");
$a = 1;
$b = 0;
while($row = mysqli_fetch_array($res))
{
  $j = 6;
  for ($i=1; $i < 7; $i++)
  {
    if($row["b_sock_$i"] == "" || $row["b_sock_$i"] == 0){$j--;}
  }
  if($j == 0){
    $temp["b_temp_$a"] = 0;
  }
  else {
    $average = ($row['b_sock_1'] + $row['b_sock_2'] + $row['b_sock_3'] + $row['b_sock_4'] + $row['b_sock_5'] + $row['b_sock_6'])/$j;
    $temp["b_temp_$a"] = $average;
  }
  $temp["date_$a"] = $row['date'];
  $a++;
  $b++;
}
//var_dump($temp);

$dataPoints = array();

for ($i=1; $i <= $b; $i++) {
  array_push($dataPoints, array("x" => strtotime($temp["date_$i"]) * 1000, "y" => $temp["b_temp_$i"]));
}
$json = json_encode($dataPoints);
echo $json;
?>
