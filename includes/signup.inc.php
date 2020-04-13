<?php
	if(isset($_POST['signup-submit'])){
		require 'dbh.inc.php';

		$email = $_POST['emailId'];
		$password = $_POST['pwd'];
		$passwordRepeat = $_POST['pwd-repeat'];


	}