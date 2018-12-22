<?php
session_start();
//session_write_close();
//ignore_user_abort(false);
//set_time_limit(40);

//$get_key = $_COOKIE['api'];
//$get_key = $_GET['api'];
$get_key = $_SESSION['api'];
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");


/*
while (true) {
  $dba_long_pool = mysqli_query($link, "SELECT * FROM Long_pooling WHERE api_key='$get_key'");
  $data_lg = mysqli_fetch_assoc($dba_long_pool);

  $bathroom_db = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
  $data = mysqli_fetch_assoc($bathroom_db);

  for ($i=0; $i < 7; $i++) {
    $bathroom["ba_s_$i"] = $data["bathroom_socket_$i"];
  }

  $bathroom["ba_l"] = $data['bathroom_light'];

  for ($i=0; $i < 7; $i++) {
    $bathroom["c_s_$i"] = $data["con_sock_$i"];
  }

  for ($i=0; $i < 7; $i++) {
    if($bathroom["ba_s_$i"] == 1)
    {
      $bathroom["ba_stan_$i"] = "<h3 class='on text-success'>ON</h3>";
    }
    else {
      $bathroom["ba_stan_$i"] = "<h3 class='off text-danger'>OFF</h3>";
    }
  }

  if($bathroom["ba_l"] == 1)
  {
    $bathroom["ba_light"]= "<h3 class='on text-success'>ON</h3>";
  }
  else {
    $bathroom["ba_light"]= "<h3 class='off text-danger'>OFF</h3>";
  }

  for ($i=0; $i < 7; $i++) {
    if($bathroom["c_s_$i"] == 1)
    {
      $bathroom["conn_s_$i"] = "<h3 class='on text-success'>OK</h3>";
    }
    else {
      $bathroom["conn_s_$i"] = "<h3 class='on text-danger'>No</h3>";
    }
  }

  if($data_lg['output_ba'] < $data['l_ba'])
  {
    $arr = array("bathroom_socket_1" => $data['ba_temp_sock_1'], "bathroom_socket_2" => $data['ba_temp_sock_2'],"bathroom_socket_3" => $data['ba_temp_sock_3'], "bathroom_socket_4" => $data['ba_temp_sock_4'],"bathroom_socket_5" => $data['ba_temp_sock_5'], "bathroom_socket_6" => $data['ba_temp_sock_6'],
    "ba_s_1" => $bathroom['ba_stan_1'], "ba_s_2" => $bathroom['ba_stan_2'], "ba_s_3" => $bathroom['ba_stan_3'], "ba_s_4" => $bathroom['ba_stan_4'], "ba_s_5" => $bathroom['ba_stan_5'], "ba_s_6" => $bathroom['ba_stan_6'],
    "ba_l" => $bathroom['ba_light'], "c_s_1" => $bathroom['conn_s_1'], "c_s_2" => $bathroom['conn_s_2'], "c_s_3" => $bathroom['conn_s_3'], "c_s_4" => $bathroom['conn_s_4'], "c_s_5" => $bathroom['conn_s_5'], "c_s_6" => $bathroom['conn_s_6']);

    $lastId = $data['l_ba'];
    $json = json_encode($arr);
    echo $json;
    mysqli_query($link, "UPDATE Long_pooling SET output_ba = $lastId, date = NOW() WHERE api_key = '$get_key'");
    exit;
  }
  sleep(2);
}
*/

$bathroom_db = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($bathroom_db);

for ($i=0; $i < 7; $i++) {
  $bathroom["ba_s_$i"] = $data["bathroom_socket_$i"];
}

$bathroom["ba_l"] = $data['bathroom_light'];

for ($i=0; $i < 7; $i++) {
  $bathroom["c_s_$i"] = $data["con_sock_$i"];
}

for ($i=0; $i < 7; $i++) {
  if($bathroom["ba_s_$i"] == 1)
  {
    $bathroom["ba_stan_$i"] = "<h3 class='on text-success'>ON</h3>";
  }
  else {
    $bathroom["ba_stan_$i"] = "<h3 class='off text-danger'>OFF</h3>";
  }
}

if($bathroom["ba_l"] == 1)
{
  $bathroom["ba_light"]= "<h3 class='on text-success'>ON</h3>";
}
else {
  $bathroom["ba_light"]= "<h3 class='off text-danger'>OFF</h3>";
}

for ($i=0; $i < 7; $i++) {
  if($bathroom["c_s_$i"] == 1)
  {
    $bathroom["conn_s_$i"] = "<h3 class='on text-success'>OK</h3>";
  }
  else {
    $bathroom["conn_s_$i"] = "<h3 class='on text-danger'>No</h3>";
  }
}

$arr = array("bathroom_socket_1" => $data['ba_temp_sock_1'], "bathroom_socket_2" => $data['ba_temp_sock_2'],"bathroom_socket_3" => $data['ba_temp_sock_3'], "bathroom_socket_4" => $data['ba_temp_sock_4'],"bathroom_socket_5" => $data['ba_temp_sock_5'], "bathroom_socket_6" => $data['ba_temp_sock_6'],
"ba_s_1" => $bathroom['ba_stan_1'], "ba_s_2" => $bathroom['ba_stan_2'], "ba_s_3" => $bathroom['ba_stan_3'], "ba_s_4" => $bathroom['ba_stan_4'], "ba_s_5" => $bathroom['ba_stan_5'], "ba_s_6" => $bathroom['ba_stan_6'],
"ba_l" => $bathroom['ba_light'], "c_s_1" => $bathroom['conn_s_1'], "c_s_2" => $bathroom['conn_s_2'], "c_s_3" => $bathroom['conn_s_3'], "c_s_4" => $bathroom['conn_s_4'], "c_s_5" => $bathroom['conn_s_5'], "c_s_6" => $bathroom['conn_s_6']);
$json = json_encode($arr);
echo $json;
?>
