<?php 
	include_once('examDAO.php');
	include_once 'config.php';

	$login_email = isset($_POST['login_email']) ? $_POST['login_email'] : false;
	$login_password = isset($_POST['login_password']) ? $_POST['login_password'] : false;

	if ($login_email && $login_password) {
		$_login = examDAO::login($login_email,$login_password);
	
		if($_login) {
			header('location:home.php');
		} else {
			header('location:exam.php');
		}
	} else {
		header('location:exam.php');
	}

	
																														
?>