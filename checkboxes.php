<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        //check boxes
        <form action="site.php" method="post">
            Apples:<input type="checkbox" name="fruits[]" value="apples">
            <br>
            Oranges:<input type="checkbox" name="fruits[]" value="oranges">
            <br>
            Pears:<input type="checkbox" name="fruits[]" value="pears">
            <br>
            
            <input type="submit">
        </form>
        <br>
        <?php
        // this returns an array
            $fruits=$_POST["fruits"];
            echo $fruits[0];
        
        ?><br>
        
            
        
        
    </body>
</html>
