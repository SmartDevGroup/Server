<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$data_bedroom = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);

$Sum = $bedroom['Sum'];

if($Sum == 6)
{
  $l_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_5 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_6 = "<h3 class='on text-success'>Enabled</h3>";
}
if($Sum == 5)
{
  $l_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_5 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 4)
{
  $l_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 3)
{
  $l_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 2)
{
  $l_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_3 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 1)
{
  $l_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $l_stat_2 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_3 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $l_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}

$Sum_arr = array('l_stat_1' => $l_stat_1, 'l_stat_2' => $l_stat_2, 'l_stat_3' => $l_stat_3, 'l_stat_4' => $l_stat_4, 'l_stat_5' => $l_stat_5, 'l_stat_6' => $l_stat_6);

$json = json_encode($Sum_arr);
echo $json;
?>
