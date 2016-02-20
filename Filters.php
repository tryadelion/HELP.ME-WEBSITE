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


<div style="float:left;width:50%">
  <div style="text-align:center;color:white;">
    <h2>By zone </h2>
</div>
<form style="text-align:center;color:white;">
 <p style="text-align:left;margin-left:250px;color:white;">
      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">Cities</label>
    </p>
    <p style="text-align:left;margin-left:250px;color:white;">
          <input type="checkbox" class="filled-in" id="filled-in-box2" checked="checked" />
          <label for="filled-in-box2">Regions</label>
        </p>


                      <a class="waves-effect waves-light btn-large"><div class="btn-bigger">Find by zone</div></a>


</form>
</div>
<div style="float:left;width:50%">
  <div style="text-align:center;color:white;">
    <h2>By population </h2>
</div>
<form style="text-align:center;color:white;">
 <p style="text-align:left;margin-left:250px;color:white;">
      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">Men</label>
    </p>
    <p style="text-align:left;margin-left:250px;color:white;">
          <input type="checkbox" class="filled-in" id="filled-in-box2" checked="checked" />
          <label for="filled-in-box2">Women</label>
        </p>
        <form style="text-align:center;color:white;">
         <p style="text-align:left;margin-left:250px;color:white;">
              <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
              <label for="filled-in-box">Age 1-12</label>
            </p>
            <p style="text-align:left;margin-left:250px;color:white;">
                  <input type="checkbox" class="filled-in" id="filled-in-box2" checked="checked" />
                  <label for="filled-in-box2">Age 12-16</label>
                </p>
                <form style="text-align:center;color:white;">
                 <p style="text-align:left;margin-left:250px;color:white;">
                      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                      <label for="filled-in-box">Age 16-20</label>
                    </p>
                    <p style="text-align:left;margin-left:250px;color:white;">
                          <input type="checkbox" class="filled-in" id="filled-in-box2" checked="checked" />
                          <label for="filled-in-box2">Age >20</label>
                        </p>
<a class="waves-effect waves-light btn-large"><div class="btn-bigger">Find by population</div></a>



</div>





<?php
contentEnd();

footer('style="position:fixed; bottom:0; width:100%;"');

?>
