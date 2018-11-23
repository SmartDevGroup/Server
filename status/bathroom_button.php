<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$data_bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom = mysqli_fetch_assoc($data_bathroom);

$Stan_bathroom = array("bathroom_socket_1" => $bathroom['bathroom_socket_1'], "bathroom_socket_2" => $bathroom['bathroom_socket_2'], "bathroom_socket_3" => $bathroom['bathroom_socket_3'],
"bathroom_socket_4" => $bathroom['bathroom_socket_4'], "bathroom_socket_5" => $bathroom['bathroom_socket_5'], "bathroom_socket_6" => $bathroom['bathroom_socket_6'], "bathroom_light" => $bathroom['bathroom_light'], "dimer" => $bathroom['dimer']);

$json_button = json_encode($Stan_bathroom);
echo $json_button;
?>
