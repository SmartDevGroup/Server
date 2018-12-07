<?php

$serial_rasp = $_GET['serial'];

$link=mysqli_connect("localhost", "root", "123", "server");

$id = mysqli_query($link, "SELECT COUNT(id) as count FROM  brain");
$data = mysqli_fetch_assoc($id);
$id_bd = $data['count'] + 1;

$result = mysqli_query($link, "SELECT 1 FROM brain WHERE serial LIKE '%".$serial_rasp."%'");
if ($result->num_rows > 0) {
  $select_from_db = mysqli_query($link, "SELECT * FROM brain WHERE serial='$serial_rasp'");
  $data = mysqli_fetch_assoc($select_from_db);
  if($data['user_api'] == '0')
  {
    echo "repeat";
  }
  else {
    echo $data['user_api'];
  }
}
else {
  $create_new = mysqli_query($link, "INSERT INTO brain(id, serial, user_api, date_add) VALUES ($id_bd, $serial_rasp, 0, NOW())");
}
 ?>
