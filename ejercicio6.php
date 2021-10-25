<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "ejercicio6.inc.php";
        $origen="Tenerife";
        $destino="Sevilla";
        $fecha="2021-10-22 14:02:29";
        $companya="AirEuropa";
        $modeloAvion="A320";
        $id1=7;
        $id2=5;
        $id3=1;

        $mysqli=creaConexion();
        if ($mysqli==false){
            echo "<p>Error $error conectado a la base de datos:" ,mysqli_connect_error(), "</p>";
            exit();

        }else{
            echo "conectado correctamente";
            echo "<br>";
        }

        $resultadoCrearVuelo = creaVuelo($mysqli,$origen,$destino,$fecha,$companya,$modeloAvion);
        if ($resultadoCrearVuelo==true) {
            echo "El vuelo se ha creado correctamente";
        }else{
            echo "Hubo un error en la creacion del vuelo";
        }
        
        $resultadoModificarDestino = modificarDestino($mysqli,$destino,$id1);
        if ($resultadoCrearVuelo==true) {
            echo "El vuelo se ha modicado correctamente";
        }else{
            echo "Hubo un error en la modificacion del vuelo";
        }

        $resultadoModificarCompanya = modificarCompanya($mysqli,$companya,$id2);
        if ($resultadoCrearVuelo==true) {
            echo "El vuelo se ha modicado correctamente";
        }else{
            echo "Hubo un error en la modificacion del vuelo";
        }

        $resultadoEliminarVuelo   = eliminarVuelo($mysqli,$id3);
        if ($resultadoCrearVuelo==true) {
            echo "El vuelo se ha eliminado correctamente";
        }else{
            echo "Hubo un error en la eliminacion del vuelo";
        }

        $resultadoExtraerVuelos=[];
        $resultadoExtraerVuelos = extraerVuelos($mysqli);
        if($resultadoExtraerVuelos==false){
            echo "Error al mostrar los datos";
        }else{
            echo "<table>";
                echo "<td>id</td>";
                echo "<td>Origen</td>";
                echo "<td>Destino</td>";
                echo "<td>Fecha</td>";
                echo "<td>Companya</td>";
                echo "<td>ModeloAvion</td>";


           
            echo "</tr>";
            foreach($resultadoExtraerVuelos as $vuelo){
                echo "<tr>";
                echo "<td>$vuelo[id]</td>";
                echo "<td>$vuelo[Origen]</td>";
                echo "<td>$vuelo[Destino]</td>";
                echo "<td>$vuelo[Fecha]</td>";
                echo "<td>$vuelo[Companya]</td>";
                echo "<td>$vuelo[ModeloAvion]</td>";
                echo "</tr>";

            }
            echo "</table>";

        }



    ?>
</body>
</html>