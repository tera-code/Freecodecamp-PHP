<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        //forms
        <form action="site.php" method="post">
            First num:<input type="number" step="0.0001" name="num1">
            <br>
            OP:<input type="text" name="op"><br>
            Second Number:<input type="number" step="0.0001" name="num2">
            <br>
            <input type="submit">
        </form>
        <br>
        <?php
           $num1=$_POST["num1"];
           $num2=$_POST["num2"];
           $op=$_POST["op"];
           if($op=='+'){
               echo $num1+$num2;
           }elseif($op=='-'){
                echo $num1-$num2;
            }elseif($op=='/'){
                echo $num1/$num2;
                }
            elseif($op=='*'){
                echo $num1*$num2;
                }
            else{
                echo "invalid Operator";
            }


         ?><br>
            
        
        
    </body>
</html>
