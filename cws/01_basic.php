<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        my name is siddhi
        <?php
        define('pi',3.14);
        echo "hello my fisrt php website";
        //variabls
    echo "<br>variables <br>";
        $var1=35;
        $var2=34;
        echo "<br>";
    
       echo $var2;
        echo $var2;
        echo "<br>";
        
        //operator
        //Arithmatic operator
       echo "the value of:";
       echo $var2+$var1;
       echo "<br>";
       echo "the value of:";
       echo $var2-$var1;
       echo "<br>";
       echo "the value of:";
       echo $var2*$var1;
       echo "<br>";
       echo "the value of:";
       echo $var2/$var1;
       echo "<br>";
       //Assingment operator
       $newvar=$var1;
       echo $newvar;
       echo "<br>";
       $newvar+=1;
       echo $newvar;
       echo "<br>";
       //comparison operator
       echo "the value of:";
       echo "<br>";
       echo var_dump(1<=4);
       echo "<br>";
       //data types in php
    //    1.string 
    //    2.integer 
    //    3.float 
    //    4.boolean 
    //    5.array 
    //    6.object 
    echo "<br> data types <br>";

    $var="this is string";
    echo var_dump($var);
    echo "<br>";

    $var=54;
    echo var_dump($var);
    echo "<br>";

    $var=6.5;
    echo var_dump($var);
    echo "<br>";

    $var=true;
    echo var_dump($var);
       echo pi;

       
        ?>
    </div>
</body>
</html>