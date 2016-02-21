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
<div style="color:white;">
    <h4>Cases denounced on our platform</h4>
</div>

<div class="row" style="padding-top: 5%;">
	<div class="center-align white-text col s4">
			<div id="canvas-holder">
					<canvas id="chart-area"  width="300" height="300" style="float:left; margin-right:10px;"/>
				</div>
				<p><h4>BY CITIES</h4></p>
	</div>

	<div class="center-align white-text col s4">
			    <div id="canvas-holder" >

					<canvas id="chart-area2"  width="300" height="300" style="float:left; margin-right:10px;"/>

				</div>
				<p></p><h4>BY GENRE</h4></p>
				<!--<button style="width:100%;height:80px;color:black;">BUTTON</button>-->
				<!--<a class="waves-effect waves-light btn-large light-green" style="margin-top: 25%;" href="Filters.php"><div class="btn-bigger">More</div></a>-->
	</div>

	<div class="center-align white-text col s4">
			<div id="canvas-holder" >

					<canvas id="chart-area3"  width="300" height="300" style="float:left; margin-right:10px;"/>

				</div>
				<p><h4>BY AGE</h4></p>
	</div>
</div>
<?php
contentEnd();
?>

<script>

var pieData2 = [
    <?php

    function random_color_part() {
        return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
    }

    function random_color() {
        return random_color_part() . random_color_part() . random_color_part();
    }
    $sql = "select ud.sex as sex from user_data ud,casefile cs where cs.id_user=ud.id_access";
    $connexio=connectDB();
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
            $men = 0;
            $women = 0;
            while ($fila=mysqli_fetch_row($result))
            {
                if($fila[0]==0){
                    $men++;
                }else{
                    $women++;
                }

            }
            $str = "{
                        value: '".$men."',
                        color:'#".random_color()."',
                        highlight: '#".random_color()."',
                        label: 'Men'
                    },";
            echo $str;
            $str = "{
                        value: '".$women."',
                        color:'#".random_color()."',
                        highlight: '#".random_color()."',
                        label: 'Women'
                    }";
            echo $str;
        }
    }
    disconnectDB($connexio);
    ?>
];



	var pieData = [
		<?php
        $sql = "select Location, count(*) as c FROM casefile GROUP BY Location";
        $connexio=connectDB();
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
                    if($i != 0){
                        echo ",";
                    }
                    $i++;

                    $str = "{
                        value: '".$fila[1]."',
                        color:'#".random_color()."',
                        highlight: '#".random_color()."',
                        label: '".$fila[0]."'
                    }";
                    echo $str;
                }

            }
        }
        disconnectDB($connexio);
		?>
		];

		var pieData3 = [
            <?php
                $sql = "select ud.age as age from user_data ud,casefile cs where cs.id_user=ud.id_access";
                $connexio=connectDB();
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
                        $childs = 0;
                        $preteens = 0;
                        $youngs = 0;
                        $universitaries = 0;
                        $older = 0;
                        while ($fila=mysqli_fetch_row($result))
                        {
                            $age = $fila[0];
                            if($age<12){
                                $childs++;
                            }else if($age < 14){
                                $preteens++;
                            }else if($age < 18){
                                $youngs++;
                            }else if($age < 24){
                                $universitaries++;
                            }else{
                                $older++;
                            }

                        }
                        $str = "{
                        value: '".$childs."',
                        color:'#".random_color()."',
                        highlight: '#".random_color()."',
                        label: 'Younger than 12'
                    },";
                        echo $str;
                        $str = "{
                        value: '".$preteens."',
                        color:'#".random_color()."',
                        highlight: '#".random_color()."',
                        label: 'Between 12 and 14'
                    },";
                        echo $str;
                        $str = "{
                        value: '".$youngs."',
                        color:'#".random_color()."',
                        highlight: '#".random_color()."',
                        label: 'Between 14 and 18'
                    },";
                        echo $str;
                        $str = "{
                        value: '".$universitaries."',
                        color:'#".random_color()."',
                        highlight: '#".random_color()."',
                        label: 'Between 18 and 24'
                    },";
                        echo $str;
                        $str = "{
                        value: '".$older."',
                        color:'#".random_color()."',
                        highlight: '#".random_color()."',
                        label: 'Older than 24'
                    }";
                        echo $str;
                    }
                }
                disconnectDB($connexio);
                ?>
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


footer('');

?>
