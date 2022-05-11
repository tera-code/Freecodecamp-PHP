<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        //forms
        <form action="site.php" method="post">
            Password:<input type="password" name="password">
            <br>
          
            <input type="submit">
        </form>
        <br>
            <?php echo $_POST["password"] ;?><br>
            
        
        
    </body>
</html>
