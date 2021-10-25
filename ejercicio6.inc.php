<?php
    function creaConexion(){
        @$mysqli = mysqli_connect("localhost","developer","developer","agenciaviajes");
        $error = mysqli_connect_errno();
        if ($error!=null){
            return false;

        }else{
            return $mysqli;
        }
    }

    function creaVuelo($mysqli, $Origen, $Destino, $fecha, $Companya, $ModeloAvion){
        $sql="INSERT INTO `vuelos` (Origen, Destino, fecha, Companya, ModeloAvion) VALUES (?, ?, ?, ?, ?)";
        $consulta=mysqli_stmt_init($mysqli);
        if($stmt=mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $Origen, $Destino, $fecha, $Companya, $ModeloAvion);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return true;

        } else{
            return false;
        }
    }
    
    function modificarDestino($mysqli,$Destino,$id){
        $sql="UPDATE vuelos SET Destino=? WHERE id=?";
        $consulta=mysqli_stmt_init($mysqli);
        if($stmt=mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $Destino, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return true;

        } else{
            return false;
        }
    }

    function modificarCompanya($mysqli,$Companya,$id){
        $sql="UPDATE vuelos SET Companya=? WHERE id=?";
        $consulta=mysqli_stmt_init($mysqli);
        if($stmt=mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $Companya, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return true;

        } else{
            return false;
        }
    }

    function eliminarVuelo($mysqli,$id){
        $sql="DELETE FROM `vuelos` WHERE id=?";
        $consulta=mysqli_stmt_init($mysqli);
        if($stmt=mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return true;

        } else{
            return false;
        }
    }

    function extraerVuelos($mysqli){
        $sql="SELECT * FROM vuelos";
        $consulta=mysqli_stmt_init($mysqli);
        if($stmt=mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $id, $origen, $destino, $fecha, $companya, $modeloAvion);
            $vuelos=[]; 
            while(mysqli_stmt_fetch($stmt)){
                $vuelos[]=array("id"=>$id, "Origen"=>$origen, "Destino"=>$destino, "Fecha"=>$fecha, "Companya"=>$companya, "ModeloAvion"=>$modeloAvion); 
                print "El vuelo con origen $origen y destino $destino tiene fecha prevista $fecha y es operado por la compañia $companya con el modelo de avion $modeloAvion";
             }
            
            mysqli_stmt_close($stmt);
            return $vuelos;
        } else{
            return false;
        }
    }
    
?>
