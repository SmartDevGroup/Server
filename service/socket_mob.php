<?php
$api = $_GET['api'];
$status = $_GET['status'];

$link=mysqli_connect("localhost", "root", "", "server");

$update_bathroom = mysqli_query($link, "UPDATE bedroom SET bedroom_socket_1= $status,  date= NOW() WHERE api_key='$api'");

 ?>
