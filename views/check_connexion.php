<?php
	session_start();
	if(!isset($_SESSION['user'])) {
		header('Location: index.php');
	}
	$_SESSION['page'] = $_SERVER['SCRIPT_NAME'];