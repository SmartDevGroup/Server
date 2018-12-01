<?php
$get_key = $_GET['api'];
$link=mysqli_connect("localhost", "root", "", "server");
mysqli_query($link, "DELETE FROM temp WHERE api_key = $get_key")
?>
