<?php
session_start();
$get_key = $_SESSION['api']; //"123456789";//$_SESSION['api'];
$link=mysqli_connect("localhost", "root", "123", "server");

$data_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);
$max_bedroom = 6;
$max_bedroom_temp = 0;
for ($i=1; $i < 7; $i++) {
  $array["b_$i"] = $bedroom["b_temp_sock_$i"];
  if($array["b_$i"] == 0)
  {
    $max_bedroom = $max_bedroom - 1;
  }
  $max_bedroom_temp += $array["b_$i"];
}
if($max_bedroom_temp == 0 || $max_bedroom == 0)
{
  $average_bedroom = 0;
}
else {
  $average_bedroom = $max_bedroom_temp / $max_bedroom;
}

$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen = mysqli_fetch_assoc($data_kitchen);
$max_kitchen = 6;
$max_kitchen_temp = 0;
for ($i=1; $i < 7; $i++) {
  $array["k_$i"] = $kitchen["k_temp_sock_$i"];
  if($array["k_$i"] == 0)
  {
    $max_kitchen = $max_kitchen - 1;
  }
  $max_kitchen_temp += $array["k_$i"];
}
if($max_kitchen_temp == 0 || $max_kitchen == 0)
{
  $average_kitchen = 0;
}
else {
  $average_kitchen = $max_kitchen_temp / $max_kitchen;
}

$data_bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom = mysqli_fetch_assoc($data_bathroom);
$max_bathroom = 6;
$max_bathroom_temp = 0;
for ($i=1; $i < 7; $i++) {
  $array["ba_$i"] = $bathroom["ba_temp_sock_$i"];
  if($array["ba_$i"] == 0)
  {
    $max_bathroom = $max_bathroom - 1;
  }
  $max_bathroom_temp += $array["ba_$i"];
}
if($max_bathroom_temp == 0 || $max_bathroom == 0)
{
  $average_bathroom = 0;
}
else {
  $average_bathroom = $max_bathroom_temp / $max_bathroom;
}

$data_livingroom = mysqli_query($link, "SELECT * FROM livingroom  WHERE api_key='$get_key'");
$livingroom  = mysqli_fetch_assoc($data_livingroom);
$max_livingroom = 6;
$max_livingroom_temp = 0;
for ($i=1; $i < 7; $i++) {
  $array["h_$i"] = $livingroom["h_temp_sock_$i"];
  if($array["h_$i"] == 0)
  {
    $max_livingroom = $max_livingroom - 1;
  }
  $max_livingroom_temp += $array["h_$i"];
}
if($max_livingroom_temp == 0 || $max_livingroom == 0)
{
  $average_livingroom = 0;
}
else {
  $average_livingroom = $max_livingroom_temp / $max_livingroom;
}

$temp = array('kit_temp' => round($average_kitchen, 1), 'bed_temp' => round($average_bedroom, 1), 'ba_temp' => round($average_bathroom, 1), 'l_temp' => round($average_livingroom, 1));
$json = json_encode($temp);
echo $json;
?>
