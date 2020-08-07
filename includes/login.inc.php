<?php
session_name('unionx');
session_start();
include_once 'class-autoload.inc.php';

if (isset($_POST['submitLogin'])) {
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	if (empty($email) || empty($pwd)) {
		header("Location: ../index.php?loginfield=empty");
		exit();
	} else {

		$userCheck = new UserView();
		$result = $userCheck->checkUser($email);

		if(boolval($result) != 1){
			header("Location: ../index.php?account=doesNotexist");
			exit();
		}
		else {
			$hashedpwd = $result['pwd'];
			$id = $result['id'];
			if (!password_verify($pwd, $hashedpwd)) {
				header("Location: ../index.php?pass=wrong");
				exit();
			}else{
				$_SESSION['unionxid'] = $id;
				header("Location: ../index.php?login=success");
			}

		}
	}
}
