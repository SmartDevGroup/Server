<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$data_bedroom = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);

$Sum = $bedroom['Sum'];

if($Sum == 6)
{
  for ($i=1; $i < 7; $i++) {
    $arr["l_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
}
if($Sum == 5)
{
  for ($i=1; $i < 6; $i++) {
    $arr["l_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
  $arr["l_stat_6"] = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 4)
{
  for ($i=1; $i < 5; $i++) {
    $arr["l_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
  $arr["l_stat_5"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["l_stat_6"] = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 3)
{
  for ($i=1; $i < 4; $i++) {
    $arr["l_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
  $arr["l_stat_4"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["l_stat_5"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["l_stat_6"] = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 2)
{
  for ($i=1; $i < 3; $i++) {
    $arr["l_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
  $arr["l_stat_3"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["l_stat_4"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["l_stat_5"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["l_stat_6"] = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 1)
{
  $arr["l_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  for ($i=2; $i < 7; $i++) {
    $arr["l_stat_$i"] = "<h3 class='off text-danger'>Disabled</h3>";
  }
}

$Sum_arr = array('l_stat_1' => $arr["l_stat_1"], 'l_stat_2' => $arr["l_stat_2"], 'l_stat_3' => $arr["l_stat_3"], 'l_stat_4' => $arr["l_stat_4"], 'l_stat_5' => $arr["l_stat_5"], 'l_stat_6' => $arr["l_stat_6"]);

$json = json_encode($Sum_arr);
echo $json;
?>
