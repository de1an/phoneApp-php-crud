<?php  
require "core/init.php";

$term = $_POST["term"];

$rents = $Rents->find($term);

require "views/index.view.php";