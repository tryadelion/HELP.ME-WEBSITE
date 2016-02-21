<?php
include('fun_templates.php');
include('fn.php');

session_start();
if(!isset($_SESSION['userName']))
{
	header("Location: index.php");
}

$uName=$_SESSION["userName"];
$uId=$_SESSION["userId"];

$connexio=connectDB();
mysql_set_charset('utf8');

$sql = "SELECT c.title, c.coordX, c.coordY, c.description, date_format(c.dataIncident, '%d/%m/%Y') as dataIncident, u.name, u.surname  FROM casefile c, user_data u WHERE c.location = 'Barcelona' AND c.id_user=u.id";
//echo $sql;
$connexio=connectDB();

capcapST();
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php
navBar($uName);
capcapEND();

leftNAV(2);

contentStart();

$result = mysqli_query($connexio, $sql);
$i=0;
while ($obj = mysqli_fetch_object($result)) {

	caseFile($obj->title, $obj->dataIncident, $obj->name." ".$obj->surname, $obj->description, $obj->coordX, $obj->coordY);
	$i++;
}

disconnectDB($connexio);
?>
<?php
contentEnd();
if($i<2)
	footer('style="position:fixed; bottom:0; width:100%;"');
else
	footer('');
?>
