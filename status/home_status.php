<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$home = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($home);

$h_s_1 = $data['home_socket_1'];
$h_s_2 = $data['home_socket_2'];
$h_s_3 = $data['home_socket_3'];
$h_s_4 = $data['home_socket_4'];
$h_s_5 = $data['home_socket_5'];
$h_s_6 = $data['home_socket_6'];
$h_l = $data['home_light'];

$c_s_1 = $data['con_sock_1'];
$c_s_2 = $data['con_sock_2'];
$c_s_3 = $data['con_sock_3'];
$c_s_4 = $data['con_sock_4'];
$c_s_5 = $data['con_sock_5'];
$c_s_6 = $data['con_sock_6'];

if ($h_s_1 == 1) {
  $h_stan_1 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $h_stan_1 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($h_s_2 == 1) {
  $h_stan_2 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $h_stan_2 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($h_s_3 == 1) {
  $h_stan_3 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $h_stan_3 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($h_s_4 == 1) {
  $h_stan_4 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $h_stan_4 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($h_s_5 == 1) {
  $h_stan_5 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $h_stan_5 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($h_s_6 == 1) {
  $h_stan_6 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $h_stan_6 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($h_l == 1) {
  $h_light = "<h3 class='on text-success'>ON</h3>";
}
else {
  $h_light = "<h3 class='off text-danger'>OFF</h3>";
}

if($c_s_1 == 1)
{
  $conn_s_1 = "<h3 class='on text-success'>OK</h3>";
}
else {
  $conn_s_1 = "<h3 class='on text-danger'>No</h3>";
}
if($c_s_2 == 1)
{
  $conn_s_2 = "<h3 class='on text-success'>OK</h3>";
}
else {
  $conn_s_2 = "<h3 class='on text-danger'>No</h3>";
}
if($c_s_3 == 1)
{
  $conn_s_3 = "<h3 class='on text-success'>OK</h3>";
}
else {
  $conn_s_3 = "<h3 class='on text-danger'>No</h3>";
}
if($c_s_4 == 1)
{
  $conn_s_4 = "<h3 class='on text-success'>OK</h3>";
}
else {
  $conn_s_4 = "<h3 class='on text-danger'>No</h3>";
}
if($c_s_5 == 1)
{
  $conn_s_5 = "<h3 class='on text-success'>OK</h3>";
}
else {
  $conn_s_5 = "<h3 class='on text-danger'>No</h3>";
}
if($c_s_6 == 1)
{
  $conn_s_6 = "<h3 class='on text-success'>OK</h3>";
}
else {
  $conn_s_6 = "<h3 class='on text-danger'>No</h3>";
}

$arr = array("home_socket_1" => $data['h_temp_sock_1'], "home_socket_2" => $data['h_temp_sock_2'],"home_socket_3" => $data['h_temp_sock_3'], "home_socket_4" => $data['h_temp_sock_4'],"home_socket_5" => $data['h_temp_sock_5'], "home_socket_6" => $data['h_temp_sock_6'],
"h_s_1" => $h_stan_1, "h_s_2" => $h_stan_2, "h_s_3" => $h_stan_3, "h_s_4" => $h_stan_4, "h_s_5" => $h_stan_5, "h_s_6" => $h_stan_6, "h_l" => $h_light, "c_s_1" => $conn_s_1, "c_s_2" => $conn_s_2, "c_s_3" => $conn_s_3,
"c_s_4" => $conn_s_4, "c_s_5" => $conn_s_5, "c_s_6" => $conn_s_6);

$json = json_encode($arr);
echo $json;
?>
