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
<div id="map" class="col s12" style="height:830px;"></div>

<script type="text/javascript">
	 var myOptions = {
			zoom: 10,
			center: new google.maps.LatLng(41.747991,1.574167),
			mapTypeId: google.maps.MapTypeId.ROADMAP
	 };

	 var map = new google.maps.Map(document.getElementById("map"), myOptions);
     var icon = {
         url: "img/marcador.png", // url
         scaledSize: new google.maps.Size(80, 80), // scaled size
         origin: new google.maps.Point(0,0), // origin
         anchor: new google.maps.Point(13, 27) // anchor
     };
<?php
$connexio=connectDB();
$sql="SELECT title,coordX,coordY,id FROM casefile";
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
            icon:icon,
            title:'".$fila[0]."'
                });
            marker".$i.".addListener('click', function() {
                window.location.href = 'http://help-mii.esy.es/caseSpecs.php?caseId=".$fila[3]."';
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

footer('style="position:fixed; bottom:0; width:100%;"');
//footer(' ');
