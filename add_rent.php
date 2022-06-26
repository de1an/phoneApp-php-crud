<?php

require "core/init.php";

$phones = $Phone->getAll();
$providers = $Provider->getAll();

if ("POST" === $_SERVER["REQUEST_METHOD"]) {
    $data = [
        "customer" => $_POST["customer"],
        "phone_id" => $_POST["phone_id"],
        "provider_id" => $_POST["provider_id"],
        "start_date" => $_POST["start_date"],
        "end_date" => $_POST["end_date"],
    ];

    $Rents->addNewRent($data);

    redirect("index.php");
}

require "views/add_rent.view.php";
