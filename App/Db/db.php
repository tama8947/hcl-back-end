<?php
//Bloque que confirma que se debe haber pasando primero por el enrrutador antes de acceder a la BD
if (!defined('CONSGBL')) die ('No tiene permisos sobre este directorio');

//Funcion encargada de organizar la conexion a la Base de Datos
function connect() {
  //$connection='';
  try {
		//Se definen los parametros del usuario y contraseña de la Base de Datos
    //Configuracion local
    $user_db = 'root';
    $pass_db = '';
    $db_name = 'ADMHCL';
    //Configuracion server
		//$user_db = 'titandes_apis'; $pass_db = 'user.apis';//server

		$connection = new PDO('mysql:host=localhost;dbname='.$db_name, $user_db, $pass_db);//local
		//$connection = new PDO('mysql:host=localhost;dbname=titandes_apirestful01', $user_db, $pass_db);//server

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e) {
		echo 'Error -> ' . $e->getMessage();
	}
	return $connection;
}
