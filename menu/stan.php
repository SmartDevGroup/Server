<?php
session_start();
$get_key = $_SESSION['api'];
$link=mysqli_connect("localhost", "root", "123", "server");

$data_bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom = mysqli_fetch_assoc($data_bathroom);
$max_bathroom = $bathroom['Sum'];
$count_bathroom = 0;
for ($i=1; $i < 7; $i++) {
  $array["ba_$i"] = $bathroom["bathroom_socket_$i"];
}
for ($i=1; $i <= $max_bathroom; $i++) {
  $count_bathroom += $array["ba_$i"];
}
if($max_bathroom == $count_bathroom)
{
  $ba_stan ="<h3 class=' text-success'>All ON</h3>";
}
else
{
  if($count_bathroom == 0)
  {
    $ba_stan = "<h3 class=' text-danger'>All OFF</h3>";
  }
  else
  {
    if($max_bathroom > $count_bathroom)
    {
      $ba_stan = "<h3 class=' text-info'>Some devices ON</h3>";
    }
  }
}

$data_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);
$max_bedroom = $bedroom['Sum'];
$count_bedroom = 0;
for ($i=1; $i < 7; $i++) {
  $array["b_$i"] = $bedroom["bedroom_socket_$i"];
}
for ($i=1; $i <= $max_bedroom; $i++) {
  $count_bedroom += $array["b_$i"];
}
//echo $count_bedroom."".$max_bedroom;
if($max_bedroom == $count_bedroom)
{
  $b_stan ="<h3 class=' text-success'>All ON</h3>";
}
else
{
  if($count_bedroom == 0)
  {
    $b_stan = "<h3 class=' text-danger'>All OFF</h3>";
  }
  else
  {
    if($max_bedroom > $count_bedroom)
    {
      $b_stan = "<h3 class=' text-info'>Some devices ON</h3>";
    }
  }
}

$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen= mysqli_fetch_assoc($data_kitchen);
$max_kitchen = $kitchen['Sum'];
$count_kitchen = 0;
for ($i=1; $i < 7; $i++) {
  $array["k_$i"] = $kitchen["kitchen_socket_$i"];
}
for ($i=1; $i <= $max_kitchen; $i++) {
  $count_kitchen += $array["k_$i"];
}
if($max_kitchen == $count_kitchen)
{
  $k_stan ="<h3 class=' text-success'>All ON</h3>";
}
else
{
  if($count_kitchen == 0)
  {
    $k_stan = "<h3 class=' text-danger'>All OFF</h3>";
  }
  else
  {
    if($max_kitchen > $count_kitchen)
    {
      $k_stan = "<h3 class=' text-info'>Some devices ON</h3>";
    }
  }
}

$data_living = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$home= mysqli_fetch_assoc($data_living);
$max_home = $home['Sum'];
$count_home = 0;
for ($i=1; $i < 7; $i++) {
  $array["h_$i"] = $home["home_socket_$i"];
}
for ($i=1; $i <= $max_home; $i++) {
  $count_home += $array["h_$i"];
}
if($max_home == $count_home)
{
  $h_stan ="<h3 class=' text-success'>All ON</h3>";
}
else
{
  if($count_home == 0)
  {
    $h_stan = "<h3 class=' text-danger'>All OFF</h3>";
  }
  else
  {
    if($max_home > $count_home)
    {
      $h_stan = "<h3 class=' text-info'>Some devices ON</h3>";
    }
  }
}

$arr = array("b_stan" => $b_stan, "k_stan" => $k_stan, "ba_stan" => $ba_stan, "l_stan" => $h_stan);
$jsonn = json_encode($arr);
echo $jsonn;
?>
