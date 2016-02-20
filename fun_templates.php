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
  <title>HELP.ME</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey darken-3">

<?php
}

function navBAR(){
?>
  <header>
    <!-- NAV BAR -->
    <nav class="light-green" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">HELP.ME</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php"><i class="material-icons">notifications_none</i></a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="index.php"><i class="material-icons">notifications_none</i></a></li>
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

function leftNAV(){
  ?>
<!-- START LEFT NAV -->
  <div class="col s2" style="padding-left:0;">
    <ul class="side-nav" style="padding-bottom:0;position: inherit;">
      <li><a href="index.php"><i class="material-icons">map</i>Maps</a></li>
      <li><a href="#"><i class="material-icons">assessment</i>Stadistics</a></li>
      <li><a href="#"><i class="material-icons">speaker_notes</i>Your cases</a></li>
      <li><a href="#"><i class="material-icons">settings</i>Settings</a></li>
      <li><a href="#"><i class="material-icons">vpn_key</i>Log Out</a></li>
      <li><a href="#">&nbsp;</a></li>
      <li><a href="#">&nbsp;</a></li>
      <li><a href="#">&nbsp;</a></li>
    </ul>
  </div>
  <!-- END LEFT NAV -->
  <?php
}

function contentStart(){
?>
<!-- START CONTENT -->
<div class="col s10" style="padding-left:100px; padding-top:20px;">
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
/***************
  Cards OLD
***************/

function redCards($titol, $text, $enllac,$enllacText){
?>
        <div class="col s3">
          <div class="card materialize-red darken-2 hoverable">
            <div class="card-content white-text">
              <span class="card-title"><?=$titol?></span>
              <p><?=$text?></p>
            </div>
            <div class="card-action" style="text-align:right;">
              <a href="<?=$enllac?>" class="white-text"><?=$enllacText?></a>
            </div>
          </div>
        </div>
<?php
}



function SubjectsCards($color, $subject, $enllac){
?>
        <div class="col s3">
          <a href="<?=$enllac?>" class="white-text">
            <div class="card <?=$color?> hoverable">
              <div class="card-content white-text">
                <span class="card-title"><?=$subject?></span>
              </div>
            </div>
          </a>
        </div>
<?php
}

function SubjectsCardsAlert($color, $subject, $enllac){
?>

        <div class="col s3">
          <a href="<?=$enllac?>" class="white-text">
            <div class="card <?=$color?> hoverable">
              <div class="card-content white-text">
                <span class="card-title"><?=$subject?><i class="material-icons right">notifications</i></span>
              </div>
            </div>
          </a>
        </div>

<?php
}

/***************
  Collections
***************/

function stuMiniCard($nom, $dni, $id){
?>
  <ul class="collection col s3 z-depth-1" style="">
    <li class="collection-item avatar">
      <img src="../../img/avatarNo.png" alt="" class="circle">
      <span class="title"><?=$nom?></span>
      <p><?=$dni?><br>
        <a href="editStudent.php?id=<?=$id?>">Edit</a>
      </p>
      <a href="<?=$id?>" class="secondary-content"><i class="material-icons">delete</i></a>
    </li>
  </ul>
<?php
}

function stuCards($nom, $dni, $id){
?>
        <div class="col s2">
          <div class="card small">
            <div class="card-image">
              <img src="../../img/avatar.png" style="opacity: 0.25;">
              <span class="card-title black-text"><?=$nom?></span>
            </div>
            <div class="card-content">
              <p><?=$dni?></p>
            </div>
            <div class="card-action">
              <a href="editStudent.php?id=<?=$id?>" class="materialize-red-text text-darken-2">Editar</a><a href="<?=$id?>" class="secondary-content materialize-red-text text-darken-2"><i class="material-icons">delete</i></a>
            </div>
          </div>
        </div>
<?php
}

function examMiniCard($date, $course, $note, $id){
?>
  <ul class="collection col s3 z-depth-1" style="">
    <li class="collection-item avatar">
      <i class="material-icons circle">insert_chart</i>
      <span class="title"><?=date("d/m/Y", strtotime($date));?></span>
      <p><!--<?=$course?> - --><?=$note?><br>
        <a href="editExam.php?id=<?=$id?>">Editar</a>
      </p>
      <a href="<?=$id?>" class="secondary-content"><i class="material-icons">delete</i></a>
    </li>
  </ul>
<?php
}

function examCards($date, $course, $note, $id){
?>
        <div class="col s2">
          <div class="card small">
            <div class="card-image">
              <span class="card-title black-text"><?=$date?></span>
            </div>
            <div class="card-content">
              <p><?=$course?> - <?=$note?></p>
            </div>
            <div class="card-action">
              <a href="editExam.php?id=<?=$id?>" class="materialize-red-text text-darken-2">Editar</a><a href="<?=$id?>" class="secondary-content materialize-red-text text-darken-2"><i class="material-icons">delete</i></a>
            </div>
          </div>
        </div>
<?php
}


/***************
     PINUPS
***************/
function subjectsRightMenu($code, $name)
{
?>
<!-- MENU DE LA ESQUERRA -->
</ul>
</div>
<div id="optionButtons" style="right: 95px;">
  <ul class="section table-of-contents">
    <li><a href="newExam.php?code=<?=$code?>&name=<?=$name?>">Afegir Examen</a></li>
    <li><a href="subjectChart.php?code=<?=$code?>&name=<?=$name?>">Gràfic</a></li>
  </ul>
</div>
<?php
}

?>
