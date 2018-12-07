<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "123", "server");

$data_bathroom = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$bathroom = mysqli_fetch_assoc($data_bathroom);

$Sum = $bathroom['Sum'];

if($Sum == 6)
{
  $ba_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_5 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_6 = "<h3 class='on text-success'>Enabled</h3>";
}
if($Sum == 5)
{
  $ba_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_5 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 4)
{
  $ba_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 3)
{
  $ba_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 2)
{
  $ba_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_3 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 1)
{
  $ba_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $ba_stat_2 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_3 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $ba_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}

$Sum_arr = array('ba_stat_1' => $ba_stat_1, 'ba_stat_2' => $ba_stat_2, 'ba_stat_3' => $ba_stat_3, 'ba_stat_4' => $ba_stat_4, 'ba_stat_5' => $ba_stat_5, 'ba_stat_6' => $ba_stat_6);

$json = json_encode($Sum_arr);
echo $json;
?>
