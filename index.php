<?php
/**
 * Author> Orlando Tamayo Llanos
 * Date> 12Sep2017
 *
 */
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

//define la constante CONSGBL para verificar que se entro a la clase enrutadora
define('CONSGBL',true);
//Importamos la conexion a la Base de Datos
require 'App/Db/db.php';
//Importamos le Api a usar
require 'App/Api/api.php';

$app->run();
