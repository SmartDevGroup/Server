<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$data_home = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$home = mysqli_fetch_assoc($data_home);

for ($i=1; $i < 7; $i++) {
  $Stan_home["home_socket_$i"] = $home["home_socket_$i"];
}
$Stan_home["home_light"] = $home['home_light'];
$Stan_home["dimer"] = $home['dimer'];

$json_button = json_encode($Stan_home);
echo $json_button;
?>
