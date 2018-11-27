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

$name_1 = $_POST['name_k_1'];
$name_2 = $_POST['name_k_2'];
$name_3 = $_POST['name_k_3'];
$name_4 = $_POST['name_k_4'];
$name_5 = $_POST['name_k_5'];
$name_6 = $_POST['name_k_6'];

$link=mysqli_connect("localhost", "root", "", "server");



$update_kitchen_id = mysqli_query($link, "UPDATE id SET id_k_1= $id_1, id_k_2= $id_2, id_k_3= $id_3, id_k_4= $id_4, id_k_5= $id_5, id_k_6= $id_6 WHERE api_key='$get_key'");
$update_kitchen_name = mysqli_query($link, "UPDATE kitchen SET name_sock_1= '$name_1', name_sock_2= '$name_2', name_sock_3= '$name_3', name_sock_4= '$name_4', name_sock_5= '$name_5', name_sock_6= '$name_6' WHERE api_key='$get_key'");

if($number_of_sockets == "")
{

}
else {
  $update_kitchen_number = mysqli_query($link, "UPDATE kitchen SET Sum = $number_of_sockets, date= NOW() WHERE api_key='$get_key'");
}

?>
