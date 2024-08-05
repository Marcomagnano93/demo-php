<?php 

$heading = 'home';

function dd ($value) {
    echo '<pre>';

    var_dump($value);

    echo '</pre>';

    die();
}

// dd($_SERVER);
require "index.view.php";