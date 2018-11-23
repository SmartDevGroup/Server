<?php
	mysql_connect("127.0.0.1", "root", "")or die ('Can not connect to the database: ' . mysql_error());
	mysql_select_db("server") or die ('Can not select database: ' . mysql_error());
	mysql_query("SET CHARACTER SET utf8");
?>