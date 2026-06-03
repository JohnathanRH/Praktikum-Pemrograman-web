<?php
require_once("../Controllers/BukuController.php");

if($_GET['operation'] == "create"){
    BukuController::create($_POST);
}
else if($_GET['operation'] == "update"){
    BukuController::update($_POST);
}
else if($_GET['operation'] == "delete"){
    BukuController::delete($_POST['id_buku']);
}
?>