<?php

//app_listProjects.php?userId=1


include("../fn.php");

// array for JSON response
$response = array();

if (isset($_GET["userId"])) {

    $userID = $_GET['userId'];

    $con=connectDB();

    $sql = "SELECT id, title, coordX, coordY, location, img, description, assignedMentor, id_user, dataIncident FROM casefile WHERE  id_user=".$userID;
    $query_exec = mysqli_query($con,$sql);
    $rows = mysqli_num_rows($query_exec);

    if($rows!=0)
    {
        while ($obj = mysqli_fetch_object($query_exec)) {

            $projects[] = array('id' => $obj->id,
                           'title' => $obj->title,
                           'coordX' => $obj->coordX,
                           'coordY' => $obj->coordY,
                           'location' => $obj->location,
                           'img' => $obj->img,
                           'description' => $obj->description,
                           'assignedMentor' => $obj->assignedMentor,
                           'id_user' => $obj->id_user,
                           'dataIncident' => $obj->dataIncident,
                );
        }

        echo json_encode($projects);
    }else {
      $projects = array();

      echo json_encode($projects);
    }

} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}

?>
