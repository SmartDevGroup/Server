<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$data_bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom = mysqli_fetch_assoc($data_bathroom);
$max_bathroom = $bathroom['Sum'];
$data_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);
$max_bedroom = $bedroom['Sum'];
$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen= mysqli_fetch_assoc($data_kitchen);
$max_kitchen = $kitchen['Sum'];
$data_living = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$home= mysqli_fetch_assoc($data_living);
$max_home = $home['Sum'];
$count_bedroom = $bedroom['bedroom_socket_1'] + $bedroom['bedroom_socket_2'] + $bedroom['bedroom_socket_3'] + $bedroom['bedroom_socket_4'] + $bedroom['bedroom_socket_5'] + $bedroom['bedroom_socket_6'];
$count_kitchen = $kitchen['kitchen_socket_1'] + $kitchen['kitchen_socket_2'] + $kitchen['kitchen_socket_3'] + $kitchen['kitchen_socket_4'] + $kitchen['kitchen_socket_5'] + $kitchen['kitchen_socket_6'];
$count_bathroom = $bathroom['bathroom_socket_1'] + $bathroom['bathroom_socket_2'] + $bathroom['bathroom_socket_3'] + $bathroom['bathroom_socket_4'] + $bathroom['bathroom_socket_5'] +  $bathroom['bathroom_socket_6'];
$count_home = $home['home_socket_1'] + $home['home_socket_2'] + $home['home_socket_3'] + $home['home_socket_4'] + $home['home_socket_5'] + $home['home_socket_6'];

if($count_bedroom == $max_bedroom)
{
  $b_stan ="<h3 class=' text-success'>All ON</h3>";
}
else {
  if($count_bedroom == 0)
  {
    $b_stan = "<h3 class=' text-danger'>All OFF</h3>";
  }
  else
  {
    if($count_bedroom > $max_bedroom)
    {
      $b_stan ="<h3 class=' text-success'>All ON</h3>";
    }
    else {
      $b_stan = "<h3 class=' text-info'>Some devices ON</h3>";
    }

  }
}

if($count_kitchen == $max_kitchen)
{
  $k_stan ="<h3 class=' text-success'>All ON</h3>";
}
else {
  if($count_kitchen == 0)
  {
    $k_stan = "<h3 class=' text-danger'>All OFF</h3>";
  }
  else
  {
    if($count_kitchen > $max_kitchen)
    {
      $k_stan ="<h3 class=' text-success'>All ON</h3>";
    }
    else {
      $k_stan = "<h3 class=' text-info'>Some devices ON</h3>";
    }
  }
}

if($count_bathroom == $max_bathroom)
{
  $ba_stan ="<h3 class=' text-success'>All ON</h3>";
}
else {
  if($count_bathroom == 0)
  {
    $ba_stan = "<h3 class=' text-danger'>All OFF</h3>";
  }
  else
  {
    if($count_bathroom > $max_bathroom)
    {
      $ba_stan ="<h3 class=' text-success'>All ON</h3>";
    }
    else {
      $ba_stan = "<h3 class=' text-info'>Some devices ON</h3>";
    }
  }
}

if($count_home == $max_home)
{
  $l_stan ="<h3 class=' text-success'>All ON</h3>";
}
else {
  if($count_home == 0)
  {
    $l_stan = "<h3 class=' text-danger'>All OFF</h3>";
  }
  else
  {
    if($count_home > $max_home)
    {
      $l_stan ="<h3 class=' text-success'>All ON</h3>";
    }
    else {
      $l_stan = "<h3 class=' text-info'>Some devices ON</h3>";
    }
  }
}

$arr = array("b_stan" => $b_stan, "k_stan" => $k_stan, "ba_stan" => $ba_stan, "l_stan" => $l_stan);

$jsonn = json_encode($arr);
echo $jsonn;
 ?>
