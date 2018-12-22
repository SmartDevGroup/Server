<?php
session_start();

$get_key = $_SESSION['api'];

for($i = 1; $i < 7; $i++)
{
  $bedroom["bedroom_socket_$i"] = $_POST["bedroom_socket_$i"];
}

$bedroom["bedroom_light"] = $_POST['bedroom_light'];
$bedroom["dimer"] = $_POST['dimer'];

for ($i=1; $i < 7; $i++) {
  if($bedroom["bedroom_socket_$i"] == "")
  {
    $bedroom["bedroom_socket_$i"] = 0;
  }
}

if($bedroom["bedroom_light"] == "")
{
  $bedroom["bedroom_light"] = 0;
}

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");


//echo var_dump($bedroom);

if($bedroom['dimer'] == "")
{
  $update_bedroom = mysqli_query($link, "UPDATE bedroom SET bedroom_socket_1=$bedroom[bedroom_socket_1], bedroom_socket_2=$bedroom[bedroom_socket_2], bedroom_socket_3=$bedroom[bedroom_socket_3], bedroom_socket_4=$bedroom[bedroom_socket_4], bedroom_socket_5=$bedroom[bedroom_socket_5], bedroom_socket_6=$bedroom[bedroom_socket_6], bedroom_light=$bedroom[bedroom_light],
    output_b = output_b + 1, l_b = l_b + 1, date= NOW() WHERE api_key='$get_key'");
}
else {
  $update_bedroom = mysqli_query($link, "UPDATE bedroom SET bedroom_socket_1=$bedroom[bedroom_socket_1], bedroom_socket_2=$bedroom[bedroom_socket_2], bedroom_socket_3=$bedroom[bedroom_socket_3], bedroom_socket_4=$bedroom[bedroom_socket_4], bedroom_socket_5=$bedroom[bedroom_socket_5], bedroom_socket_6=$bedroom[bedroom_socket_6],
    bedroom_light=$bedroom[bedroom_light], dimer = $bedroom[dimer], output_b = output_b + 1, l_b = l_b + 1, date= NOW() WHERE api_key='$get_key'");
}
?>
