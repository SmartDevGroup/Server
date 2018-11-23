<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($bathroom);

$ba_s_1 = $data['bathroom_socket_1'];
$ba_s_2 = $data['bathroom_socket_2'];
$ba_s_3 = $data['bathroom_socket_3'];
$ba_s_4 = $data['bathroom_socket_4'];
$ba_s_5 = $data['bathroom_socket_5'];
$ba_s_6 = $data['bathroom_socket_6'];
$ba_l = $data['bathroom_light'];

if ($ba_s_1 == 1) {
  $ba_stan_1 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $ba_stan_1 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($ba_s_2 == 1) {
  $ba_stan_2 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $ba_stan_2 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($ba_s_3 == 1) {
  $ba_stan_3 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $ba_stan_3 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($ba_s_4 == 1) {
  $ba_stan_4 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $ba_stan_4 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($ba_s_5 == 1) {
  $ba_stan_5 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $ba_stan_5 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($ba_s_6 == 1) {
  $ba_stan_6 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $ba_stan_6 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($ba_l == 1) {
  $ba_light = "<h3 class='on text-success'>ON</h3>";
}
else {
  $ba_light = "<h3 class='off text-danger'>OFF</h3>";
}

$arr = $arrayName = array("bathroom_socket_1" => $data['ba_temp_sock_1'], "bathroom_socket_2" => $data['ba_temp_sock_2'],"bathroom_socket_3" => $data['ba_temp_sock_3'], "bathroom_socket_4" => $data['ba_temp_sock_4'],"bathroom_socket_5" => $data['ba_temp_sock_5'], "bathroom_socket_6" => $data['ba_temp_sock_6'],
"ba_s_1" => $ba_stan_1, "ba_s_2" => $ba_stan_2, "ba_s_3" => $ba_stan_3, "ba_s_4" => $ba_stan_4, "ba_s_5" => $ba_stan_5, "ba_s_6" => $ba_stan_6, "ba_l" => $ba_light);

$json = json_encode($arr);
echo $json;
?>
