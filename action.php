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

$connexio=connectDB();

//$uPass=sha1($uPass);





$sql="INSERT INTO access_data (id,username,pass,type) VALUES(0,'".$uName."','".$uPass."',1)";
echo $sql;
/*
$subjectCode=$_GET['code'];
$subjectName=$_GET['name'];

$connexio=connectDB();

*/

if($connexio->query($sql))
{
  disconnectDB($connexio);
  $connexio=connectDB();
  $sql="SELECT max(id) FROM access_data";
  if($result = mysqli_query($connexio, $sql))
  {
    $rowcount=mysqli_num_rows($result);
    if($rowcount!=1){
      header("Location: index.php?msg=1");
    }
    else{
      $sql="INSERT INTO entity_data (id,name,id_access,address,email,telephone,fax,location) VALUES(0,'".$eName."',".mysqli_fetch_row($result)[0].",'".$street."','".$mail."','".$phone."','".$fax."','')";
      echo $sql;
      if($connexio->query($sql))
      {
        disconnectDB($connexio);
        echo "ok";
        header("Location: index.php");
      }else{
        echo "ko";
      }
    }
  }
}
else{
  disconnectDB($connexio);
  echo "Uh oh...";
  echo "<br>".$sql;
}


?>
