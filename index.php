<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
    <link rel="shortcut icon" href="images/favico.ico" type="image/x-icon">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://doniws.github.io/Font-Text/Din/Din.css">
</head>
<body>
    <h1>Hello</h1>
    <?php

    $kelas = 10 ;
    $age = 12 ;
    if ($age > 14.5) {
        if ($kelas) {
            echo "Sangat Cukup";
        }else{
            echo "Sudah Cukup";
        }
    }else{
        echo "Ngak Cukup";
    }
    ?>
</body>
</html>
