<?php
session_start();
if (isset($_POST['login'])) { $login=$_POST['login']; if ($login =='') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");


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
    $link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
	$api_key = mysqli_query($link,"SELECT api_key FROM users WHERE login='$login'");
	$key = mysqli_fetch_assoc($api_key);
	$get = $key['api_key'];
	$_SESSION['api'] = $get;
	header("Location: panel.php");}
  else {
    echo "false_pass";
  }
}


?>
