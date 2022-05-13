<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
       
       
        <br>
        <?php
        // We define a template with variables in article header.php and then assign the value in this file
        $title="My First Post";
        $author="Enoch";
        $wordCount=1500;
        include "article-header.php";
        echo "<hr>";
        ?><br>
        <?php
            include "useful-tools.php";
            echo sayHi("Enoch");
            echo $feetInMile;
        ?>
            
        
        
    </body>
</html>
