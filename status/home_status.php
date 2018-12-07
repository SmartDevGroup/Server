<?php
session_start();
//session_write_close();
//ignore_user_abort(false);
//set_time_limit(40);

//$get_key = $_COOKIE['api'];
//$get_key = $_GET['api'];
$get_key = $_SESSION['api'];
$link=mysqli_connect("localhost", "root", "123", "server");


/*
while (true) {
  $dh_long_pool = mysqli_query($link, "SELECT * FROM Long_pooling WHERE api_key='$get_key'");
  $data_lg = mysqli_fetch_assoc($dh_long_pool);

  $living_db = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
  $data = mysqli_fetch_assoc($living_db);

  for ($i=0; $i < 7; $i++) {
    $living["h_s_$i"] = $data["home_socket_$i"];
  }

  $living["h_l"] = $data['home_light'];

  for ($i=0; $i < 7; $i++) {
    $living["c_s_$i"] = $data["con_sock_$i"];
  }

  for ($i=0; $i < 7; $i++) {
    if($living["h_s_$i"] == 1)
    {
      $living["h_stan_$i"] = "<h3 class='on text-success'>ON</h3>";
    }
    else {
      $living["h_stan_$i"] = "<h3 class='off text-danger'>OFF</h3>";
    }
  }

  if($living["h_l"] == 1)
  {
    $living["h_light"]= "<h3 class='on text-success'>ON</h3>";
  }
  else {
    $living["h_light"]= "<h3 class='off text-danger'>OFF</h3>";
  }

  for ($i=0; $i < 7; $i++) {
    if($living["c_s_$i"] == 1)
    {
      $living["conn_s_$i"] = "<h3 class='on text-success'>OK</h3>";
    }
    else {
      $living["conn_s_$i"] = "<h3 class='on text-danger'>No</h3>";
    }
  }

  if($data_lg['output_h'] < $data['l_h'])
  {
    $arr = array("home_socket_1" => $data['h_temp_sock_1'], "home_socket_2" => $data['h_temp_sock_2'],"home_socket_3" => $data['h_temp_sock_3'], "home_socket_4" => $data['h_temp_sock_4'],"home_socket_5" => $data['h_temp_sock_5'], "home_socket_6" => $data['h_temp_sock_6'],
    "h_s_1" => $living['h_stan_1'], "h_s_2" => $living['h_stan_2'], "h_s_3" => $living['h_stan_3'], "h_s_4" => $living['h_stan_4'], "h_s_5" => $living['h_stan_5'], "h_s_6" => $living['h_stan_6'],
    "h_l" => $living['h_light'], "c_s_1" => $living['conn_s_1'], "c_s_2" => $living['conn_s_2'], "c_s_3" => $living['conn_s_3'], "c_s_4" => $living['conn_s_4'], "c_s_5" => $living['conn_s_5'],
    "c_s_6" => $living['conn_s_6']);

    $lastId = $data['l_h'];
    $json = json_encode($arr);
    echo $json;
    mysqli_query($link, "UPDATE Long_pooling SET output_h = $lastId, date = NOW() WHERE api_key = '$get_key'");
    exit;
  }
  sleep(2);
}
*/
$living_db = mysqli_query($link, "SELECT * FROM livingroom WHERE api_key='$get_key'");
$data = mysqli_fetch_assoc($living_db);

for ($i=0; $i < 7; $i++) {
  $living["h_s_$i"] = $data["home_socket_$i"];
}

$living["h_l"] = $data['home_light'];

for ($i=0; $i < 7; $i++) {
  $living["c_s_$i"] = $data["con_sock_$i"];
}

for ($i=0; $i < 7; $i++) {
  if($living["h_s_$i"] == 1)
  {
    $living["h_stan_$i"] = "<h3 class='on text-success'>ON</h3>";
  }
  else {
    $living["h_stan_$i"] = "<h3 class='off text-danger'>OFF</h3>";
  }
}

if($living["h_l"] == 1)
{
  $living["h_light"]= "<h3 class='on text-success'>ON</h3>";
}
else {
  $living["h_light"]= "<h3 class='off text-danger'>OFF</h3>";
}

for ($i=0; $i < 7; $i++) {
  if($living["c_s_$i"] == 1)
  {
    $living["conn_s_$i"] = "<h3 class='on text-success'>OK</h3>";
  }
  else {
    $living["conn_s_$i"] = "<h3 class='on text-danger'>No</h3>";
  }
}

$arr = array("home_socket_1" => $data['h_temp_sock_1'], "home_socket_2" => $data['h_temp_sock_2'],"home_socket_3" => $data['h_temp_sock_3'], "home_socket_4" => $data['h_temp_sock_4'],"home_socket_5" => $data['h_temp_sock_5'], "home_socket_6" => $data['h_temp_sock_6'],
"h_s_1" => $living['h_stan_1'], "h_s_2" => $living['h_stan_2'], "h_s_3" => $living['h_stan_3'], "h_s_4" => $living['h_stan_4'], "h_s_5" => $living['h_stan_5'], "h_s_6" => $living['h_stan_6'],
"h_l" => $living['h_light'], "c_s_1" => $living['conn_s_1'], "c_s_2" => $living['conn_s_2'], "c_s_3" => $living['conn_s_3'], "c_s_4" => $living['conn_s_4'], "c_s_5" => $living['conn_s_5'],
"c_s_6" => $living['conn_s_6']);

$json = json_encode($arr);
echo $json;

?>
