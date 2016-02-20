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

leftNAV(1);

contentStart();
?>
<div class="row" style="padding-top: 5%;">
	<div class="center-align white-text col s4">
			<div id="canvas-holder">
					<canvas id="chart-area"  width="300" height="300" style="float:left; margin-right:10px;"/>
				</div>
				<h4>BY CITIES</h4>
	</div>

	<div class="center-align white-text col s4">
			<div id="canvas-holder" >

					<canvas id="chart-area2"  width="300" height="300" style="float:left; margin-right:10px;"/>

				</div>
				<h4>BY GENRE</h4>
				<!--<button style="width:100%;height:80px;color:black;">BUTTON</button>-->
				<a class="waves-effect waves-light btn-large light-green"><div class="btn-bigger">More</div></a>
	</div>

	<div class="center-align white-text col s4">
			<div id="canvas-holder" >

					<canvas id="chart-area3"  width="300" height="300" style="float:left; margin-right:10px;"/>

				</div>
				<h4>BY AGE</h4>
	</div>
</div>
<?php
contentEnd();
?>

<script>

var pieData = [
		{
			value: 300,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Red"
		},
		{
			value: 50,
			color: "#46BFBD",
			highlight: "#5AD3D1",
			label: "Green"
		},
		{
			value: 100,
			color: "#FDB45C",
			highlight: "#FFC870",
			label: "Yellow"
		},
		{
			value: 40,
			color: "#949FB1",
			highlight: "#A8B3C5",
			label: "Grey"
		},
		{
			value: 120,
			color: "#4D5360",
			highlight: "#616774",
			label: "Dark Grey"
		}

	];



	var pieData2 = [
			{
				value: 300,
				color:"#F7464A",
				highlight: "#FF5A5E",
				label: "Red"
			},
			{
				value: 50,
				color: "#46BFBD",
				highlight: "#5AD3D1",
				label: "Green"
			},
			{
				value: 100,
				color: "#FDB45C",
				highlight: "#FFC870",
				label: "Yellow"
			},
			{
				value: 40,
				color: "#949FB1",
				highlight: "#A8B3C5",
				label: "Grey"
			},
			{
				value: 120,
				color: "#4D5360",
				highlight: "#616774",
				label: "Dark Grey"
			}

		];

		var pieData3 = [
				{
					value: 300,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Red"
				},
				{
					value: 50,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Green"
				},
				{
					value: 100,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Yellow"
				},
				{
					value: 40,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Grey"
				},
				{
					value: 120,
					color: "#4D5360",
					highlight: "#616774",
					label: "Dark Grey"
				}

			];


		window.onload = function(){
			var ctx = document.getElementById("chart-area").getContext("2d");
			window.myPie = new Chart(ctx).Pie(pieData);

			var ctx2 = document.getElementById("chart-area2").getContext("2d");
			window.myPie2 = new Chart(ctx2).Pie(pieData2);

			var ctx3 = document.getElementById("chart-area3").getContext("2d");
			window.myPie3 = new Chart(ctx3).Pie(pieData3);
		};



</script>

<?php


footer('style="position:fixed; bottom:0; width:100%;"');

?>
