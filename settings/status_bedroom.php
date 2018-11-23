<?php
session_start();
$get_key = $_SESSION['api'];

$link=mysqli_connect("localhost", "root", "", "server");

$data_bedroom = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$bedroom = mysqli_fetch_assoc($data_bedroom);

$Sum = $bedroom['Sum'];

if($Sum == 6)
{
  $bed_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_5 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_6 = "<h3 class='on text-success'>Enabled</h3>";
}
if($Sum == 5)
{
  $bed_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_5 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 4)
{
  $bed_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_4 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 3)
{
  $bed_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_3 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 2)
{
  $bed_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_2 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_3 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}
if($Sum == 1)
{
  $bed_stat_1 = "<h3 class='on text-success'>Enabled</h3>";
  $bed_stat_2 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_3 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_4 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_5 = "<h3 class='off text-danger'>Disabled</h3>";
  $bed_stat_6 = "<h3 class='off text-danger'>Disabled</h3>";
}

$Sum_arr = array('bed_stat_1' => $bed_stat_1, 'bed_stat_2' => $bed_stat_2, 'bed_stat_3' => $bed_stat_3, 'bed_stat_4' => $bed_stat_4, 'bed_stat_5' => $bed_stat_5, 'bed_stat_6' => $bed_stat_6);

$json = json_encode($Sum_arr);
echo $json;
?>
