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
        $libros = simplexml_load_file("ejercicio3.html");
        printf($libros->book[1]->author);
        printf($libros->book[1]->title);
        printf($libros->book[1]->genre);
        printf($libros->book[1]->price);
        printf($libros->book[1]->publish_date);
        printf($libros->book[1]->description);
        
        echo "<table border=1>";
        foreach($libros as $libro){
            echo "<tr>";
            foreach($libro as $dato){
                
                printf("<td>$dato</td>");
                
            }
        
            echo "</tr>";

        }
        echo "</table>";

        //$libros = simplexml_load_file("ejercicio3.html");
        $book = $libros->catalog->addChild("book");
        $book->addAttribute("id", "bk113"); 
        $autor = $book->addChild("author", "Conan, Arthur");
        $book->addChild("title", "Conan, Arthur");
        $book->addChild("genre", "Conan, Arthur");
        $book->addChild("price", "32.2");
        $book->addChild("publish_date", "20-03-01");
        $book->addChild("description", "Conan, Arthur");
        
        $libros->asXML("ejercicio3.html");


        $libros = simplexml_load_file("ejercicio3.html");

        echo "<table border=1>";
        foreach($libros as $libro){
            echo "<tr>";
            foreach($libro as $dato){
                
                printf("<td>$dato</td>");
                
            }
        
            echo "</tr>";

        }
        echo "</table>";



    ?>
</body>
</html>