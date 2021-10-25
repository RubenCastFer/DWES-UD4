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
        $result = mysqli_query($mysqli,"INSERT INTO `vuelos` (Origen, Destino, fecha, Companya, ModeloAvion) VALUES ('Ciudad de Mexico', 'Nueva York', '2022-12-21 09:16:52', 'Iberia', 'Boeing 747')");
        var_dump($result);
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
            echo "<br>";
        } else {
            echo "Se han insertado ", mysqli_affected_rows($mysqli), "filas.";
            echo "<br>";
            echo "El id del ultimo elemento añadido es ", mysqli_insert_id($mysqli);
            echo "<br>";
        }
        

        $result = mysqli_query($mysqli,"DELETE FROM `vuelos` WHERE Origen='Mayorca'");
        var_dump($result);
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
            echo "<br>";
        } else {
            echo "Se ha borrado ", mysqli_affected_rows($mysqli), "correctamente";
            echo "<br>";
        }


        $result = mysqli_query($mysqli,"UPDATE `vuelos` SET `ModeloAvion`='Boeing 747' WHERE `id`='12'");
        var_dump($result);
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
            echo "<br>";
        } else {
            echo "Se han actualizado ", mysqli_affected_rows($mysqli), " filas.";
            echo "<br>";
        }
        
        mysqli_close($mysqli);

    ?>
</body>
</html>