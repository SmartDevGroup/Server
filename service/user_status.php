<?php
session_start();
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
$get_key = $_SESSION['api'];
$id = $_SESSION['user_id'];
if($id == 1)
{
  mysqli_query($link, "UPDATE bedroom SET l_b_1 = l_b_1 + 1 WHERE api_key='$get_key'");
  mysqli_query($link, "UPDATE long_pooling SET time_1 = NOW() WHERE api_key='$get_key'");
}
elseif($id == 2)
{
  mysqli_query($link, "UPDATE bedroom SET l_b_2 = l_b_2 + 1 WHERE api_key='$get_key'");
  mysqli_query($link, "UPDATE long_pooling SET time_2 = NOW() WHERE api_key='$get_key'");
}
elseif($id == 3)
{
  mysqli_query($link, "UPDATE bedroom SET l_b_3 = l_b_3 + 1 WHERE api_key='$get_key'");
  mysqli_query($link, "UPDATE long_pooling SET time_3 = NOW() WHERE api_key='$get_key'");
}


?>
