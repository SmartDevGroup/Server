<?php
session_start();
$get_key = $_SESSION['api'];
$id = $_SESSION['user_id'];
session_write_close();
ignore_user_abort(false);
set_time_limit(40);

//$get_key = $_COOKIE['api'];
//$get_key = $_GET['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
/*
$bedroom_db = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($bedroom_db);

for ($i=1; $i < 7; $i++) {
  $bedroom["b_s_$i"] = $data["bedroom_socket_$i"];
}
$bedroom["b_l"] = $data['bedroom_light'];
for ($i=1; $i < 7; $i++) {
  $bedroom["c_s_$i"] = $data["con_sock_$i"];
}

for ($i=1; $i < 7; $i++) {
  if($bedroom["b_s_$i"] == 1)
  {
    $bedroom["b_butt_$i"] = 1;
    $bedroom["b_stan_$i"] = "<h3 class='on text-success'>ON</h3>";
  }
  else {
    $bedroom["b_butt_$i"] = 0;
    $bedroom["b_stan_$i"] = "<h3 class='off text-danger'>OFF</h3>";
  }
}

if($bedroom["b_l"] == 1)
{
  $bedroom["b_light"] = "<h3 class='on text-success'>ON</h3>";
  $bedroom["b_l"] = 1;
}
else {
  $bedroom["b_light"]= "<h3 class='off text-danger'>OFF</h3>";
  $bedroom["b_l"] = 0;
}

for ($i=1; $i < 7; $i++) {
  if($bedroom["c_s_$i"] == 1)
  {
    $bedroom["conn_s_$i"] = "<h3 class='on text-success'>OK</h3>";
  }
  else {
    $bedroom["conn_s_$i"] = "<h3 class='on text-danger'>No</h3>";
  }
}

$arr = array("bedroom_socket_1" => $data['b_temp_sock_1'], "bedroom_socket_2" => $data['b_temp_sock_2'],"bedroom_socket_3" => $data['b_temp_sock_3'], "bedroom_socket_4" => $data['b_temp_sock_4'],"bedroom_socket_5" => $data['b_temp_sock_5'], "bedroom_socket_6" => $data['b_temp_sock_6'],
"b_s_1" => $bedroom['b_stan_1'], "b_s_2" => $bedroom['b_stan_2'], "b_s_3" => $bedroom['b_stan_3'], "b_s_4" => $bedroom['b_stan_4'], "b_s_5" => $bedroom['b_stan_5'], "b_s_6" => $bedroom['b_stan_6'],
"b_l" => $bedroom['b_light'], "c_s_1" => $bedroom['conn_s_1'], "c_s_2" => $bedroom['conn_s_2'], "c_s_3" => $bedroom['conn_s_3'], "c_s_4" => $bedroom['conn_s_4'], "c_s_5" => $bedroom['conn_s_5'],
"c_s_6" => $bedroom['conn_s_6'], "s_1" => $bedroom['b_butt_1'],  "s_2" => $bedroom['b_butt_2'],  "s_3" => $bedroom['b_butt_3'],  "s_4" => $bedroom['b_butt_4'],  "s_5" => $bedroom['b_butt_5'],
 "s_6" => $bedroom['b_butt_6'],  "s_l" => $bedroom['b_l']);

$json = json_encode($arr);
echo $json;
*/
while (true) {
    $db_long_pool = mysqli_query($link, "SELECT * FROM Long_pooling WHERE api_key='$get_key'");
    $data_lg = mysqli_fetch_assoc($db_long_pool);

    $bedroom_db = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
    $data = mysqli_fetch_assoc($bedroom_db);

    for ($i=1; $i < 7; $i++) {
      $bedroom["b_s_$i"] = $data["bedroom_socket_$i"];
    }
    $bedroom["b_l"] = $data['bedroom_light'];
    for ($i=1; $i < 7; $i++) {
      $bedroom["c_s_$i"] = $data["con_sock_$i"];
    }

    for ($i=1; $i < 7; $i++) {
      if($bedroom["b_s_$i"] == 1)
      {
        $bedroom["b_butt_$i"] = 1;
        $bedroom["b_stan_$i"] = "<h3 class='on text-success'>ON</h3>";
      }
      else {
        $bedroom["b_butt_$i"] = 0;
        $bedroom["b_stan_$i"] = "<h3 class='off text-danger'>OFF</h3>";
      }
    }

    if($bedroom["b_l"] == 1)
    {
      $bedroom["b_light"] = "<h3 class='on text-success'>ON</h3>";
      //$bedroom["b_l"] = 1;
    }
    else {
      $bedroom["b_light"]= "<h3 class='off text-danger'>OFF</h3>";
      //$bedroom["b_l"] = 0;
    }

    for ($i=1; $i < 7; $i++) {
      if($bedroom["c_s_$i"] == 1)
      {
        $bedroom["conn_s_$i"] = "<h3 class='on text-success'>OK</h3>";
      }
      else {
        $bedroom["conn_s_$i"] = "<h3 class='on text-danger'>No</h3>";
      }
    }

    if($id == 1)
    {
      if($data_lg['output_1'] < $data['l_b_1'])
      {
        $arr = array("bedroom_socket_1" => $data['b_temp_sock_1'], "bedroom_socket_2" => $data['b_temp_sock_2'],"bedroom_socket_3" => $data['b_temp_sock_3'], "bedroom_socket_4" => $data['b_temp_sock_4'],"bedroom_socket_5" => $data['b_temp_sock_5'], "bedroom_socket_6" => $data['b_temp_sock_6'],
        "b_s_1" => $bedroom['b_stan_1'], "b_s_2" => $bedroom['b_stan_2'], "b_s_3" => $bedroom['b_stan_3'], "b_s_4" => $bedroom['b_stan_4'], "b_s_5" => $bedroom['b_stan_5'], "b_s_6" => $bedroom['b_stan_6'],
        "b_l" => $bedroom['b_light'], "c_s_1" => $bedroom['conn_s_1'], "c_s_2" => $bedroom['conn_s_2'], "c_s_3" => $bedroom['conn_s_3'], "c_s_4" => $bedroom['conn_s_4'], "c_s_5" => $bedroom['conn_s_5'],
        "c_s_6" => $bedroom['conn_s_6'], "s_1" => $bedroom['b_butt_1'],  "s_2" => $bedroom['b_butt_2'],  "s_3" => $bedroom['b_butt_3'],  "s_4" => $bedroom['b_butt_4'],  "s_5" => $bedroom['b_butt_5'],
         "s_6" => $bedroom['b_butt_6'],  "s_l" => $data['bedroom_light'], "dimer" => $data['dimer']);

        $lastId = $data['l_b_1'];
        $json = json_encode($arr);
        echo $json;
        mysqli_query($link, "UPDATE Long_pooling SET output_1 = $lastId, date = NOW() WHERE api_key = '$get_key'");
        exit;
      }
    }
    elseif ($id == 2) {
      if($data_lg['output_2'] < $data['l_b_2'])
      {
        $arr = array("bedroom_socket_1" => $data['b_temp_sock_1'], "bedroom_socket_2" => $data['b_temp_sock_2'],"bedroom_socket_3" => $data['b_temp_sock_3'], "bedroom_socket_4" => $data['b_temp_sock_4'],"bedroom_socket_5" => $data['b_temp_sock_5'], "bedroom_socket_6" => $data['b_temp_sock_6'],
        "b_s_1" => $bedroom['b_stan_1'], "b_s_2" => $bedroom['b_stan_2'], "b_s_3" => $bedroom['b_stan_3'], "b_s_4" => $bedroom['b_stan_4'], "b_s_5" => $bedroom['b_stan_5'], "b_s_6" => $bedroom['b_stan_6'],
        "b_l" => $bedroom['b_light'], "c_s_1" => $bedroom['conn_s_1'], "c_s_2" => $bedroom['conn_s_2'], "c_s_3" => $bedroom['conn_s_3'], "c_s_4" => $bedroom['conn_s_4'], "c_s_5" => $bedroom['conn_s_5'],
        "c_s_6" => $bedroom['conn_s_6'], "s_1" => $bedroom['b_butt_1'],  "s_2" => $bedroom['b_butt_2'],  "s_3" => $bedroom['b_butt_3'],  "s_4" => $bedroom['b_butt_4'],  "s_5" => $bedroom['b_butt_5'],
         "s_6" => $bedroom['b_butt_6'],  "s_l" => $data['bedroom_light'], "dimer" => $data['dimer']);

        $lastId = $data['l_b_2'];
        $json = json_encode($arr);
        echo $json;
        mysqli_query($link, "UPDATE Long_pooling SET output_2 = $lastId, date = NOW() WHERE api_key = '$get_key'");
        exit;
      }
    }
    elseif ($id == 3) {
      if($data_lg['output_3'] < $data['l_b_3'])
      {
        $arr = array("bedroom_socket_1" => $data['b_temp_sock_1'], "bedroom_socket_2" => $data['b_temp_sock_2'],"bedroom_socket_3" => $data['b_temp_sock_3'], "bedroom_socket_4" => $data['b_temp_sock_4'],"bedroom_socket_5" => $data['b_temp_sock_5'], "bedroom_socket_6" => $data['b_temp_sock_6'],
        "b_s_1" => $bedroom['b_stan_1'], "b_s_2" => $bedroom['b_stan_2'], "b_s_3" => $bedroom['b_stan_3'], "b_s_4" => $bedroom['b_stan_4'], "b_s_5" => $bedroom['b_stan_5'], "b_s_6" => $bedroom['b_stan_6'],
        "b_l" => $bedroom['b_light'], "c_s_1" => $bedroom['conn_s_1'], "c_s_2" => $bedroom['conn_s_2'], "c_s_3" => $bedroom['conn_s_3'], "c_s_4" => $bedroom['conn_s_4'], "c_s_5" => $bedroom['conn_s_5'],
        "c_s_6" => $bedroom['conn_s_6'], "s_1" => $bedroom['b_butt_1'],  "s_2" => $bedroom['b_butt_2'],  "s_3" => $bedroom['b_butt_3'],  "s_4" => $bedroom['b_butt_4'],  "s_5" => $bedroom['b_butt_5'],
         "s_6" => $bedroom['b_butt_6'],  "s_l" => $data['bedroom_light'], "dimer" => $data['dimer']);

        $lastId = $data['l_b_3'];
        $json = json_encode($arr);
        echo $json;
        mysqli_query($link, "UPDATE Long_pooling SET output_3 = $lastId, date = NOW() WHERE api_key = '$get_key'");
        exit;
      }
    }
  sleep(1);
}
?>
