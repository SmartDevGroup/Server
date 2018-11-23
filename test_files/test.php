<?php

$link=mysqli_connect("localhost", "root", "", "server");

$data= mysqli_query($link, "SELECT * FROM id");

$colors=array();
while($row=mysqli_fetch_assoc($data)) {
    $colors[] = array_values($row);
}
var_dump($colors);

echo $colors;


for ($i=0; $i <= 2; $i++) {
  for ($j=0; $j <= 26; $j++) {
      echo "|";
      echo $colors[$i][$j];
      echo "|";
  }
}

 ?>
