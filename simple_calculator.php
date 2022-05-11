<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        //forms
        <form action="site.php" method="get">
            Num1:<input type="number" name="num1">
            <br>
            num2:<input type="number" name="num2">
            <br>
            <input type="submit">
        </form>
        <br>
        The sum is <?php echo $_GET["num1"]+$_GET["num2"] ;?><br>
            
        
        
    </body>
</html>
