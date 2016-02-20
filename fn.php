<?php

function connectDB(){

  /* LOCAL HOST */
  $host="localhost"; //servidor BBDD
  $user="root"; //nom usuari
  $pass=""; //contrasenya
  $BD="jsonize"; //nom de la BBDD
  $BD="helpme"; //nom de la BBDD


  /* HOST */

  $host="mysql.hostytec.es"; //servidor BBDD
  $host="mysql.hostinger.es"; //servidor BBDD
  $user="u979048689_adm"; //nom usuari
  $pass="help42"; //contrasenya
  $BD="u979048689_help"; //nom de la BBDD



  //$conexion = mysqli_connect("mysql.smartfreehosting.net", "u707619475_json", "jsonize", "u707619475_json");
  $conexion = mysqli_connect($host, $user, $pass, $BD);
  if($conexion){

  }else{
    echo 'Ha sucedido un error inesperado en la conexión de la base de datos';
  }
  return $conexion;
}

function disconnectDB($conexion){

    $close = mysqli_close($conexion);

    if($close){

    }else{
        echo 'Ha sucedido un error inesperado en la desconexión de la base de datos';
    }

    return $close;
}

function printJson($array)
{
	echo json_encode($array);
}


?>
