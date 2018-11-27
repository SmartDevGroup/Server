<?php
session_start();

$get_key = $_SESSION['api'];

for($i = 1; $i < 7; $i++)
{
  $kitchen["kitchen_socket_$i"] = $_POST["kitchen_socket_$i"];
}

$kitchen["kitchen_light"] = $_POST['kitchen_light'];
$kitchen["dimer"] = $_POST['dimer'];

for ($i=1; $i < 7; $i++) {
  if($kitchen["kitchen_socket_$i"] == "")
  {
    $kitchen["kitchen_socket_$i"] = 0;
  }
}

if($kitchen["kitchen_light"] == "")
{
  $kitchen["kitchen_light"] = 0;
}

$link=mysqli_connect("localhost", "root", "", "server");


//echo var_dump($kitchen);

if($kitchen['dimer'] == "")
{
  $update_kitchen = mysqli_query($link, "UPDATE kitchen SET kitchen_socket_1=$kitchen[kitchen_socket_1], kitchen_socket_2=$kitchen[kitchen_socket_2], kitchen_socket_3=$kitchen[kitchen_socket_3], kitchen_socket_4=$kitchen[kitchen_socket_4], kitchen_socket_5=$kitchen[kitchen_socket_5], kitchen_socket_6=$kitchen[kitchen_socket_6], kitchen_light=$kitchen[kitchen_light],
    output_k = output_k + 1, l_k = l_k + 1, date= NOW() WHERE api_key='$get_key'");
}
else {
  $update_kitchen = mysqli_query($link, "UPDATE kitchen SET kitchen_socket_1=$kitchen[kitchen_socket_1], kitchen_socket_2=$kitchen[kitchen_socket_2], kitchen_socket_3=$kitchen[kitchen_socket_3], kitchen_socket_4=$kitchen[kitchen_socket_4], kitchen_socket_5=$kitchen[kitchen_socket_5], kitchen_socket_6=$kitchen[kitchen_socket_6], kitchen_light=$kitchen[kitchen_light],
    dimer = $kitchen[dimer], output_k = output_k + 1, l_k = l_k + 1, date= NOW() WHERE api_key='$get_key'");
}
?>
