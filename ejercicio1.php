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
        /*$file = fopen("nombres.txt", "r");
        do{
            echo fgets($file), "<br>";
        }while (feof($file)!=true);
        
        fclose($file);
        $file = fopen("nombres.txt", "a");
        //fwrite($file, "Ruben,172,77,blond,fair,blue,19,male,Tatooine,Human ");
        fclose($file);
        */
        $file = fopen("nombres.txt", "r");
        $personajes=[];

        echo "<table border='1px solid'>";

        do{
            $personaje = explode(",", fgets($file));

            echo "</tr>";
            foreach ($personaje as $dato){
               
                    echo "<td>$dato</td>";
                
            }
            echo "</tr>";
        }while (feof($file)!=true);

        
        echo "</table>";
        fclose($file);

    ?>
</body>
</html>