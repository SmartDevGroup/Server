<?php
$get_key = $_GET['api'];
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
mysqli_query($link, "DELETE FROM temp WHERE api_key = $get_key")
?>
