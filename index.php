<?php
//Incluir archivo de conexion a oracle
include_once "models/conexionORACLE.php";

//funcion que realiza la consulta a DB SQL SERVER
function SQLSERVER(){
	//Incluir archivo de conexion a SQLSERVER
	include_once "models/conexionSQLSERVER.php";
	$sentencia = $base_de_datos->query("select * from usuario");
    $usuarios = $sentencia->fetchAll();

     return $usuarios;
}

    $conex = Conexion::getInstancia();
 	    //Query sql oracle
	$sql = "select * from USER_DOS";

    //sql query execution
	$stid = oci_parse($conex, $sql);
	oci_execute($stid);
	$foo = array();
	while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
	      $foo[]=$row;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>consultas</title>
</head>
<body>
	 <?php
	 //las consultas devuelven array, se recorre segun datos que se quieran mostrar
          $server=SQLSERVER();
          echo "<h2>lista de usuarios</h2>";
          echo "<br>";
          echo "<strong>Nombre:</strong> ".$server[0][0];
          echo "<br>";
          echo "<strong>Apellido:</strong> ".$server[0][1];
          echo "<br>";
          echo "<strong>Identificacion:</strong> ".$server[0][2];
          echo "<br>";
	      echo "<strong>Email:</strong> ".$foo[0][1];
	      echo "<br>";
	      echo "<strong>Localidad:</strong> ".$foo[0][2];
	       ?>
</body>
</html>