<?php 
require "core/init.php";


if(isset($_GET["id"])){
    $id = $_GET["id"];
    if($Rents->deleteRent($id)){
        redirect("edit_delete.php");
    }
}else{
    redirect("edit_delete.php");
}