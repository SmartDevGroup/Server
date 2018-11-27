<?php
session_start();

$get_key = $_SESSION['api'];

for($i = 1; $i < 7; $i++)
{
  $living["home_socket_$i"] = $_POST["home_socket_$i"];
}

$living["home_light"] = $_POST['home_light'];
$living["dimer"] = $_POST['dimer'];

for ($i=1; $i < 7; $i++) {
  if($living["home_socket_$i"] == "")
  {
    $living["home_socket_$i"] = 0;
  }
}

if($living["home_light"] == "")
{
  $living["home_light"] = 0;
}

$link=mysqli_connect("localhost", "root", "", "server");


echo var_dump($living);

if($living['dimer'] == "")
{
  $update_living = mysqli_query($link, "UPDATE livingroom SET home_socket_1=$living[home_socket_1], home_socket_2=$living[home_socket_2], home_socket_3=$living[home_socket_3], home_socket_4=$living[home_socket_4], home_socket_5=$living[home_socket_5], home_socket_6=$living[home_socket_6], living_light=$living[living_light],
    output_h = output_h + 1, l_h = l_h + 1, date= NOW() WHERE api_key='$get_key'");
}
else {
  $update_living = mysqli_query($link, "UPDATE livingroom SET home_socket_1=$living[home_socket_1], home_socket_2=$living[home_socket_2], home_socket_3=$living[home_socket_3], home_socket_4=$living[home_socket_4], home_socket_5=$living[home_socket_5], home_socket_6=$living[home_socket_6],
    home_light=$living[home_light], dimer = $living[dimer], output_h = output_h + 1, l_h = l_h + 1, date= NOW() WHERE api_key='$get_key'");
}
?>
