<?php

require_once ("../Controllers/MemberController.php");

if($_GET['operation'] == "update"){
    MemberController::update($_POST);
}

elseif($_GET['operation'] == "create"){
    MemberController::create($_POST);
}

elseif($_GET['operation'] == "delete"){
    MemberController::delete($_POST['id_member']);
}
?>