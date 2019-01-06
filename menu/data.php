<?php
session_start();
$get_key = $_SESSION['api'];


$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

$bedroom_db = mysqli_query($link, "SELECT * FROM bedroom WHERE api_key='$get_key'");
$data_bedroom = mysqli_fetch_assoc($bedroom_db);

for ($i=1; $i < 7; $i++) {
  if($data_bedroom["name_sock_$i"] == "")
  {
    $bedroom["name_$i"] = "Socket";
  }
  else {
    $bedroom["name_$i"] = "<h4>".$data_bedroom["name_sock_$i"]."</h4>";
  }

  if($data_bedroom["bedroom_socket_$i"] == 1)
  {
    $bedroom["stan_$i"] = "<h4 class='on text-success'>ON</h3>";
  }
  else {
    $bedroom["stan_$i"] = "<h4 class='off text-danger'>OFF</h3>";
  }
  if($data_bedroom["con_sock_$i"] == 1)
  {
    $bedroom["con_$i"] = "<h4 class='on text-success'>OK</h3>";
  }
  else {
    $bedroom["con_$i"] = "<h4 class='off text-danger'>NO</h3>";
  }

}

$kitchen_db = mysqli_query($link, "SELECT * FROM kitchen WHERE api_key='$get_key'");
$data_kitchen = mysqli_fetch_assoc($kitchen_db);

for ($i=1; $i < 7; $i++) {
  if($data_kitchen["name_sock_$i"] == "")
  {
    $kitchen["name_$i"] = "Socket";
  }
  else {
    $kitchen["name_$i"] = "<h4>".$data_kitchen["name_sock_$i"]."</h4>";
  }

  if($data_kitchen["kitchen_socket_$i"] == 1)
  {
    $kitchen["stan_$i"] = "<h4 class='on text-success'>ON</h3>";
  }
  else {
    $kitchen["stan_$i"] = "<h4 class='off text-danger'>OFF</h3>";
  }
  if($data_kitchen["con_sock_$i"] == 1)
  {
    $kitchen["con_$i"] = "<h4 class='on text-success'>OK</h3>";
  }
  else {
    $kitchen["con_$i"] = "<h4 class='off text-danger'>NO</h3>";
  }
}

$bathroom_db = mysqli_query($link, "SELECT * FROM bathroom WHERE api_key='$get_key'");
$data_bathroom = mysqli_fetch_assoc($bathroom_db);

for ($i=1; $i < 7; $i++) {
  if($data_bathroom["name_sock_$i"] == "")
  {
    $bathroom["name_$i"] = "Socket";
  }
  else {
    $bathroom["name_$i"] = "<h4>".$data_bathroom["name_sock_$i"]."</h4>";
  }

  if($data_bathroom["bathroom_socket_$i"] == 1)
  {
    $bathroom["stan_$i"] = "<h4 class='on text-success'>ON</h3>";
  }
  else {
    $bathroom["stan_$i"] = "<h4 class='off text-danger'>OFF</h3>";
  }
  if($data_bathroom["con_sock_$i"] == 1)
  {
    $bathroom["con_$i"] = "<h4 class='on text-success'>OK</h3>";
  }
  else {
    $bathroom["con_$i"] = "<h4 class='off text-danger'>NO</h3>";
  }
}

$arr = array('b_name_1' => $bedroom['name_1'], 'b_name_2' => $bedroom['name_2'], 'b_name_3' => $bedroom['name_3'], 'b_name_4' => $bedroom['name_4'], 'b_name_5' => $bedroom['name_5'], 'b_name_6' => $bedroom['name_6'],
'b_stan_1' => $bedroom['stan_1'], 'b_stan_2' => $bedroom['stan_2'], 'b_stan_3' => $bedroom['stan_3'], 'b_stan_4' => $bedroom['stan_4'], 'b_stan_5' => $bedroom['stan_5'], 'b_stan_6' => $bedroom['stan_6'],
'b_con_1' => $bedroom["con_1"], 'b_con_2' => $bedroom["con_2"], 'b_con_3' => $bedroom["con_3"], 'b_con_4' => $bedroom["con_4"], 'b_con_5' => $bedroom["con_5"], 'b_con_6' => $bedroom["con_6"],
'k_name_1' => $kitchen['name_1'], 'k_name_2' => $kitchen['name_2'], 'k_name_3' => $kitchen['name_3'], 'k_name_4' => $kitchen['name_4'], 'k_name_5' => $kitchen['name_5'], 'k_name_6' => $kitchen['name_6'],
'k_stan_1' => $kitchen['stan_1'], 'k_stan_2' => $kitchen['stan_2'], 'k_stan_3' => $kitchen['stan_3'], 'k_stan_4' => $kitchen['stan_4'], 'k_stan_5' => $kitchen['stan_5'], 'k_stan_6' => $kitchen['stan_6'],
'k_con_1' => $kitchen["con_1"], 'k_con_2' => $kitchen["con_2"], 'k_con_3' => $kitchen["con_3"], 'k_con_4' => $kitchen["con_4"], 'k_con_5' => $kitchen["con_5"], 'k_con_6' => $kitchen["con_6"],
'ba_name_1' => $bathroom['name_1'], 'ba_name_2' => $bathroom['name_2'], 'ba_name_3' => $bathroom['name_3'], 'ba_name_4' => $bathroom['name_4'], 'ba_name_5' => $bathroom['name_5'], 'ba_name_6' => $bathroom['name_6'],
'ba_stan_1' => $bathroom['stan_1'], 'ba_stan_2' => $bathroom['stan_2'], 'ba_stan_3' => $bathroom['stan_3'], 'ba_stan_4' => $bathroom['stan_4'], 'ba_stan_5' => $bathroom['stan_5'], 'ba_stan_6' => $bathroom['stan_6'],
'ba_con_1' => $bathroom["con_1"], 'ba_con_2' => $bathroom["con_2"], 'ba_con_3' => $bathroom["con_3"], 'ba_con_4' => $bathroom["con_4"], 'ba_con_5' => $bathroom["con_5"], 'ba_con_6' => $bathroom["con_6"]);
$json = json_encode($arr);
echo $json;
?>
