<?php

    /*
        variable system 
        variable built in PHP
    */
    echo $_SERVER["DOCUMENT_ROOT"];


    /*
        variable User
        variable yang dibuat oleh user
    */
    echo '<br><br>' ;

    $name = 'Hana';
    $age = 15;
    $weight = 50.5 ;

    $name = 'Han';

    echo "Nama saya adalah $name";



    /*
        Variable konstan
        variable yang tidak bisa diubah nilainya
        1. Menggunakan define()     | define('fruit', 'Apel');
        2. Menggunkan const         | conts fruit = 'Apel';
    */
    echo '<br><br>';

    define("SITE_NAME", "Elena");
    const BASE_URL = "elena.nurulfikri.ac.id";

    echo SITE_NAME;
    echo '<br>';
    echo BASE_URL;
?>