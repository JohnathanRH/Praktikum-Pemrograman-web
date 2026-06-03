<?php

require_once('../Controllers/PeminjamanController.php');

if($_GET['operation'] == 'create'){
    PeminjamanController::create($_POST);
}

if($_GET['operation'] == 'update'){
    PeminjamanController::update($_POST);
}

if($_GET['operation'] == 'delete'){
    PeminjamanController::delete($_POST['id_peminjaman']);
}

?>