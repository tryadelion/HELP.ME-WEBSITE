<?php
include('fun_templates.php');
//include('fn.php');

/*
$_SESSION["userName"]=$row['email'];
$_SESSION["idUsu"]=$row['id'];

session_start();
if(!isset($_SESSION['userName']))
{
	header("Location: index.php");
}

$uName=$_SESSION["userName"];
$uId=$_SESSION["idUsu"];
*/
capcapST();
navBar();
capcapEND();

leftNAV();

contentStart();

contentEnd();

footer('style="position:fixed; bottom:0; width:100%;"');

?>
