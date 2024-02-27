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
$registros['mensaje'] = 'No hay registros por mostrar';

$method = $_SERVER['REQUEST_METHOD'];

if($method != 'GET'){
    $registros['mensaje'] = 'Error - No se permite el acceso por este metodo...';
    echo json_encode($registros);
    exit(1);
}

$sql = "select * from propietarios order by id"; //instruccion que va a traer
if($params){
    $id = $params ->id; //si hay parametros dame el ID del parametro
    $sql = "select * from propietarios where id=".$id;
}

$result=$mysqli ->  query($sql);
if(mysqli_num_rows($result)>0)//verifica si trajo algun registro
{
    $registros=mysqli_fetch_all($result,MYSQLI_ASSOC); //es lo mismo que regsitro['id']=1, regsitro['nombres']='pedro'
}
echo json_encode($registros); // {'id':1,'nombres':'pedro'}

?>