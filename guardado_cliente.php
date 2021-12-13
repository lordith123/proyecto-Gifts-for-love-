<?php
include ('conexion.php');
$vnombres=$_POST['Nombre'];
$vcontraseña=$_POST['contraseña'];
$vtipo_usuario=$_POST['tipo_usuario'];

$conexionf=conectar_bd('localhost', 'root', '', 'proyecto_bd' );
$resultado=consulta($conexionf,"insert into usuario(Nombre,contraseña,tipo_usuario)
values('{$vnombres}','{$vcontraseña}','{$vtipo_usuario}')");

if($resultado);
{
    echo"guardado exitoso";
}
?>
