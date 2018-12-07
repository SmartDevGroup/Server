<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$data_kitchen = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$kitchen= mysqli_fetch_assoc($data_kitchen);

$Sum = $kitchen['Sum'];

if($Sum == 6)
{
  $kit_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_5 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_6 = "<h3 class='on text-success'>Enabled</h3>";
}
if($Sum == 5)
{
  $kit_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_5 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 4)
{
  $kit_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 3)
{
  $kit_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 2)
{
  $kit_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_3 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 1)
{
  $kit_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $kit_stat_2 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_3 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $kit_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}

$Sum_arr = array('kit_stat_1' => $kit_stat_1, 'kit_stat_2' => $kit_stat_2, 'kit_stat_3' => $kit_stat_3, 'kit_stat_4' => $kit_stat_4, 'kit_stat_5' => $kit_stat_5, 'kit_stat_6' => $kit_stat_6);

$json = json_encode($Sum_arr);
echo $json;
?>
