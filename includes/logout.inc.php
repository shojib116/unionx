<?php
session_name('unionx');
session_start();


	session_unset();

	session_destroy();

	header("Location: ../index.php?logout=success");
