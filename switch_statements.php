<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
    <form action="site.php" method="post">
            Whats your Grade:<input type="text" name="grade">
            <br>
            <input type="submit">
        </form>
       
        <br>
        <?php
        $grade=$_POST["grade"];
        switch($grade){
            case "A":
                echo "You did Amazing";
                break;
            case "B":
                echo "You did pretty well";
                break;
            case "C":
                echo "You did poorly";
                break;
            case "D":
                echo "You did very bad";
                break;
            case "F":
                echo "You FAILED";
                break;
            default:
                echo "Wrong Input";
        }
        ?><br>
        
            
        
        
    </body>
</html>
