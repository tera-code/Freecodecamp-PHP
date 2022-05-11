<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        <?php 
            $friends=array("kevin","karen","oscar","Jim");
            $friends[1]=400;
            echo $friends[1];
            echo"<br>";
            $friends[4]="Angela";
            echo $friends[4];
            echo"<br>";
            // find number of elements
            echo"Number of elements: ";
            echo count($friends);
            echo "<br>";
        ?><br>
        
        
    </body>
</html>
