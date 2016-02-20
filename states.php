<?php
include('fun_templates.php');
include('fn.php');

/*
$_SESSION["userName"]=$row['email'];
$_SESSION["idUsu"]=$row['id'];
*/
session_start();
if(!isset($_SESSION['userName']))
{
	header("Location: index.php");
}

$uName=$_SESSION["userName"];
$uId=$_SESSION["userId"];

capcapST();
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php
navBar();
capcapEND();

leftNAV();

contentStart();
?>


AQUI VA EL HTML DEL CONTINGUT




<?php
contentEnd();

footer('style="position:fixed; bottom:0; width:100%;"');

?>
