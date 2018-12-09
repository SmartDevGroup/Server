<?php
session_start();
$get_key = $_SESSION['api'];

$from = $_POST['from'];
$to = $_POST['to'];

date_default_timezone_set('Europe/Kiev');

$lol = mktime (date("H"), date("i"), date("s") , date("n"), date("j") - 1, date("Y"))."  ";
$date_from = gmdate("Y-n-j", strtotime($from) + date("Z"));
$date_to = gmdate("Y-n-j", strtotime($to.'+1 day') + date("Z"));
$link=mysqli_connect("localhost", "root", "123", "server");

if ($from == "dd-mm-yy" && $to == "dd-mm-yy") {
  $res = mysqli_query($link, "SELECT * FROM temp WHERE date < NOW()  AND api_key='$get_key'");
}
else {
  $res = mysqli_query($link, "SELECT * FROM temp WHERE (date BETWEEN '$date_from' AND '$date_to') AND api_key='$get_key'");
}

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
