<?php

//app_insertUser.php

include("fn.php");

// array for JSON response
$response = array();


if (isset($_GET['email'])) {

  $email = $_GET['email'];

  $con=connectDB();
//$query = "SELECT * FROM access_data WHERE username = '".$email."' AND password = '".$password."'";
  $query = "select * from access_data where username = '".$email."'";
  $query_exec = mysqli_query($con,$query);
  $rows = mysqli_num_rows($query_exec);
  //echo $rows;
  if($rows == 0) {

    // check for required fields
    if (isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['sex']) && isset($_GET['age']) && isset($_GET['pass']) && isset($_GET['username'])) {

        $name = $_GET['name'];
        $surname = $_GET['surname'];
        $sex = $_GET['sex'];
        $age = $_GET['age'];
        $username = $_GET['username'];
        $pass = md5($_GET['pass']);

        $sql = "insert into access_data (username, pass, type) values ('".$username."', '".$pass."', 0)";

        $res = mysqli_query($con,$sql);

        // check if row inserted or not
        if ($res) {
            disconnectDB($connexio);
            // successfully inserted into database

            $query = "SELECT MAX(id) FROM access_data";
            $query_exec = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($query_exec);

            $sql2 = "insert into user_data (name, surname, sex, age, id_access, email) values ('".$name."', '".$surname."', '.$sex.', '.$age.', '.$row['id'].', '".$email."')";
            $con=connectDB();
            $res2 = mysqli_query($con,$sql2);
            if ($res2) {
              disconnectDB($connexio);
              $response["success"] = true;
              $response["message"] = "User successfully created.";
            }

            // echoing JSON response
            echo json_encode($response);
        } else {
            // failed to insert row
            $response["success"] = false;
            $response["message"] = $sql;

            // echoing JSON response
            echo json_encode($response);
        }
    } else {
        // required field is missing
        $response["success"] = false;
        $response["message"] = "Required field(s) is missing";

        // echoing JSON response
        echo json_encode($response);
    }
  }
  else {
    $response["success"] = false;
    $response["message"] = "User already exists";

    echo json_encode($response);
  }
}
else {
  $response["success"] = false;
  $response["message"] = "Nope";

  echo json_encode($response);
}
?>
