<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen = mysqli_fetch_assoc($data_kitchen);

for ($i=1; $i < 7; $i++) {
  $Stan_kitchen["kitchen_socket_$i"] = $kitchen["kitchen_socket_$i"];
}
$Stan_kitchen["kitchen_light"] = $kitchen['kitchen_light'];
$Stan_kitchen["dimer"] = $kitchen['dimer'];

$json_button = json_encode($Stan_kitchen);
echo $json_button;
?>
