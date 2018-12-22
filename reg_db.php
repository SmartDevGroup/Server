<?php

if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['login'])) { $login=$_POST['login']; if ($login =='') { unset($login);} }

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
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

      $create_bedroom = mysqli_query($link, "INSERT INTO bedroom (id, api_key, date) VALUES($id_bd, $key, NOW())");
      $create_kitchen = mysqli_query($link, "INSERT INTO kitchen (id, api_key, date) VALUES($id_bd, $key, NOW())");
      $create_bathroom = mysqli_query($link, "INSERT INTO bathroom (id, api_key, date) VALUES($id_bd, $key, NOW())");
      $create_home = mysqli_query($link, "INSERT INTO livingroom (id, api_key, date) VALUES($id_bd, $key, NOW())");
      $create_id = mysqli_query($link, "INSERT INTO id (id, api_key, date) VALUES($id_bd, $key, NOW())");
      $create_ip_device = mysqli_query($link, "INSERT INTO network_device (id, api_key) VALUES ($id_bd, $key)");
    }
  }
}
else {
  $error = "email_false";
  echo $error;
}
 ?>
