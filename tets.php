<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

$sekarang = Carbon::now();


echo "Now: $sekarang <br>";
echo "My age: " . Carbon::createFromDate(2006, 3, 31)->age . "<br>";
echo "Besok: " . $sekarang->addDay() ."<br>";

?>