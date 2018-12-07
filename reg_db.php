<?php

if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['login'])) { $login=$_POST['login']; if ($login =='') { unset($login);} }

$link=mysqli_connect("localhost", "root", "123", "server");
$email = stripslashes($email);
$email = htmlspecialchars($email);
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);
$email = trim($email);

$key = (rand(100000000, 999999999));

$id = mysqli_query($link, "SELECT COUNT(id) as count FROM  users");
$data = mysqli_fetch_assoc($id);
$id_bd = $data['count'] + 1;

$key_id = mysqli_query($link, "SELECT COUNT(api_key) as count FROM  users");
$data_key = mysqli_fetch_assoc($key_id);
$id_key = $data_key['count'];
if($id_key == 1)
{
  $key = (rand(100000000, 999999999));
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $result = mysqli_query($link, "SELECT 1 FROM users WHERE login LIKE '%".$login."%'");
  if ($result->num_rows > 0) {
    echo $error = "clone_login";
  }
  else {
    $result = mysqli_query($link, "SELECT 1 FROM users WHERE email LIKE '%".$email."%'");
    if ($result->num_rows > 0){
      echo $error = "clone_email";
    }
    else {
      $create_new = mysqli_query($link, "INSERT INTO users (id, login, password, api_key, email, data_create) VALUES ($id_bd, '$login', '$password', '$key', '$email', NOW())");

      $create_bedroom = mysqli_query($link, "INSERT INTO bedroom (id, api_key, bedroom_light, Sum, bedroom_socket_1, bedroom_socket_2, bedroom_socket_3, bedroom_socket_4, bedroom_socket_5, bedroom_socket_6, b_temp_sock_1, b_temp_sock_2, b_temp_sock_3, b_temp_sock_4, b_temp_sock_5, b_temp_sock_6,
      date) VALUES($id_bd, $key, 0, 1, 0, 0, 0, 0, 0 ,0, 0, 0, 0, 0, 0, 0, NOW())");

      $create_kitchen = mysqli_query($link, "INSERT INTO kitchen (id, api_key, kitchen_light, Sum, kitchen_socket_1, kitchen_socket_2, kitchen_socket_3, kitchen_socket_4, kitchen_socket_5, kitchen_socket_6, k_temp_sock_1, k_temp_sock_2, k_temp_sock_3, k_temp_sock_4, k_temp_sock_5, k_temp_sock_6,
      date) VALUES($id_bd, $key, 0, 1, 0, 0, 0, 0, 0 ,0, 0, 0, 0, 0, 0, 0, NOW())");
      $create_bathroom = mysqli_query($link, "INSERT INTO bathroom (id, api_key, bathroom_light, Sum, bathroom_socket_1, bathroom_socket_2, bathroom_socket_3, bathroom_socket_4, bathroom_socket_5, bathroom_socket_6, ba_temp_sock_1, ba_temp_sock_2, ba_temp_sock_3, ba_temp_sock_4, ba_temp_sock_5, ba_temp_sock_6,
      date) VALUES($id_bd, $key, 0, 1, 0, 0, 0, 0, 0 ,0, 0, 0, 0, 0, 0, 0, NOW())");
      $create_home = mysqli_query($link, "INSERT INTO livingroom (id, api_key, date)
      VALUES($id_bd, $key, NOW())");
      $create_id = mysqli_query($link, "INSERT INTO id (id, api_key, id_b_1, id_b_2, id_b_3, id_b_4, id_b_5, id_b_6, id_k_1, id_k_2, id_k_3, id_k_4, id_k_5, id_k_6, id_ba_1, id_ba_2, id_ba_3,
      id_ba_4, id_ba_5, id_ba_6, id_l_1, id_l_2, id_l_3, id_l_4, id_l_5, id_l_6, date) VALUES($id_bd, $key, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
      0, NOW())");
      $create_ip_device = mysqli_query($link, "INSERT INTO network_device (id, api_key, ip_bedroom_1, ip_bedroom_2) VALUES ($id_bd, $key, 0, 0)");
    }
  }
}
else {
  $error = "email_false";
  echo $error;
}
 ?>
