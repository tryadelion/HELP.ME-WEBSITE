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
}

?>
