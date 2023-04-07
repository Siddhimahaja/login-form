<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>
<body>
    <div class="container">
    <?php
    $str = "This this this";
    echo $str. "<br>";
    $lenn = strlen($str);
    echo "The length of this string is ". $lenn . ". Thank you <br>";
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
    // echo $lenn;
?>
</div>
</body>
</html>