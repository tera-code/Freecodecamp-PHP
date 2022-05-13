<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
       
       
        <br>
        <?php
        // Inheritance is where a class can inherit all the functions of another class

        class Chef{
            function makeChicken(){
                echo "The chef makes Chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad<br>";
            }
            function makeSpecialDish(){
                echo "The chef makes bbq ribs<br>";
            }
        }

        // now thois new chef hass all functions and attributes of chef with additional ones
        class ItalianChef extends chef{
            function makePasta(){
                echo "chef makes Pasta<br>";
            }
            //we can override the make Special dish function
            function makeSpecialDish(){
                echo "The chef makes a Pam<br>";
            }
        }

        $chef=new Chef();
        $chef->makeChicken();
        $chef->makeSpecialDish();
        echo "<hr>Italian Chef<hr>";
        $italianChef=new ItalianChef();
        $italianChef->makeChicken();
        $italianChef->makeSpecialDish();
        ?><br>
        
            
        
        
    </body>
</html>
