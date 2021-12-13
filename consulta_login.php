<?php 
    include('conexion.php');
    session_start();
    $_SESSION['usuario']=$_POST['Nombre'];
    $_SESSION['clave']=$_POST['contraseña'];

    $miconexion=conectar_bd('', 'proyecto_bd');
    $resultado=consulta($miconexion,"select * from usuario where Nombre='{$_SESSION['usuario']}' and contraseña='{$_SESSION['clave']}'");
?>

<?php 

    Dato_almacenado($resultado);

    if($resultado->num_rows>0)
    {
        $fila=$resultado->fetch_object();
        $_SESSION['tipo_usuario']=$fila->tipo_usuario;
        $_SESSION['Nombre']=$fila->Nombre;
        
        //echo "ingreso con exito";
        Header("Location: index.php");
    }
    else
    {
        //echo "usuario o clave invalido";
        Header("Location: /index.php");
    }
    $miconexion->close();

?>

<?php
function Dato_almacenado($dato)
{
    return $dato;
}
?>