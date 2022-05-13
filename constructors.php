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
            class Book{
                // we specify the attributes
                var $title;
                var $author;
                var $pages;

                //creating a constructor
                //a constructor is a function that gets executed once the class in created
                // it has the name __construct
                // so we can use it to pass in the variables and then assign them to our attributes of the class
                function __construct($aTitle,$aAuthor,$aPages){
                    $this->title=$aTitle;
                    $this->author=$aAuthor;
                    $this->pages=$aPages;
                }

            }
            // thiis is an object. An object is an instance of a class
            $book1=new Book("Harry Potter","JK Rowlin",400);
            
            $book2=new Book("Lord Of the Rings","Tolkin",700);

            echo $book1->title;

        ?><br>
        
            
        
        
    </body>
</html>
