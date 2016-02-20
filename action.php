<?php
include("fn.php");
session_start();

$uName=$_POST['uName'];
$uPass=md5($_POST['uPass']);
$eName=$_POST['eName'];
$street=$_POST['street'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$fax=$_POST['fax'];

//$connexio=connectDB();

//$uPass=sha1($uPass);



/*

$sql="INSERT INTO student_qualif (id_student, exam_date, qualif, course, type, observacions) VALUES ('".$stu_id."', DATE_FORMAT(STR_TO_DATE('".$eDate."','%d/%m/%Y'),'%Y%m%d'),'".$grade."','".$assignatura."','".$type."','".$observacions."')";
echo $sql;

$subjectCode=$_GET['code'];
$subjectName=$_GET['name'];

$connexio=connectDB();
if($connexio->query($sql))
{
  disconnectDB($connexio);
  header("Location: subjectSpec.php?code=$subjectCode&name=$subjectName");
}
else{
  disconnectDB($connexio);
  echo "Uh oh...";
  echo "<br>".$sql;
}

*/


if (isset($_POST['newEnt'])){
  $_SESSION["userName"]="Kiwi";
  $_SESSION["userId"]="1";

  header("Location: main.php");
}
elseif (isset($_POST['signIn'])) {
  header("Location: index.php?msg=2");
}


/*
$sql="SELECT * FROM user WHERE email='".$uName."' AND password='".$uPass."'";
if($result = mysqli_query($connexio, $sql))
{
  $rowcount=mysqli_num_rows($result);
  if($rowcount!=1){
    header("Location: index.php?msg=1");
  }
  else{
    $row = mysqli_fetch_assoc($result);
    $_SESSION["usu"]=$row['first_name'];
    $_SESSION["idUsu"]=$row['id'];
    header("Location: main.php");
  }
}
*/



?>
