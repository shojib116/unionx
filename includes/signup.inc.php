<?php
session_name('unionx');
session_start();
include_once 'class-autoload.inc.php';

if (isset($_POST['submitSignup'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

	if (empty($name) || empty($email) || empty($pwd)) {
		header("Location: ../index.php?signupfield=empty");
		exit();
	} else {

		$userCheck = new UserView();
		$result = $userCheck->checkUser($email);

		if(boolval($result) == 1){
			header("Location: ../index.php?account=exists");
			exit();
		}
		else {
			if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
				header("Location: ../index.php?name=invalidchar");
				exit();
			}
			else{
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../index.php?email=invalidemail");
					exit();
				} else {

					$newUser = new UserControl();
					$newUser->newUser($name, $email, $hashedpwd);
					header("Location: ../index.php?signup=success");
				}
			}
		}
	}
}
