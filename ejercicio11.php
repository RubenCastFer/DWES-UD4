<?php
    function crearConexion($servidor,$baseDatos,$usuario,$pass){
        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
            return $conexion;
        } catch (PDOException $e) {
            return false;
        }
    }

    function crearTurista($conexion, $nombre, $apellido1, $apellido2, $direccion, $telefono){
        try {           
            $consulta =$conexion->prepare("INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono) VALUES (?,?,?,?,?)"); 
            $consulta->bindParam(1,$nombre);
            $consulta->bindParam(2,$apellido1);
            $consulta->bindParam(3,$apellido2);
            $consulta->bindParam(4,$direccion);
            $consulta->bindParam(5,$telefono);
            $consulta->execute();
            $last_id = $consulta->lastInsertId();
            return $last_id;
        } catch (PDOException $e) {
            return false;
        }
    }

    function extraeTurista($conexion, $id){
        try {           
            $consulta =$conexion->prepare("SELECT * FROM turista WHERE id=:id"); 
            $consulta->bindParam(":id",$id);
            $consulta->execute(); 
            return $consulta->fetch();
        } catch (PDOException $e) {
            return false;
        }
    }

?>