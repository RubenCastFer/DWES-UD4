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
        $result = mysqli_query($mysqli,"DELETE FROM `vuelos` WHERE Origen='Huelva'");
        var_dump($result);
        if ($result==false) {
            echo "La consulta no ha funcionado correctamente";
        } else {
            echo "Se ha borrado ", mysqli_affected_rows($mysqli), "correctamente";
        }
        
        
        mysqli_close($mysqli);

    ?>
</body>
</html>