<?php
$api_key = $_GET['api'];
$link=mysqli_connect("localhost", "root", "123", "server");
$status = $_GET['status'];
$update_bedroom = mysqli_query($link, "UPDATE bedroom SET bedroom_socket_1=$status");  ?>
