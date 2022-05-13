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
            class Book{
                // we specify the attributes
                var $title;
                var $author;
                var $pages;
            }
            // thiis is an object. An object is an instance of a class
            $book1=new Book;
            $book1->title="Harry Potter";
            $book1->author="JK Rowlin";
            $book1->pages=400;
            
            $book2=new Book;
            $book2->title="Lord Of the Rings";
            $book2->author="Tolkin";
            $book2->pages=700;

            echo $book1->title;
            echo $book2->author;
        ?><br>
        
            
        
        
    </body>
</html>
