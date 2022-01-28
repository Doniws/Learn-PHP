<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://doniws.github.io/Font-Text/Din/Din.css">
</head>
<body>
    <h1>Hello</h1>
    <?php

    class Doni{
        function Nama(){
            echo "NAMA NYA : ". __CLASS__;
        }
    }


    $aku = new Doni();
    $aku->Nama();

    ?>
</body>
</html>
