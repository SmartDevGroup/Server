<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$data_home = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$home = mysqli_fetch_assoc($data_home);
$Sum = $home['Sum'];
?>
