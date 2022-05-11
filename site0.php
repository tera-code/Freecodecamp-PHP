<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        $characterName = "Tom";
        $characterAge=35;
        echo "There once was a man named $characterName <br>";
        echo "He was $characterAge years old<br>";
        $characterName="Mike";
        echo "He really liked the name $characterName<br>";
        echo "But didnt like being $characterAge <br>";
        // string
        $phrase="Giraffe Academy";
        $age=30;
        $gpa = 3.85;
        $isMale=false;
        echo strtolower($phrase);
        echo "<br>";
        echo strtoupper($phrase);
        echo "<br> ";
        echo strlen($phrase);
        echo "<br>";
        // find first character
        echo $phrase[0];
        echo "<br>";
        //replace a string with another in a another string
        echo str_replace("Giraffe","Panda",$phrase);
        echo "<br>";
        //get a substring from a string
        echo substr($phrase,8);
        echo "<br>";
        //get a number of substring from a string
        echo substr($phrase,8,3);
        echo "<br>";
        echo "<u> Calculations</u><br>";
        echo abs(-100);
        echo pow(2,4);
        //find largest numbae
        echo max(2,10);
        ?>
        
    </body>
</html>
