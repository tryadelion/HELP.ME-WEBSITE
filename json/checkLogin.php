<?php

//checkLogin.php?username=joanPlan&pass=grabAtowel42

include("../fn.php");

// array for JSON response
$response = array();


if (isset($_GET['username']) && isset($_GET['pass'])) {

  $email = $_GET['username'];
  $password = md5($_GET['pass']);

  $con=connectDB();

  $query = "SELECT * FROM access_data WHERE username = '".$email."' AND pass = '".$password."'";
  $query_exec = mysqli_query($con,$query);
  $rows = mysqli_num_rows($query_exec);
  //echo $rows;
  if($rows != 0) {

    $response["success"] = true;
    $row = mysqli_fetch_assoc($query_exec);
    $response["message"] = $row['id'];

    // echoing JSON response
    echo json_encode($response);
  }else{
    $response["success"] = false;
    $response["message"] = $query;

    // echoing JSON response
    echo json_encode($response);
  }

}
else {
  $response["success"] = false;
  $response["message"] = "Something is missing";

  echo json_encode($response);
}
?>
