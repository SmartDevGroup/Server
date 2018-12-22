<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$data_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);
$Sum = $bedroom['Sum'];
?>
