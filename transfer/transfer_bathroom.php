<?php
session_start();

$get_key = $_SESSION['api'];

$bathroom_socket_1 = $_POST['bathroom_socket_1'];
$bathroom_socket_2 = $_POST['bathroom_socket_2'];
$bathroom_socket_3 = $_POST['bathroom_socket_3'];
$bathroom_socket_4 = $_POST['bathroom_socket_4'];
$bathroom_socket_5 = $_POST['bathroom_socket_5'];
$bathroom_socket_6 = $_POST['bathroom_socket_6'];
$bathroom_light = $_POST['bathroom_light'];
$dimer = $_POST['dimer'];

if($bathroom_socket_1 == "") {$bathroom_socket_1 = 0;}
if($bathroom_socket_2 == "") {$bathroom_socket_2 = 0;}
if($bathroom_socket_3 == "") {$bathroom_socket_3 = 0;}
if($bathroom_socket_4 == "") {$bathroom_socket_4 = 0;}
if($bathroom_socket_5 == "") {$bathroom_socket_5 = 0;}
if($bathroom_socket_6 == "") {$bathroom_socket_6 = 0;}
if($bathroom_light == "") {$bathroom_light = 0;}

$link=mysqli_connect("localhost", "root", "", "server");

if($dimer == "")
{
  $update_bathroom = mysqli_query($link, "UPDATE bathroom SET bathroom_socket_1=$bathroom_socket_1, bathroom_socket_2=$bathroom_socket_2, bathroom_socket_3=$bathroom_socket_3, bathroom_socket_4=$bathroom_socket_4, bathroom_socket_5=$bathroom_socket_5, bathroom_socket_6=$bathroom_socket_6, bathroom_light=$bathroom_light, date= NOW() WHERE api_key='$get_key'");
}
else {
  $update_bathroom = mysqli_query($link, "UPDATE bathroom SET bathroom_socket_1=$bathroom_socket_1, bathroom_socket_2=$bathroom_socket_2, bathroom_socket_3=$bathroom_socket_3, bathroom_socket_4=$bathroom_socket_4, bathroom_socket_5=$bathroom_socket_5, bathroom_socket_6=$bathroom_socket_6, bathroom_light=$bathroom_light, dimer = $dimer, date= NOW() WHERE api_key='$get_key'");
}
?>
