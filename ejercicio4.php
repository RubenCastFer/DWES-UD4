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
        @$mysqli = mysqli_connect("localhost","developer","developer","agenciaviajes");
        $error = mysqli_connect_errno();
        if ($error!=null){
            echo "<p>Error $error conectado a la base de datos:" ,mysqli_connect_error(), "</p>";
            exit();

        }else{
            echo "conectado correctamente";
            echo "<br>";
        } 
        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        var_dump($result);
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "<table border=1px>";
            echo "<tr>";
                echo "<td>id</td>";
                echo "<td>Origen</td>";
                echo "<td>Destino</td>";
                echo "<td>Fecha</td>";
                echo "<td>Companya</td>";
                echo "<td>ModeloAvion</td>";


               
                echo "</tr>";
            while($fila=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>$fila[id]</td>";
                echo "<td>$fila[Origen]</td>";
                echo "<td>$fila[Destino]</td>";
                echo "<td>$fila[Fecha]</td>";
                echo "<td>$fila[Companya]</td>";
                echo "<td>$fila[ModeloAvion]</td>";


               
                echo "</tr>";


            }
        }

        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "</table>";

            echo "<p>";

            echo "<table border=1px>";
            echo "<tr>";
                echo "<td>id</td>";
                echo "<td>Origen</td>";
                echo "<td>Destino</td>";
                echo "<td>Fecha</td>";
                echo "<td>Companya</td>";
                echo "<td>ModeloAvion</td>";


               
                echo "</tr>";
            while($fila=mysqli_fetch_object($result)){
                echo "<tr>";
                echo "<td>$fila->id</td>";
                echo "<td>$fila->Origen</td>";
                echo "<td>$fila->Destino</td>";
                echo "<td>$fila->Fecha</td>";
                echo "<td>$fila->Companya</td>";
                echo "<td>$fila->ModeloAvion</td>";


               
                echo "</tr>";


            }
            echo "</table>";


        }

        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "</table>";

            echo "<p>";

            echo "<table border=1px>";
            echo "<tr>";
                echo "<td>id</td>";
                echo "<td>Origen</td>";
                echo "<td>Destino</td>";
                echo "<td>Fecha</td>";
                echo "<td>Companya</td>";
                echo "<td>ModeloAvion</td>";


               
                echo "</tr>";
            while($fila=mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>$fila[0]</td>";
                echo "<td>$fila[1]</td>";
                echo "<td>$fila[2]</td>";
                echo "<td>$fila[3]</td>";
                echo "<td>$fila[4]</td>";
                echo "<td>$fila[5]</td>";


               
                echo "</tr>";


            }
            echo "</table>";


        }

        $result = mysqli_query($mysqli,"SELECT * FROM `vuelos`");
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "</table>";

            echo "<p>";

            echo "<table border=1px>";
            echo "<tr>";
                echo "<td>id</td>";
                echo "<td>Origen</td>";
                echo "<td>Destino</td>";
                echo "<td>Fecha</td>";
                echo "<td>Companya</td>";
                echo "<td>ModeloAvion</td>";


               
                echo "</tr>";
            while($fila=mysqli_fetch_row($result)){
                echo "<tr>";
                echo "<td>$fila[0]</td>";
                echo "<td>$fila[1]</td>";
                echo "<td>$fila[2]</td>";
                echo "<td>$fila[3]</td>";
                echo "<td>$fila[4]</td>";
                echo "<td>$fila[5]</td>";


               
                echo "</tr>";


            }
            echo "</table>";


        }
        
        //mysqli_fetch_row()
        //mysqli_field_array()
        mysqli_close($mysqli);