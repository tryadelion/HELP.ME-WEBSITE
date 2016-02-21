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

capcapST();
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php
navBar($uName);
capcapEND();

leftNAV(0);

contentStart();
?>
<div id="map" class="col s12" style="height:550px;"></div>

<script type="text/javascript">
	 var myOptions = {
			zoom: 14,
			center: new google.maps.LatLng(41.3905404, 2.1130419),
			mapTypeId: google.maps.MapTypeId.ROADMAP
	 };

	 var map = new google.maps.Map(document.getElementById("map"), myOptions);
<?php
$connexio=connectDB();
$sql="SELECT title,coordX,coordY FROM casefile";
if($result = mysqli_query($connexio, $sql))
{
    $rowcount=mysqli_num_rows($result);
    if($rowcount<1){
        echo "no results";
        //header("Location: main.php?msg=1");
    }
    else{
        $str = "";
        $i = 0;
        while ($fila=mysqli_fetch_row($result))
        {
            $i++;
            $str = "
             var myLatlng".$i." = new google.maps.LatLng(".$fila[1].",".$fila[2].");
             var marker".$i." = new google.maps.Marker({
            position: myLatlng".$i.",
            title:\"".$fila[0]."\"
                });

                // To add the marker to the map, call setMap();
                marker".$i.".setMap(map);";
            echo $str;
        }

    }

    disconnectDB($connexio);
}
?>

</script>
<?php
contentEnd();

//footer('style="position:fixed; bottom:0; width:100%;"');
footer("");
?>
