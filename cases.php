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

leftNAV(2);

contentStart();
?>

<div="row">
<div class="card col s3"style="margin-right: 1%" >
   <div class="card-image waves-effect waves-block waves-light">
     <img class="activator" src="images/office.jpg">
   </div>
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
     <p><a href="#">This is a link</a></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
     <p>Here is some more information about this product that is only revealed once clicked on.</p>
   </div>
 </div>

 <div class="card col s3"style="margin-right: 1%">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/office.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  <div class="card col s3"style="margin-right: 1%">
     <div class="card-image waves-effect waves-block waves-light">
       <img class="activator" src="images/office.jpg">
     </div>
     <div class="card-content">
       <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
       <p><a href="#">This is a link</a></p>
     </div>
     <div class="card-reveal">
       <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
       <p>Here is some more information about this product that is only revealed once clicked on.</p>
     </div>
   </div>

</div>


<?php
contentEnd();

footer('style="position:fixed; bottom:0; width:100%;"');

?>
