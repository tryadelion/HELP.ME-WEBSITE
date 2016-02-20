<?php
	session_start();
	unset($_SESSION["userName"]);
  unset($_SESSION["userId"]);
	header("Location: main.php");
?>
