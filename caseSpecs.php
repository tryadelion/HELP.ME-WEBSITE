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
$caseID=$_GET['caseId'];

$connexio=connectDB();

capcapST();
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php
navBar($uName);
capcapEND();

leftNAV(2);

contentStart();

$sql="SELECT c.title, c.coordX, c.coordY, c.description, date_format(c.dataIncident, '%d/%m/%Y') as dataIncident, u.name pname, u.surname psurname, m.name tname, m.surname tsurname FROM casefile c, user_data u, med_data m WHERE c.assignedMentor=m.id AND c.id_user=u.id AND c.id='".$caseID."'";

$result = mysqli_query($connexio, $sql);
if($result !=NULL)
	$row = mysqli_fetch_assoc($result);
else
	$row=null;
disconnectDB($connexio);
echo $sql;
?>

<div class="light-green left-align white-text" style="margin-right:10%; height:100%; padding:20px;" >
		<img class="activator"   style="width: 390px; height: 250px;margin-left: 18px; float:right;" src="http://maps.google.com/maps/api/staticmap?center=<?=$row['coordX']?>,<?=$row['coordY']?>&zoom=17&size=400x300&sensor=false&markers=color:green%7C<?=$row['coordX']?>,<?=$row['coordY']?>"/>
	<p>
	</p> <h4>	<?php  echo $row['title'];?> </h4>

	<p><h4>DESCRIPCIÓ  </h4>
	</p>	<?php echo $row['description'];?>
	<p><h4>DATA  </h4>
	</p>	<?php echo $row['dataIncident'];?>
	<p><h4>NOM PERSONA  </h4>
	</p>	<?php  echo $row['pname']." ".$row['psurname']; ?>
	<p><h4>NOM CONSELLER  </h4>
	</p>	<?php  echo $row['tname']." ".$row['tsurname']; ?>
</div>

<?php
contentEnd();
footer('style="position:fixed; bottom:0; width:100%;"');
?>
