<?php

    //Require the autoload file
    require_once('vendor/autoload.php');

    //Create an instance of the Base Class
    $f3 = Base::instance();


    $f3->route('GET /', function() {

        echo '<h1>Hello, World!</h1>';

    }
    );


    $f3->run();
