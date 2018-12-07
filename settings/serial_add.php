<?php
session_start();

$get_key = $_SESSION['api'];
$serial = $_POST['serial'];

$link=mysqli_connect("localhost", "root", "123", "server");

$result = mysqli_query($link, "SELECT 1 FROM brain WHERE serial LIKE '%".$serial."%'");
if ($result->num_rows > 0)
{
  $select_from_db = mysqli_query($link, "SELECT * FROM users WHERE api_key='$get_key'");
  $data = mysqli_fetch_assoc($select_from_db);
  $set = $data['api_key'];
  $update = mysqli_query($link, "UPDATE brain SET user_api = $set WHERE serial='$serial'");
  echo $message = "<h3 class='on text-success'>Serial successfully added</h3>";
}
else {
  echo $message = "<h3 class='off text-danger'>No such serial</h3>";
}
?>
