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

    

    function faktor($angka){
        if ($angka < 2) {
            return 1;
        }
        else {
            return($angka* faktor($angka-1));
        }
    }
    echo "faktorial 6 adalah".faktor(5);

    
    

    ?>
</body>
</html>
