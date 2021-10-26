<?php
function creaConexion()
{
    @$mysqli = mysqli_connect("localhost", "developer", "developer", "agenciaviajes");
    $error = mysqli_connect_errno();
    if ($error != null) {
        return false;
    } else {
        return $mysqli;
    }
}

function creaVuelo($mysqli, $Origen, $Destino, $fecha, $Companya, $ModeloAvion)
{
    $retorno=false;
    $sql = "INSERT INTO `vuelos` (Origen, Destino, fecha, Companya, ModeloAvion) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($mysqli, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssss", $Origen, $Destino, $fecha, $Companya, $ModeloAvion);
        $retorno=mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    return $retorno;
}

function modificarDestino($mysqli, $Destino, $id)
{
    $retorno = false;
    $sql = "UPDATE vuelos SET Destino=? WHERE id=?";
    if ($stmt = mysqli_prepare($mysqli, $sql)) {
        mysqli_stmt_bind_param($stmt, "si", $Destino, $id);
        $retorno = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    return $retorno;
}

function modificarCompanya($mysqli, $Companya, $id)
{
    $retorno=false;
    $sql = "UPDATE vuelos SET Companya=? WHERE id=?";
    if ($stmt = mysqli_prepare($mysqli, $sql)) {
        mysqli_stmt_bind_param($stmt, "si", $Companya, $id);
        $retorno = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    return $retorno;
}

function eliminarVuelo($mysqli, $id)
{
    $retorno=false;
    $sql = "DELETE FROM `vuelos` WHERE id=?";
    if ($stmt = mysqli_prepare($mysqli, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        $retorno = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
     }
    return $retorno;
}

function extraerVuelos($mysqli)
{
   
    $sql = "SELECT * FROM vuelos";
    $retorno = mysqli_query($mysqli, $sql);
    return $retorno;

}
