<?php
$serial_socket = $_GET['serial'];
$ip_socket = $_GET['ip'];

$link=mysqli_connect("localhost", "root", "", "server");
$data= mysqli_query($link, "SELECT * FROM id");

$id_array = array();

while($row = mysqli_fetch_assoc($data)) {
    $id_array[] = array_values($row);
}
//var_dump($id_array);

//echo $id_array;

$count_id = mysqli_query($link, "SELECT COUNT(id) as count FROM  id");
$data_id = mysqli_fetch_assoc($count_id);
$count = $data_id['count'];
//echo $count;
$data_id = mysqli_fetch_assoc($data);

for ($j=0; $j < $count; $j++) {
  for ($i=0; $i < 26; $i++) {
    if($id_array[$j][$i] == $serial_socket)
    {
      $user_key = $id_array[$j][1];

      if($i == 2) $network_device = "ip_bedroom_1";
      if($i == 3) $network_device = "ip_bedroom_2";
      if($i == 4) $network_device = "ip_bedroom_3";
      if($i == 5) $network_device = "ip_bedroom_4";
      if($i == 6) $network_device = "ip_bedroom_5";
      if($i == 7) $network_device = "ip_bedroom_6";

      if($i == 8) $network_device = "ip_kitchen_1";
      if($i == 9) $network_device = "ip_kitchen_2";
      if($i == 10) $network_device = "ip_kitchen_3";
      if($i == 11) $network_device = "ip_kitchen_4";
      if($i == 12) $network_device = "ip_kitchen_5";
      if($i == 13) $network_device = "ip_kitchen_6";

      if($i == 14) $network_device = "ip_bathroom_1";
      if($i == 15) $network_device = "ip_bathroom_2";
      if($i == 16) $network_device = "ip_bathroom_3";
      if($i == 17) $network_device = "ip_bathroom_4";
      if($i == 18) $network_device = "ip_bathroom_5";
      if($i == 19) $network_device = "ip_bathroom_6";

      if($i == 20) $network_device = "ip_home_1";
      if($i == 21) $network_device = "ip_home_2";
      if($i == 22) $network_device = "ip_home_3";
      if($i == 23) $network_device = "ip_home_4";
      if($i == 24) $network_device = "ip_home_5";
      if($i == 25) $network_device = "ip_home_6";
    }
  }
}

$network = mysqli_query($link, "UPDATE network_device SET $network_device = '$ip_socket' WHERE api_key='$user_key'");
$chek = mysqli_query($link, "SELECT * FROM network_device WHERE api_key='$user_key'");
$data_check = mysqli_fetch_assoc($chek);

if($data_check[$network_device] == $ip_socket)
{
  echo $user_key;
}
else {
  echo "repeat";
}
?>
