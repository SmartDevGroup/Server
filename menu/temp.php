<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen= mysqli_fetch_assoc($data_kitchen);

$k_temp_1 = $kitchen['k_temp_sock_1'];
$k_temp_2 = $kitchen['k_temp_sock_2'];
$k_temp_3 = $kitchen['k_temp_sock_3'];
$k_temp_4 = $kitchen['k_temp_sock_4'];
$k_temp_5 = $kitchen['k_temp_sock_5'];
$k_temp_6 = $kitchen['k_temp_sock_6'];
$sum_kit_sock = $kitchen['Sum'];

if ($sum_kit_sock == 6) {
  $sum_kit_temp = ($k_temp_1 + $k_temp_2 + $k_temp_3 + $k_temp_4 + $k_temp_5 + $k_temp_6) / 6;
}
if($sum_kit_sock == 5){
  $sum_kit_temp = ($k_temp_1 + $k_temp_2 + $k_temp_3 + $k_temp_4 + $k_temp_5) / 5;
}
if($sum_kit_sock == 4){
  $sum_kit_temp = ($k_temp_1 + $k_temp_2 + $k_temp_3 + $k_temp_4) / 4;
}
if($sum_kit_sock == 3){
  $sum_kit_temp = ($k_temp_1 + $k_temp_2 + $k_temp_3) / 3;
}
if($sum_kit_sock == 2){
  $sum_kit_temp = ($k_temp_1 + $k_temp_2) / 2;
}
if($sum_kit_sock == 1){
  $sum_kit_temp = ($k_temp_1) / 1;
}
///BEDROOM
$data_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom= mysqli_fetch_assoc($data_bedroom);

$b_temp_1 = $bedroom['b_temp_sock_1'];
$b_temp_2 = $bedroom['b_temp_sock_2'];
$b_temp_3 = $bedroom['b_temp_sock_3'];
$b_temp_4 = $bedroom['b_temp_sock_4'];
$b_temp_5 = $bedroom['b_temp_sock_5'];
$b_temp_6 = $bedroom['b_temp_sock_6'];
$sum_bed_sock = $bedroom['Sum'];

if ($sum_bed_sock == 6) {
  $sum_bed_temp = ($b_temp_1 + $b_temp_2 + $b_temp_3 + $b_temp_4 + $b_temp_5 + $b_temp_6) / 6;
}
if($sum_bed_sock == 5){
  $sum_bed_temp = ($b_temp_1 + $b_temp_2 + $b_temp_3 + $b_temp_4 + $b_temp_5) / 5;
}
if($sum_bed_sock == 4){
  $sum_bed_temp = ($b_temp_1 + $b_temp_2 + $b_temp_3 + $b_temp_4) / 4;
}
if($sum_bed_sock == 3){
  $sum_bed_temp = ($b_temp_1 + $b_temp_2 + $b_temp_3) / 3;
}
if($sum_bed_sock == 2){
  $sum_bed_temp = ($b_temp_1 + $b_temp_2) / 2;
}
if($sum_bed_sock == 1){
  $sum_bed_temp = ($b_temp_1) / 1;
}


///BATHROOM
$data_bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom= mysqli_fetch_assoc($data_bathroom);

$ba_temp_1 = $bathroom['ba_temp_sock_1'];
$ba_temp_2 = $bathroom['ba_temp_sock_2'];
$ba_temp_3 = $bathroom['ba_temp_sock_3'];
$ba_temp_4 = $bathroom['ba_temp_sock_4'];
$ba_temp_5 = $bathroom['ba_temp_sock_5'];
$ba_temp_6 = $bathroom['ba_temp_sock_6'];
$sum_ba_sock = $bathroom['Sum'];

if ($sum_ba_sock == 6) {
  $sum_ba_temp = ($ba_temp_1 + $ba_temp_2 + $ba_temp_3 + $ba_temp_4 + $ba_temp_5 + $ba_temp_6) / 6;
}
if($sum_ba_sock == 5){
  $sum_ba_temp = ($ba_temp_1 + $ba_temp_2 + $ba_temp_3 + $ba_temp_4 + $ba_temp_5) / 5;
}
if($sum_ba_sock == 4){
  $sum_ba_temp = ($ba_temp_1 + $ba_temp_2 + $ba_temp_3 + $ba_temp_4) / 4;
}
if($sum_ba_sock == 3){
  $sum_ba_temp = ($ba_temp_1 + $ba_temp_2 + $ba_temp_3) / 3;
}
if($sum_ba_sock == 2){
  $sum_ba_temp = ($ba_temp_1 + $ba_temp_2) / 2;
}
if($sum_ba_sock == 1){
  $sum_ba_temp = ($ba_temp_1) / 1;
}

///LIVING
$data_living = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$living= mysqli_fetch_assoc($data_living);

$l_temp_1 = $living['h_temp_sock_1'];
$l_temp_2 = $living['h_temp_sock_2'];
$l_temp_3 = $living['h_temp_sock_3'];
$l_temp_4 = $living['h_temp_sock_4'];
$l_temp_5 = $living['h_temp_sock_5'];
$l_temp_6 = $living['h_temp_sock_6'];
$sum_l_sock = $living['Sum'];

if ($sum_l_sock == 6) {
  $sum_l_temp = ($l_temp_1 + $l_temp_2 + $l_temp_3 + $l_temp_4 + $l_temp_5 + $l_temp_6) / 6;
}
if($sum_l_sock == 5){
  $sum_l_temp = ($l_temp_1 + $l_temp_2 + $l_temp_3 + $l_temp_4 + $l_temp_5) / 5;
}
if($sum_l_sock == 4){
  $sum_l_temp = ($l_temp_1 + $l_temp_2 + $l_temp_3 + $l_temp_4) / 4;
}
if($sum_l_sock == 3){
  $sum_l_temp = ($l_temp_1 + $l_temp_2 + $l_temp_3) / 3;
}
if($sum_l_sock == 2){
  $sum_l_temp = ($l_temp_1 + $l_temp_2) / 2;
}
if($sum_l_sock == 1){
  $sum_l_temp = ($l_temp_1) / 1;
}

$temp = array('kit_temp' => round($sum_kit_temp, 1), 'bed_temp' => round($sum_bed_temp, 1), 'ba_temp' => round($sum_ba_temp, 1), 'l_temp' => round($sum_l_temp, 1));
$json = json_encode($temp);
echo $json;
 ?>
