<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
       
       
        <br>
        <?php
            $isMale=false;
            $isTall=false;
            if($isMale && $isTall){
                echo "you are a tall male <br>";
            }
            elseif ($isMale && !$isTall) {
                echo 'You are a short Male <br>';
            }elseif(!$isMale && $isTall){
                echo "You are a tall Female<br>";
            }else{
                echo  "You are a short female<br>";
            }


            function getMax($num1,$num2){
                if($num1>$num2){
                    return $num1;
                }else{
                    return $num2;
                }
            }
            echo getMax(3,90)
        ?><br>
        
            
        
        
    </body>
</html>
