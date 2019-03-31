<?php
	$mysqli = new mysqli("aero.com", "guest", "111", "aero_db");
	if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
?>
