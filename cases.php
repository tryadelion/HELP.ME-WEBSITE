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

$connexio=connectDB();
mysql_set_charset('utf8');

$sql = "SELECT * FROM casefile WHERE location = 'Barcelona'";

$connexio=connectDB();

capcapST();
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php
navBar($uName);
capcapEND();

leftNAV(2);

contentStart();
/*
$result = mysqli_query($connexio, $sql);

while ($obj = mysqli_fetch_object($result)) {

	//examMiniCard($obj->exam_date, $obj->name, $obj->type, $obj->qualif, $obj->id."&code=".$obj->code."&name=".$obj->name);
	//caseFile($titol, $data, $noms, $desc, $x, $y)

}*/
?>

<div="row">
<div class="card col s3"style="margin-right: 1%" >
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
     <p><a href="#">This is a link</a></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
     <p>Here is some more information about this product that is only revealed once clicked on.</p>
   </div>
 </div>
</div>


<?php
contentEnd();

footer('style="position:fixed; bottom:0; width:100%;"');

?>
