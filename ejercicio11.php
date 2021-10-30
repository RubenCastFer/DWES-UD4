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
            return $conexion->lastInsertId();
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

    function extraeTuristas($conexion){
        try {    
            /*$sql="SELECT * FROM turista"; 
            return $conexion->query($sql);*/
            $consulta =$conexion->prepare("SELECT * FROM turista"); 
            $consulta->execute(); 
            $array = [];
            while($fila = $consulta->fetch(PDO::FETCH_BOTH)){
                $array[]=$fila;
            }
            return $array;
            
        } catch (PDOException $e) {
            return false;
        }
    }

    function actualizaTurista($conexion, $id, $direccion, $telefono){
        try{
            $consulta =$conexion->prepare("UPDATE turista SET direccion=:direccion, telefono=:telefono WHERE id=:id"); 
            $parametros = array(":direccion"=>$direccion, ":telefono"=>$telefono, ":id"=>$id);
            return $consulta->execute($parametros);
        } catch(PDOException $e){
            return false;
        } 
    }

    function eliminaTurista($conexion, $id){
        try{
            $consulta =$conexion->prepare("DELETE FROM turista WHERE id=:id"); 
            $parametros = array(":id"=>$id);
            return $consulta->execute($parametros);
        } catch(PDOException $e){
            return false;
        } 
    }

?>