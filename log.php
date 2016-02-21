<?php
include("fn.php");
session_start();

$uName=$_POST['stu_uName'];
$uPass=$_POST['stu_uPass'];

$connexio=connectDB();

$uPass=md5($uPass);


if (isset($_POST['signUp'])){
  header("Location: choseSignup.php");
}
elseif (isset($_POST['signIn'])) {
  $sql="SELECT * FROM access_data WHERE username='".$uName."' AND pass='".$uPass."'";
  if($result = mysqli_query($connexio, $sql))
  {
    $rowcount=mysqli_num_rows($result);
    if($rowcount!=1){
      //echo $sql;
      disconnectDB($connexio);
      header("Location: index.php?msg=1");
    }
    else{
      $row = mysqli_fetch_assoc($result);
      $_SESSION["userName"]=$row['username'];
      $_SESSION["userId"]=$row['id'];
      disconnectDB($connexio);
      header("Location: main.php");
    }
  }
}
else{
  disconnectDB($connexio);
  header("Location: index.php?msg=1");
  //echo $sql;
}

?>
