<?php
session_start();

$get_key = $_SESSION['api'];

$kitchen_socket_1 = $_POST['kitchen_socket_1'];
$kitchen_socket_2 = $_POST['kitchen_socket_2'];
$kitchen_socket_3 = $_POST['kitchen_socket_3'];
$kitchen_socket_4 = $_POST['kitchen_socket_4'];
$kitchen_socket_5 = $_POST['kitchen_socket_5'];
$kitchen_socket_6 = $_POST['kitchen_socket_6'];
$kitchen_light = $_POST['kitchen_light'];
$dimer = $_POST['dimer'];

if($kitchen_socket_1 == "") {$kitchen_socket_1 = 0;}
if($kitchen_socket_2 == "") {$kitchen_socket_2 = 0;}
if($kitchen_socket_3 == "") {$kitchen_socket_3 = 0;}
if($kitchen_socket_4 == "") {$kitchen_socket_4 = 0;}
if($kitchen_socket_5 == "") {$kitchen_socket_5 = 0;}
if($kitchen_socket_6 == "") {$kitchen_socket_6 = 0;}
if($kitchen_light == "") {$kitchen_light = 0;}

$link=mysqli_connect("localhost", "root", "", "server");

if($dimer == "")
{
    $update_kitchen = mysqli_query($link, "UPDATE kitchen SET kitchen_socket_1=$kitchen_socket_1, kitchen_socket_2=$kitchen_socket_2, kitchen_socket_3=$kitchen_socket_3, kitchen_socket_4=$kitchen_socket_4, kitchen_socket_5=$kitchen_socket_5, kitchen_socket_6=$kitchen_socket_6, kitchen_light=$kitchen_light, output_k = output_k + 1, date= NOW() WHERE api_key='$get_key'");
}
else {
  $update_kitchen = mysqli_query($link, "UPDATE kitchen SET kitchen_socket_1=$kitchen_socket_1, kitchen_socket_2=$kitchen_socket_2, kitchen_socket_3=$kitchen_socket_3, kitchen_socket_4=$kitchen_socket_4, kitchen_socket_5=$kitchen_socket_5, kitchen_socket_6=$kitchen_socket_6, kitchen_light=$kitchen_light, dimer = $dimer, output_k = output_k + 1, date= NOW() WHERE api_key='$get_key'");
}
?>
