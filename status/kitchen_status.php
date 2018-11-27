<?php

session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($kitchen);

$k_s_1 = $data['kitchen_socket_1'];
$k_s_2 = $data['kitchen_socket_2'];
$k_s_3 = $data['kitchen_socket_3'];
$k_s_4 = $data['kitchen_socket_4'];
$k_s_5 = $data['kitchen_socket_5'];
$k_s_6 = $data['kitchen_socket_6'];
$k_l = $data['kitchen_light'];

$c_s_1 = $data['con_sock_1'];
$c_s_2 = $data['con_sock_2'];
$c_s_3 = $data['con_sock_3'];
$c_s_4 = $data['con_sock_4'];
$c_s_5 = $data['con_sock_5'];
$c_s_6 = $data['con_sock_6'];

if ($k_s_1 == 1) {
  $k_stan_1 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $k_stan_1 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($k_s_2 == 1) {
  $k_stan_2 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $k_stan_2 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($k_s_3 == 1) {
  $k_stan_3 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $k_stan_3 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($k_s_4 == 1) {
  $k_stan_4 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $k_stan_4 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($k_s_5 == 1) {
  $k_stan_5 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $k_stan_5 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($k_s_6 == 1) {
  $k_stan_6 = "<h3 class='on text-success'>ON</h3>";
}
else {
  $k_stan_6 = "<h3 class='off text-danger'>OFF</h3>";
}
if ($k_l == 1) {
  $k_light = "<h3 class='on text-success'>ON</h3>";
}
else {
  $k_light = "<h3 class='off text-danger'>OFF</h3>";
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

$arr = $arrayName = array("kitchen_socket_1" => $data['k_temp_sock_1'], "kitchen_socket_2" => $data['k_temp_sock_2'],"kitchen_socket_3" => $data['k_temp_sock_3'], "kitchen_socket_4" => $data['k_temp_sock_4'],"kitchen_socket_5" => $data['k_temp_sock_5'], "kitchen_socket_6" => $data['k_temp_sock_6'],
"k_s_1" => $k_stan_1, "k_s_2" => $k_stan_2, "k_s_3" => $k_stan_3, "k_s_4" => $k_stan_4, "k_s_5" => $k_stan_5, "k_s_6" => $k_stan_6, "k_l" => $k_light, "c_s_1" => $conn_s_1, "c_s_2" => $conn_s_2, "c_s_3" => $conn_s_3,
"c_s_4" => $conn_s_4, "c_s_5" => $conn_s_5, "c_s_6" => $conn_s_6);

$json = json_encode($arr);
echo $json;
?>
