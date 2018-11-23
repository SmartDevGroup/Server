<?php
	include("includes/connect.php");

	$adminemail = $_POST['email'];
	$adminpass = $_POST['password'];
	$auth = 'admin_in';

	$query = mysql_query("SELECT * FROM users WHERE login = '$adminemail' AND admin_pass = '$adminpass'");
	if (mysql_affected_rows() == 0 ){
		header("location:"."index.php");
	} else {
		$row = mysql_fetch_array($query);
		setcookie("adminid",$row["id"]);
		setcookie("adminpass",$adminpass);
		setcookie("auth",$auth);
		header("location:"."home.php");
	}
?>
