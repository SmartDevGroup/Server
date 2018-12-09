<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen= mysqli_fetch_assoc($data_kitchen);

$Sum = $kitchen['Sum'];

if($Sum == 6)
{
  for ($i=1; $i < 7; $i++) {
    $arr["kit_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
}
if($Sum == 5)
{
  for ($i=1; $i < 6; $i++) {
    $arr["kit_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
  $arr["kit_stat_6"] = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 4)
{
  for ($i=1; $i < 5; $i++) {
    $arr["kit_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
  $arr["kit_stat_5"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["kit_stat_6"] = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 3)
{
  for ($i=1; $i < 4; $i++) {
    $arr["kit_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
  $arr["kit_stat_4"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["kit_stat_5"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["kit_stat_6"] = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 2)
{
  for ($i=1; $i < 3; $i++) {
    $arr["kit_stat_$i"] = "<h3 class='on text-success'>Enabled</h3>";
  }
  $arr["kit_stat_3"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["kit_stat_4"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["kit_stat_5"] = "<h3 class='off text-danger'>Disabled</h3>";
  $arr["kit_stat_6"] = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 1)
{
  $arr["kit_stat_1"] = "<h3 class='on text-success'>Enabled</h3>";
  for ($i=2; $i < 7; $i++) {
    $arr["kit_stat_$i"] = "<h3 class='off text-danger'>Disabled</h3>";
  }
}

$Sum_arr = array('kit_stat_1' => $arr["kit_stat_1"], 'kit_stat_2' => $arr["kit_stat_2"], 'kit_stat_3' => $arr["kit_stat_3"], 'kit_stat_4' => $arr["kit_stat_4"], 'kit_stat_5' => $arr["kit_stat_5"], 'kit_stat_6' => $arr["kit_stat_6"]);

$json = json_encode($Sum_arr);
echo $json;
?>
