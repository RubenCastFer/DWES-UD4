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
        $archivo = fopen("locations.csv", "r");
        $contenido;   
        do{
            $contenido = fgetcsv($archivo);
            if ($contenido != false){
                foreach($contenido as $fila){
                    echo $fila;
                }
                echo "<br>";
            }
            
        }while($contenido != false);
        fclose($archivo);
        
        
        $archivo = fopen("locations.csv", "a");
        $dato=[];
        $dato[]='Mi casa';
        $dato[]='37.312152,-5.963898';
        fputcsv($archivo, $dato);
        fclose($archivo);
        
        $archivo = fopen("locations.csv", "r");
        $contenido;   
        echo "<table>";
        do{
            $contenido = fgetcsv($archivo);
            if ($contenido!=false){
                echo "<tr>";
                foreach($contenido as $fila){
                    echo "<td>$fila</td>";
                }
                echo "</tr>";
            }    
        }while($contenido != false);
        echo "<table>";
        
        fclose($archivo);


    ?>
</body>
</html>