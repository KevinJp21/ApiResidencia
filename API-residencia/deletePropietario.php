<?php

//Obligatorio
header('Access-Control-Allow-Origin: *'); //aqui se ponen las restricciones de las direcciones que pueden ingresar (en este caso, todas)
header('Access-Control-Allow-Headers: Origin, X-Requestes-Whit, Content-Type, Accept');
header("Content-Type: application/json; charset=UTF-8");
header('Content-Type: application/json');
header("Access-Control-Allow-Headers", "Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, OPTIONS"); //metodos que vamos a poder usar


$json=file_get_contents('php://input');//captura el parametro en json {'id':1}
$params=json_decode($json);//paramteros
require('conexion.php');

$registros['codigo'] = -1;
$registros['mensaje'] = 'No se pudo eliminar';

$method = $_SERVER['REQUEST_METHOD'];

if($method != 'DELETE'){
    $registros['mensaje'] = 'Error - No se permite el acceso por este metodo...';
    echo json_encode($registros);
    exit(1);
}
if($params){
    $id = $params ->id; // aqui elimina el id que le mande
    $sql = "delete from propietarios where id =".$id;
}

$result=$mysqli ->  query($sql);
if($mysqli -> affected_rows >0) //verifica si afecto algun registro
{
    $registros['codigo'] = 'OK';
    $registros['mensaje'] = 'Registro eliminado';
}

echo json_encode($registros);

?>