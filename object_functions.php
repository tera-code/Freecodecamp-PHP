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
            class Student{
                // we specify the attributes
                var $name;
                var $major;
                var $gpa;

                //creating a constructor
                //a constructor is a function that gets executed once the class in created
                // it has the name __construct
                // so we can use it to pass in the variables and then assign them to our attributes of the class
                function __construct($name,$major,$gpa){
                    $this->name=$name;
                    $this->major=$major;
                    $this->gpa=$gpa;
                }

                // creating object function
                //lets say rules for honors is gpa of 3.5 and above has honors
                function hasHonors(){
                    if($this->gpa>=3.5){
                        return "true";
                    }
                    return "false";
                }

            }
            // thiis is an object. An object is an instance of a class
            $student1=new Student("Jim","Business",2.8);
            
            $student2=new Student("Pam","Art",3.6);

            echo $student1->hasHonors();

        ?><br>
        
            
        
        
    </body>
</html>
