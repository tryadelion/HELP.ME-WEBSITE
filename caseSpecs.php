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
$caseID=$_GET['Id'];

$connexio=connectDB();

capcapST();
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php
navBar($uName);
capcapEND();

leftNAV(2);

contentStart();

$sql="SELECT c.title, c.coordX, c.coordY, c.description, date_format(c.dataIncident, '%d/%m/%Y') as dataIncident, u.name pname, u.surname psurname, m.name mname, m.surname msurname FROM casefile c, user_data u, med_data m WHERE c.assignedMentor=m.id AND c.id_user=u.id AND c.id='".$caseID."'";

$result = mysqli_query($connexio, $sql);
if($result !=NULL)
	$row = mysqli_fetch_assoc($result);
else
	$row=null;

echo $sql;
?>

<div class="row">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-image">
				<img class="activator"  style="width: 390px; height: 250px;margin-left: 18px;" src="http://maps.google.com/maps/api/staticmap?center=<?=$row['coordX']?>,<?=$row['coordY']?>&zoom=17&size=400x300&sensor=false&markers=color:green%7C<?=$row['coordX']?>,<?=$row['coordY']?>"/>
				<span class="card-title"><?=$row['title']?></span>
			</div>
			<div class="card-content">
				<p>I am a very simple card. I am good at containing small bits of information.
				I am convenient because I require little markup to use effectively.</p>
			</div>
			<div class="card-action">
				<a href="#">This is a link</a>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col s12 m5">
		<div class="card-panel teal">
			<div class="card-image">
				<img class="activator"  style="width: 390px; height: 250px;margin-left: 18px;" src="http://maps.google.com/maps/api/staticmap?center=<?=$row['coordX']?>,<?=$row['coordY']?>&zoom=17&size=400x300&sensor=false&markers=color:green%7C<?=$row['coordX']?>,<?=$row['coordY']?>"/>
			</div>
		</div>
	</div>
</div>

<?php
contentEnd();
footer('style="position:fixed; bottom:0; width:100%;"');
?>
