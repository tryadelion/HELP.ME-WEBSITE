<?php

/***************
  Main Template
***************/
function capcapST(){

header('Content-Type: text/html; charset=utf-8');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link rel="icon" type="image/png" href="http://example.com/logo.png" />
  <title>HELP.ME</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <script src="js/Chart.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body class="grey darken-3">

<?php
}

function navBAR($uName){
?>
  <header>
    <!-- NAV BAR -->
    <nav class="light-green" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">HELP.ME</a>
        <ul class="right hide-on-med-and-down">
          <li>Welcome <em><?=$uName?></em></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li>Welcome <em><?=$uName?></em></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>

  </header>
<?php
}

function capcapEND()
{
?>
  <div id="main">
    <div class="wrapper">
      <div class="row" style="margin-bottom:0;">
<?php
}

function leftNAV($which){

$normal = array("", "", "", "", "");
$active =  "class='grey lighten-2'";
$normal[$which] = $active;

  ?>
<!-- START LEFT NAV -->
  <div class="col s2" style="padding-left:0;">
    <ul class="side-nav" style="padding-bottom:0;position: inherit;">
      <li <?=$normal[0]?>><a href="index.php"><i class="material-icons">map</i>Maps</a></li>
      <li <?=$normal[1]?>><a href="states.php"><i class="material-icons">assessment</i>Stadistics</a></li>
      <li <?=$normal[2]?>><a href="cases.php"><i class="material-icons">speaker_notes</i>Your cases</a></li>
      <!--<li <?=$normal[3]?>><a href="#"><i class="material-icons">supervisor_account</i>Mediator</a></li>-->
      <!--<li <?=$normal[3]?>><a href="#"><i class="material-icons">settings</i>Settings</a></li>-->
      <li <?=$normal[4]?>><a href="logout.php"><i class="material-icons">vpn_key</i>Log Out</a></li>
    </ul>
  </div>
  <!-- END LEFT NAV -->
  <?php
}

function contentStart(){
?>
<!-- START CONTENT -->
<div class="col s10" style="padding-top:1%; padding-left:2%;">
<?php
}


function contentEnd(){
?>
</div>
<!-- END CONTENT -->
<?php
}


function footer($fixed){
?>
    </div>
    </div>
  </div>

  <footer class="page-footer light-green right-align" <?=$fixed?>>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="white-text" href="#">&copy SleepyDev</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script>
    $('.datepicker').pickadate({
      firstDay: true,
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 60 // Creates a dropdown of 15 years to control year
    });

    $input = $('.datepicker').pickadate();

    // Use the picker object directly.
    window.picker = $input.pickadate('picker');

    $(document).ready(function(){
      $('#optionButtons').pushpin({ offset: 210 });
    });

  </script>


</body>
</html>
<?php
}

/********
  Cards
*********/
function blueCards($titol, $text, $list,$add){
?>
        <div class="col s3">
          <div class="card blue hoverable">
            <div class="card-content white-text">
              <span class="card-title"><?=$titol?></span>
              <p><?=$text?></p>
            </div>
            <div class="card-action" style="text-align:right;">
              <a href="<?=$list?>" class="white-text" title="List Scheme Rows"><i class="material-icons">list</i></a>
              <a href="<?=$add?>" class="white-text" title="Add Scheme Rows"><i class="material-icons">add</i></a>
            </div>
          </div>
        </div>
<?php
}
//titol, nom cognoms, data incidència , desc,
function caseFile($titol, $data, $noms, $desc, $x, $y){
?>
  <div class="card col s5"style="margin-right: 1%" >
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator"  style="width: 390px; height: 250px;margin-left: 18px;" src="http://maps.google.com/maps/api/staticmap?center=<?=$x?>,<?=$y?>&zoom=17&size=400x300&sensor=false&markers=color:green%7C<?=$x?>,<?=$y?>"/>
    </div>
     <div class="card-content">
       <span class="card-title activator grey-text text-darken-4"><?=$titol?><br/><?=$data?><i class="material-icons right">more_vert</i></span>
       <p><?=$noms?> | <a href="#">Details</a></p>
     </div>
     <div class="card-reveal">
       <span class="card-title grey-text text-darken-4"><?=$titol?><i class="material-icons right">close</i></span>
        <p><?=$desc?><br/>
        </p>
     </div>
   </div>

 <?php
}

?>
