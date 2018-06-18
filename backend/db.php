<?php
	$connection = mysqli_connect('zechemod.mysql.tools', 'zechemod_db', 'small_indie+38976d','zechemod_db');
	$connection->set_charset("utf8");
	if ($connection == false) {
		echo 'can`t connect to db<br>';
		echo mysqli_connect_error();
		exit();
	}
?>		