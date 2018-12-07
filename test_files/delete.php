<?php
$get_key = $_GET['api'];
$link=mysqli_connect("localhost", "root", "123", "server");
mysqli_query($link, "DELETE FROM temp WHERE api_key = $get_key")
?>
