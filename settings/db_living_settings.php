<?php
session_start();

$get_key = $_SESSION['api'];

$number_of_sockets = $_POST['numb_of_sockets'];
$id_1 = $_POST['id_1'];
$id_2 = $_POST['id_2'];
$id_3 = $_POST['id_3'];
$id_4 = $_POST['id_4'];
$id_5 = $_POST['id_5'];
$id_6 = $_POST['id_6'];

$name_1 = $_POST['name_l_1'];
$name_2 = $_POST['name_l_2'];
$name_3 = $_POST['name_l_3'];
$name_4 = $_POST['name_l_4'];
$name_5 = $_POST['name_l_5'];
$name_6 = $_POST['name_l_6'];

$link=mysqli_connect("localhost", "root", "123", "server");



$update_living_id = mysqli_query($link, "UPDATE id SET id_l_1= $id_1, id_l_2= $id_2, id_l_3= $id_3, id_l_4= $id_4, id_l_5= $id_5, id_l_6= $id_6 WHERE api_key='$get_key'");
$update_living_name = mysqli_query($link, "UPDATE livingroom SET name_sock_1= '$name_1', name_sock_2= '$name_2', name_sock_3= '$name_3', name_sock_4= '$name_4', name_sock_5= '$name_5', name_sock_6= '$name_6' WHERE api_key='$get_key'");

if($number_of_sockets == "")
{

}
else {
  $update_living_number = mysqli_query($link, "UPDATE livingroom SET Sum = $number_of_sockets, date= NOW() WHERE api_key='$get_key'");
}

?>
