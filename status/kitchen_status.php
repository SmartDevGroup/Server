<?php
//session_write_close();
//ignore_user_abort(false);
//set_time_limit(40);
session_start();

//$get_key = $_COOKIE['api'];
//$get_key = $_GET['api'];
$get_key = $_SESSION['api'];
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");


/*
while (true) {
  $db_long_pool = mysqli_query($link, "SELECT * FROM Long_pooling WHERE api_key='$get_key'");
  $data_lg = mysqli_fetch_assoc($db_long_pool);

  $kitchen_db = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
  $data = mysqli_fetch_assoc($kitchen_db);

  for ($i=0; $i < 7; $i++) {
    $kitchen["k_s_$i"] = $data["kitchen_socket_$i"];
  }

  $kitchen["k_l"] = $data['kitchen_light'];

  for ($i=0; $i < 7; $i++) {
    $kitchen["c_s_$i"] = $data["con_sock_$i"];
  }

  for ($i=0; $i < 7; $i++) {
    if($kitchen["k_s_$i"] == 1)
    {
      $kitchen["k_stan_$i"] = "<h3 class='on text-success'>ON</h3>";
    }
    else {
      $kitchen["k_stan_$i"] = "<h3 class='off text-danger'>OFF</h3>";
    }
  }

  if($kitchen["k_l"] == 1)
  {
    $kitchen["k_light"]= "<h3 class='on text-success'>ON</h3>";
  }
  else {
    $kitchen["k_light"]= "<h3 class='off text-danger'>OFF</h3>";
  }

  for ($i=0; $i < 7; $i++) {
    if($kitchen["c_s_$i"] == 1)
    {
      $kitchen["conn_s_$i"] = "<h3 class='on text-success'>OK</h3>";
    }
    else {
      $kitchen["conn_s_$i"] = "<h3 class='on text-danger'>No</h3>";
    }
  }

  if($data_lg['output_k'] < $data['l_k'])
  {
    $arr = array("kitchen_socket_1" => $data['k_temp_sock_1'], "kitchen_socket_2" => $data['k_temp_sock_2'],"kitchen_socket_3" => $data['k_temp_sock_3'], "kitchen_socket_4" => $data['k_temp_sock_4'],"kitchen_socket_5" => $data['k_temp_sock_5'], "kitchen_socket_6" => $data['k_temp_sock_6'],
    "k_s_1" => $kitchen['k_stan_1'], "k_s_2" => $kitchen['k_stan_2'], "k_s_3" => $kitchen['k_stan_3'], "k_s_4" => $kitchen['k_stan_4'], "k_s_5" => $kitchen['k_stan_5'], "k_s_6" => $kitchen['k_stan_6'],
    "k_l" => $kitchen['k_light'],
    "c_s_1" => $kitchen['conn_s_1'], "c_s_2" => $kitchen['conn_s_2'], "c_s_3" => $kitchen['conn_s_3'], "c_s_4" => $kitchen['conn_s_4'], "c_s_5" => $kitchen['conn_s_5'], "c_s_6" => $kitchen['conn_s_6']);

    $lastId = $data['l_k'];
    $json = json_encode($arr);
    echo $json;
    mysqli_query($link, "UPDATE Long_pooling SET output_k = $lastId, date = NOW() WHERE api_key = '$get_key'");
    exit;
  }
  sleep(2);
}
*/
$kitchen_db = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($kitchen_db);

for ($i=0; $i < 7; $i++) {
  $kitchen["k_s_$i"] = $data["kitchen_socket_$i"];
}

$kitchen["k_l"] = $data['kitchen_light'];

for ($i=0; $i < 7; $i++) {
  $kitchen["c_s_$i"] = $data["con_sock_$i"];
}

for ($i=0; $i < 7; $i++) {
  if($kitchen["k_s_$i"] == 1)
  {
    $kitchen["b_butt_$i"] = 1;
    $kitchen["k_stan_$i"] = "<h3 class='on text-success'>ON</h3>";
  }
  else {
    $kitchen["b_butt_$i"] = 0;
    $kitchen["k_stan_$i"] = "<h3 class='off text-danger'>OFF</h3>";
  }
}

if($kitchen["k_l"] == 1)
{
  $kitchen["b_l"] = 1;
  $kitchen["k_light"]= "<h3 class='on text-success'>ON</h3>";
}
else {
  $kitchen["b_l"] = 0;
  $kitchen["k_light"]= "<h3 class='off text-danger'>OFF</h3>";
}

for ($i=0; $i < 7; $i++) {
  if($kitchen["c_s_$i"] == 1)
  {
    $kitchen["conn_s_$i"] = "<h3 class='on text-success'>OK</h3>";
  }
  else {
    $kitchen["conn_s_$i"] = "<h3 class='on text-danger'>No</h3>";
  }
}

$arr = array("kitchen_socket_1" => $data['k_temp_sock_1'], "kitchen_socket_2" => $data['k_temp_sock_2'],"kitchen_socket_3" => $data['k_temp_sock_3'], "kitchen_socket_4" => $data['k_temp_sock_4'],"kitchen_socket_5" => $data['k_temp_sock_5'], "kitchen_socket_6" => $data['k_temp_sock_6'],
"k_s_1" => $kitchen['k_stan_1'], "k_s_2" => $kitchen['k_stan_2'], "k_s_3" => $kitchen['k_stan_3'], "k_s_4" => $kitchen['k_stan_4'], "k_s_5" => $kitchen['k_stan_5'], "k_s_6" => $kitchen['k_stan_6'],
"k_l" => $kitchen['k_light'], "c_s_1" => $kitchen['conn_s_1'], "c_s_2" => $kitchen['conn_s_2'], "c_s_3" => $kitchen['conn_s_3'], "c_s_4" => $kitchen['conn_s_4'], "c_s_5" => $kitchen['conn_s_5'],
"c_s_6" => $kitchen['conn_s_6'], "s_1" => $kitchen['b_butt_1'],  "s_2" => $kitchen['b_butt_2'],  "s_3" => $kitchen['b_butt_3'],  "s_4" => $kitchen['b_butt_4'],  "s_5" => $kitchen['b_butt_5'],
 "s_6" => $kitchen['b_butt_6'],  "s_l" => $kitchen['b_l']);

$json = json_encode($arr);
echo $json;
?>
