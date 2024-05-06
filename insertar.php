<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    require_once 'conexion.php';
    $nombre  = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $pass = $_POST['clave'];

    $query = "INSERT INTO usuarios(nombre, email, telefono, clave) VALUES('".$nombre."','".$email."','".$telefono."','".$pass."')";
    $resultado = $mysql->query($query);
    if($resultado){
        echo "El usuario se insertó de forma exitosa";
    }else{
        echo "Error al insertar el usuario";
    }


}