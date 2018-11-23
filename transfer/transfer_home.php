<?php
session_start();

$get_key = $_SESSION['api'];

$home_socket_1 = $_POST['home_socket_1'];
$home_socket_2 = $_POST['home_socket_2'];
$home_socket_3 = $_POST['home_socket_3'];
$home_socket_4 = $_POST['home_socket_4'];
$home_socket_5 = $_POST['home_socket_5'];
$home_socket_6 = $_POST['home_socket_6'];
$home_light = $_POST['home_light'];
$dimer = $_POST['dimer'];

if($home_socket_1 == "") {$home_socket_1 = 0;}
if($home_socket_2 == "") {$home_socket_2 = 0;}
if($home_socket_3 == "") {$home_socket_3 = 0;}
if($home_socket_4 == "") {$home_socket_4 = 0;}
if($home_socket_5 == "") {$home_socket_5 = 0;}
if($home_socket_6 == "") {$home_socket_6 = 0;}
if($home_light == "") {$home_light = 0;}

$link=mysqli_connect("localhost", "root", "", "server");

if($dimer == "")
{
  $update_home = mysqli_query($link, "UPDATE livingroom SET home_socket_1=$home_socket_1, home_socket_2=$home_socket_2, home_socket_3=$home_socket_3, home_socket_4=$home_socket_4, home_socket_5=$home_socket_5, home_socket_6=$home_socket_6, home_light=$home_light, date= NOW() WHERE api_key='$get_key'");
}
else {
  $update_home = mysqli_query($link, "UPDATE livingroom SET home_socket_1=$home_socket_1, home_socket_2=$home_socket_2, home_socket_3=$home_socket_3, home_socket_4=$home_socket_4, home_socket_5=$home_socket_5, home_socket_6=$home_socket_6, home_light=$home_light, dimer = $dimer, date= NOW() WHERE api_key='$get_key'");
}
?>
