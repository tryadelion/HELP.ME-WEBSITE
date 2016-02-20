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

	 var myLatlng = new google.maps.LatLng(41.3905404, 2.1130419);
	 var marker = new google.maps.Marker({
    position: myLatlng,
    title:"Help.Me"
		});

		// To add the marker to the map, call setMap();
		marker.setMap(map);

</script>
<?php
contentEnd();

//footer('style="position:fixed; bottom:0; width:100%;"');
footer("");
?>
