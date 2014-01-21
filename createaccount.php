<?php 
	include_once('config.php');
	include_once('examDAO.php');


	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
		$createusers = examDAO::createusers($fname,$lname,$email,$password);
	}
	header('location:exam.php');

?>