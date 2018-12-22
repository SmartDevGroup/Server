<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen = mysqli_fetch_assoc($data_kitchen);
$Sum = $kitchen['Sum'];
?>
