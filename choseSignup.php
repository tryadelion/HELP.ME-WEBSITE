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
	if($_GET["msg"]==1){
		?>
			<script type="text/javascript">
				Materialize.toast('Username and/or password wrong!', 4000);
			</script>
		<?php
	}elseif($_GET["msg"]==2){
		?>
			<script type="text/javascript">
				Materialize.toast('Register not completed!', 4000);
			</script>
		<?php
	}

}
?>

</head>
<body class="grey darken-4">


<div id="choose-login-page" class="row">
  <div class="col s12 z-depth-4 card-panel grey darken-3">

        <form action="signup.php" method="POST">
      	  <div class="row">
      	    <div class="input-field col s6">
      				<button class="btn waves-effect waves-light light-green darken-3" style="font-size:14px;" type="submit" name="signUp">Entity</button>
      	    </div>
						<div class="input-field col s6">
							<button class="btn waves-effect waves-light light-green" style="font-size:14px;" type="submit" name="signIn">Person</button>
						</div>
      	  </div>
      	</form>

  </div>
</div>

</body>
</html>
