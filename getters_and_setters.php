<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
       
       
        <br>
        <?php
        // Classes in php
        // a class is a blur print
            class Movie{
                // we specify the attributes
                //--VIsibility modifiers
                //--Public= Visible to every other code and can also be modified my any code
                //-Protected= Can not be modified by code outside class
                // private can not be modified outside class
                public $title;
                private $rating;

                //creating a constructor
                //a constructor is a function that gets executed once the class in created
                // it has the name __construct
                // so we can use it to pass in the variables and then assign them to our attributes of the class
                function __construct($title,$rating){
                    $this->title=$title;
                    $this->rating=$rating;
                }
                function getRating(){
                    return $this->rating;
                }
                function setRating($rating){
                    //  now we enforce that rating is one of the valid ratings

                    if($rating=="G" || $rating=="PG" || $rating=="PG-13" || $rating=="R" || $rating=="NR"){
                        $this->rating=$rating;
                    }else{
                        $this->rating="NR";
                    }
                    
                }

            }
            // thiis is an object. An object is an instance of a class
            $avengers=new Movie("Avenges","PG-13");
            
            // cos of the private keyword, rating cannot be directly accessed outside
            //except using the get and the set we have created
            $avengers->setRating("dfaf");
            echo $avengers->getRating();

        ?><br>
        
            
        
        
    </body>
</html>
