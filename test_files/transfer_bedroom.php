<?php
session_start();

$get_key = $_SESSION['api'];

$bedroom_socket_1 = $_POST['bedroom_socket_1'];
$bedroom_socket_2 = $_POST['bedroom_socket_2'];
$bedroom_socket_3 = $_POST['bedroom_socket_3'];
$bedroom_socket_4 = $_POST['bedroom_socket_4'];
$bedroom_socket_5 = $_POST['bedroom_socket_5'];
$bedroom_socket_6 = $_POST['bedroom_socket_6'];
$bedroom_light = $_POST['bedroom_light'];
$dimer = $_POST['dimer'];

if($bedroom_socket_1 == "") {$bedroom_socket_1 = 0;}
if($bedroom_socket_2 == "") {$bedroom_socket_2 = 0;}
if($bedroom_socket_3 == "") {$bedroom_socket_3 = 0;}
if($bedroom_socket_4 == "") {$bedroom_socket_4 = 0;}
if($bedroom_socket_5 == "") {$bedroom_socket_5 = 0;}
if($bedroom_socket_6 == "") {$bedroom_socket_6 = 0;}
if($bedroom_light == "") {$bedroom_light = 0;}

$link=mysqli_connect("localhost", "root", "123", "server");


if($dimer == "")
{
  $update_bedroom = mysqli_query($link, "UPDATE bedroom SET bedroom_socket_1=$bedroom_socket_1, bedroom_socket_2=$bedroom_socket_2, bedroom_socket_3=$bedroom_socket_3, bedroom_socket_4=$bedroom_socket_4, bedroom_socket_5=$bedroom_socket_5, bedroom_socket_6=$bedroom_socket_6, bedroom_light=$bedroom_light, output_b = output_b + 1, date= NOW() WHERE api_key='$get_key'");
}
else {
  $update_bedroom = mysqli_query($link, "UPDATE bedroom SET bedroom_socket_1=$bedroom_socket_1, bedroom_socket_2=$bedroom_socket_2, bedroom_socket_3=$bedroom_socket_3, bedroom_socket_4=$bedroom_socket_4, bedroom_socket_5=$bedroom_socket_5, bedroom_socket_6=$bedroom_socket_6, bedroom_light=$bedroom_light, dimer = $dimer, output_b = output_b + 1, date= NOW() WHERE api_key='$get_key'");
}
?>
