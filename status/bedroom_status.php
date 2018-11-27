<?php

session_start();
$get_key = $_SESSION['api'];
//$get_key = $_GET['api'];
$link=mysqli_connect("localhost", "root", "", "server");

$bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($bedroom);

$b_s_1 = $data['bedroom_socket_1'];
$b_s_2 = $data['bedroom_socket_2'];
$b_s_3 = $data['bedroom_socket_3'];
$b_s_4 = $data['bedroom_socket_4'];
$b_s_5 = $data['bedroom_socket_5'];
$b_s_6 = $data['bedroom_socket_6'];
$b_l = $data['bedroom_light'];

$c_s_1 = $data['con_sock_1'];
$c_s_2 = $data['con_sock_2'];
$c_s_3 = $data['con_sock_3'];
$c_s_4 = $data['con_sock_4'];
$c_s_5 = $data['con_sock_5'];
$c_s_6 = $data['con_sock_6'];


if ($b_s_1 == 1) {
  $b_stan_1 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $b_stan_1 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($b_s_2 == 1) {
  $b_stan_2 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $b_stan_2 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($b_s_3 == 1) {
  $b_stan_3 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $b_stan_3 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($b_s_4 == 1) {
  $b_stan_4 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $b_stan_4 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($b_s_5 == 1) {
  $b_stan_5 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $b_stan_5 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($b_s_6 == 1) {
  $b_stan_6 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $b_stan_6 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($b_l == 1) {
  $b_light = "<h3 class='on text-success'>ON</h3>";
}
else {
  $b_light = "<h3 class='off text-danger'>OFF</h3>";
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

$arr = $arrayName = array("bedroom_socket_1" => $data['b_temp_sock_1'], "bedroom_socket_2" => $data['b_temp_sock_2'],"bedroom_socket_3" => $data['b_temp_sock_3'], "bedroom_socket_4" => $data['b_temp_sock_4'],"bedroom_socket_5" => $data['b_temp_sock_5'], "bedroom_socket_6" => $data['b_temp_sock_6'],
"b_s_1" => $b_stan_1, "b_s_2" => $b_stan_2, "b_s_3" => $b_stan_3, "b_s_4" => $b_stan_4, "b_s_5" => $b_stan_5, "b_s_6" => $b_stan_6, "b_l" => $b_light, "c_s_1" => $conn_s_1, "c_s_2" => $conn_s_2, "c_s_3" => $conn_s_3,
"c_s_4" => $conn_s_4, "c_s_5" => $conn_s_5, "c_s_6" => $conn_s_6);

$json = json_encode($arr);
echo $json;
?>
