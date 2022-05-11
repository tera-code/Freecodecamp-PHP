<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        <!-- Associative Array can store key-value pairs -->
        <form action="site.php" method="post">
            Apples:<input type="text" name="student" >
            <br>
            
            <input type="submit">
        </form>
        <br>
        <?php
        // this is am associative array
            $grades=array("Jim"=>"A+","Pam"=>"B-","Oscar"=>"C+");
            echo $grades[$_POST["student"]];
        
        ?><br>
        
            
        
        
    </body>
</html>
