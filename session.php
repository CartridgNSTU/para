<?php
	session_start();
	if (!isset($_SESSION['i'])){
		$_SESSION['i'] = 0;
	}
	else {
		$_SESSION['i']++;
	}
	echo $_SESSION['i'];
?>