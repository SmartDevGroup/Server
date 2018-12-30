<?php
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
$db = mysqli_query($link, "SELECT * FROM news");
$num_rows = mysqli_num_rows($db);


for ($i=1; $i <= $num_rows; $i++){
  $data_db = mysqli_query($link, "SELECT * FROM news WHERE id = $i");
  $data = mysqli_fetch_assoc($data_db);
  $array[$i]["title"] = $data['title'];
  $array[$i]["link"] = $data['link'];
  $array[$i]["text"] = $data['text'];
  $array[$i]["date"] = $today = date("j.n.Y");//$data['date'];
}
?>
