<?php

/*
for ($i=1; $i < 6; $i++) {
  $array[] = (array("b_$i" => $i));
}
echo var_dump($array);
echo "__________________________";
for ($i=1; $i < 6; $i++) {
  $array[$i]["b_$i"] = 3;
}
echo var_dump($array);
*/

for ($i=1; $i < 3; $i++) {
  $array1["b_$i"] = $_GET["b_$i"];
}
echo var_dump($array1);
echo "__________________";
echo $array1["b_2"];
echo "__________________";
for ($i=1; $i < 3; $i++) {
  $array2["b_$i"] = $array1["b_$i"];
}
echo var_dump($array2);
?>
