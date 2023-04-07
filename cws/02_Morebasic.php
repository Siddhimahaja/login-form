<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
.container{
    max: width 80px;
    background-color: rgb(192, 255, 194);
    margin: auto;
}

</style>
<body>
    <div class="container">
        This is my first php website
        <?php
        // Loops in PHP
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }
    
    
   
?>
    </div>
    
</body>
</html>