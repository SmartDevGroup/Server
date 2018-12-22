<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$data_bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom = mysqli_fetch_assoc($data_bathroom);
$Sum = $bathroom['Sum'];
?>
