<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    echo "<h1> Mocniny </h1>";

        for ($i=0; $i <= 20 ; $i++) { 
            echo $i, "&nbsp", pow($i,2), "<br>";
        }

    echo "<h1> Raketa </h1>";

        for ($i=10; $i >= 0; $i--) { 
            echo $i, "<br>";   
        }

        echo "raketa letí! <br>";

        define("max",100);
        define("min",0);
        define("NUMBERS_COUNT",10);
        

    echo "<h1> Random čísla </h1>";

        for ($i=0; $i < NUMBERS_COUNT; $i++) { 
            echo rand(min,max), "&nbsp";
        }
        
    





    ?>




</body>
</html>