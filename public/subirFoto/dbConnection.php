<?php
$hostname='localhost';
$database='prueba';
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "No se puede conectar a la bd";
}else{
	echo "Si se pudo";
}
?>