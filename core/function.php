<?php
function dd($arg){
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
    die();
}

function vd($arg){
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
}

$config=[
    "xampp"=>[
        "host"=>"localhost",
        "username"=>"root",
        "password"=>"",
        "db"=>"phone_rental",
    ],
    "mamp"=>[
        "host"=>"localhost",
        "username"=>"root",
        "password"=>"root",
        "db"=>"phone_rental",
    ],

];

function redirect($page){
    header("Location: $page");
}

function displayDate($date){
    return date("d.m.Y",strtotime($date));
}