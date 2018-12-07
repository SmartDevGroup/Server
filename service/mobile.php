<?php

if (isset($_GET['login'])) { $login=$_GET['login']; if ($login =='') { unset($login);} }
if (isset($_GET['pass'])) { $password=$_GET['pass']; if ($password =='') { unset($password);} }
$link=mysqli_connect("localhost", "root", "123", "server");


$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);

$result = mysqli_query($link, "SELECT * FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);

if (empty($myrow["login"]))
{
  echo "false_login";
}
else {
  if ($myrow["password"]==$password) {
    $data_db = mysqli_query($link, "SELECT * FROM users WHERE login ='$login'");
    $data = mysqli_fetch_assoc($data_db);
    echo $key = $data['api_key'];
  }
  else {
    echo "false_pass";
  }
}


?>
