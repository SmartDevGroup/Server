<?php

$get_key = $_POST['user'];

$link=mysqli_connect("localhost", "root", "", "server");
/*
for ($i=1; $i < 7; $i++) {
  $bedroom["b_temp_$i"] = $_POST["temp_$i"];
  $bedroom["b_conn_$i"] = $_POST["con_$i"];
}
for ($i=1; $i < 7; $i++) {
  $j = $i + 6;
  $kitchen["k_temp_$i"] = $_POST["temp_$j"]];
  $kitchen["k_conn_$i"] = $_POST["con_$j"]];
}

$update_bedroom = mysqli_query($link, "UPDATE bedroom SET b_temp_sock_1 = $b_temp_1, b_temp_sock_2 = $b_temp_2, , b_temp_sock_3 = $b_temp_3, , b_temp_sock_4 = $b_temp_4, , b_temp_sock_5 = $b_temp_5, , b_temp_sock_6 = $b_temp_6, con_sock_1 = $b_conn_1, con_sock_2 = $b_conn_2, con_sock_3 = $b_conn_3,  con_sock_4 = $b_conn_4, con_sock_5 = $b_conn_5, con_sock_6 = $b_conn_6,
  date= NOW() WHERE api_key='$get_key'");

  $id = mysqli_query($link, "SELECT COUNT(id) as count FROM  temp");
  $data = mysqli_fetch_assoc($id);
  $id_bd = $data['count'] + 1;

  $insert_temp = mysqli_query($link, "INSERT INTO temp (id, api_key, date, b_sock_1, b_sock_2, b_sock_3, b_sock_4, b_sock_5, b_sock_6) VALUES ($id_bd, $get_key, NOW(), $b_temp_1, $b_temp_2, $b_temp_3, $b_temp_4, $b_temp_5, $b_temp_6)");
*/
/*
$a = array();
if (isset($_POST)){
    foreach ($_POST as $key=>$value){
        $a[$key]=$value;
    }
    ob_start();
    var_dump($a);
    echo "_______";
    var_dump($a['1']);
    $output = ob_get_clean();
    file_put_contents('log.txt', $output);
}
*/
$data = $_POST["1"];
ob_start();
file_put_contents('log.txt', $data);
?>
