<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$data_bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom = mysqli_fetch_assoc($data_bathroom);

for ($i=1; $i < 7; $i++) {
  $Stan_bathroom["bathroom_socket_$i"] = $bathroom["bathroom_socket_$i"];
}
$Stan_bathroom["bathroom_light"] = $bathroom['bathroom_light'];
$Stan_bathroom["dimer"] = $bathroom['dimer'];

$json_button = json_encode($Stan_bathroom);
echo $json_button;
?>
