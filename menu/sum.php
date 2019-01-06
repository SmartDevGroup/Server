<?php
session_start();
$get_key = $_SESSION['api'];
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$bedroom_db = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$data_bedroom = mysqli_fetch_assoc($bedroom_db);
$Sum_bedroom = $data_bedroom['Sum'];

$kitchen_db = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$data_kitchen = mysqli_fetch_assoc($kitchen_db);
$Sum_kitchen = $data_kitchen['Sum'];

$bathroom_db = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$data_bathroom = mysqli_fetch_assoc($bathroom_db);
$Sum_bathroom = $data_bathroom['Sum'];

$livingroom_db = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$data_livingroom = mysqli_fetch_assoc($livingroom_db);
$Sum_livingroom = $data_livingroom['Sum'];
?>
