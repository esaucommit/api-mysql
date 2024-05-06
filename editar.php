<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once "conexion.php";
    $id  = $_POST["id"];
    $nombre  = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $pass = $_POST['clave'];

    $query  =  "UPDATE usuarios SET nombre  = '".$nombre."', email ='".$email."', telefono='".$telefono."', clave= '".$pass."' WHERE id = '".$id."'";
    $resultado = $mysql->query($query);

    if($mysql->affected_rows>0 && $resultado == true){      
        echo "El usuario se editó exitosamente";
    }else{
        echo "Error al editar usuario";
    }
$mysql->close();

}