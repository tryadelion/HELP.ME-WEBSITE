<?php
session_start();
include("fn.php");

if(isset($_SESSION['userName']))
{
	header("Location: main.php");
}


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

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
<?php
if(isset($_GET["msg"]))
{
	if($_GET["msg"]==1)
	?>
	<script type="text/javascript">
		Materialize.toast('Usuari i/o contrasenya erronis!', 4000);
	</script>

<?php
}
?>

</head>
<body class="grey darken-4">


<div id="signup-page" class="row">
  <div class="col s12 z-depth-4 card-panel grey darken-3">
        <form action="action.php" method="POST">
      	  <div class="row" style="margin-top:10px;">
      	    <div class="input-field col s6">
      	      <input id="uName" name="uName" type="text" class="validate" required>
      	      <label for="uName">User Name</label>
      	    </div>
						<div class="input-field col s6">
              <input id="uPass" name="uPass" type="password" class="validate" required>
      	      <label for="uPass">Password</label>
      	    </div>
          </div>
					<div class="row">
						<div class="input-field col s6">
							<input id="eName" name="eName" type="text" class="validate" required>
							<label for="eName">Entity Name</label>
						</div>
						<div class="input-field col s6">
							<input id="street" name="street" type="text" class="validate" required>
							<label for="street">Address</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="mail" name="mail" type="email" class="validate" required>
							<label for="mail">Email</label>
						</div>
						<div class="input-field col s6">
							<input id="phone" name="phone" type="tel" class="validate" required>
							<label for="phone">Telephone</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="fax" name="fax" type="text" class="validate" required>
							<label for="fax">Fax</label>
						</div>
						<div class="input-field col s6">
							<input id="location" name="location" type="text" class="validate" required>
							<label for="location">Location</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12" style="padding-left:23%;">
						<button class="btn waves-effect waves-light light-green" type="submit" name="newEnt">Send
							<i class="material-icons right">send</i>
						</button>
						</div>
					</div>
      	</form>

  </div>
</div>

</body>
</html>
