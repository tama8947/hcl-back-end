<?php
/**
 * Author> Orlando Tamayo Llanos
 * Date> 12Sep2017
 *
 */

//Bloque que confirma que se debe haber pasnado primero por el enrrutador
if (!defined('CONSGBL')) die ('No tiene permisos sobre este directorio');


$app->get ('/',
  function() use ($app) {
	   echo 'Slim PHP es un micro framework para el desarrollo agil de Api Rest... Enjoy';
});

$app->get ('/pacientes',
  function() use ($app) {
    try {
      $getConnection = connect();
      $query = $getConnection->query('SELECT * FROM hcl_tbl_pacientes ORDER BY 1 DESC');
      $getConnection =  null;
      $app->response->headers->set('Content-type', 'application/json');
      $app->response->status(200);
      $datosRes = $query->fetchall();
      $app->response->body(json_encode($datosRes));
    } catch (PDOException $e) {
      echo 'Error -> ' . $e->getMessage();
    }
});
