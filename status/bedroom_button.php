<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$data_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);

for ($i=1; $i < 7; $i++) {
  $Stan_bedroom["bedroom_socket_$i"] = $bedroom["bedroom_socket_$i"];
}
$Stan_bedroom["bedroom_light"] = $bedroom['bedroom_light'];
$Stan_bedroom["dimer"] = $bedroom['dimer'];

$json_button = json_encode($Stan_bedroom);
echo $json_button;
?>
