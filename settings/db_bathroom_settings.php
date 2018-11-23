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

$link=mysqli_connect("localhost", "root", "", "server");



$update_bathroom_id = mysqli_query($link, "UPDATE id SET id_ba_1= $id_1, id_ba_2= $id_2, id_ba_3= $id_3, id_ba_4= $id_4, id_ba_5= $id_5, id_ba_6= $id_6 WHERE api_key='$get_key'");

if($number_of_sockets == "")
{

}
else {
  $update_bathroom_number = mysqli_query($link, "UPDATE bathroom SET Sum = $number_of_sockets, date= NOW() WHERE api_key='$get_key'");
}

?>
