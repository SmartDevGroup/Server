<?php
session_start();

$get_key = $_SESSION['api'];

$number_of_sockets = $_POST['numb_of_sockets'];
for ($i=1; $i < 7; $i++) {
  $arr["id_$i"] = $_POST["id_$i"];
  $arr["name_$i"] = $_POST["name_l_$i"];
}

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");



$update_livingroom_id = mysqli_query($link, "UPDATE id SET id_l_1= $arr[id_1], id_l_2= $arr[id_2], id_l_3= $arr[id_3], id_l_4= $arr[id_4], id_l_5= $arr[id_5], id_l_6= $arr[id_6] WHERE api_key='$get_key'");
$update_livingroom_name = mysqli_query($link, "UPDATE livingroom SET name_sock_1= '$arr[name_1]', name_sock_2= '$arr[name_1]', name_sock_3= '$arr[name_3]', name_sock_4= '$arr[name_4]', name_sock_5= '$arr[name_5]', name_sock_6= '$arr[name_6]' WHERE api_key='$get_key'");

if($number_of_sockets == "")
{

}
else {
  $update_living_number = mysqli_query($link, "UPDATE livingroom SET Sum = $number_of_sockets, date= NOW() WHERE api_key='$get_key'");
}

?>
