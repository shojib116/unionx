<?php
spl_autoload_register('autoLoader');

function autoLoader($className){
	$path = substr(__DIR__, 0, strrpos(__DIR__, "unionx"))."unionx/classes/";
	$ext = ".class.php";

	$fullPath = $path . strtolower($className) . $ext;

	require_once $fullPath;
}
