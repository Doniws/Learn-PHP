<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://doniws.github.io/Font-Text/Din/Din.css">
</head>
<body>
    <h1>Hello</h1>
    <?php

    $item = ["Hello" , "World" , "PHP"];

    unset($item[2]);


    for($i=0; $i < count($item); $i++){
        echo $item[$i]."<br>";
    }



    ?>
</body>
</html>
