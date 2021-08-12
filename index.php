<?php
    require_once "controllers/templateController.php";
    require_once "controllers/formController.php";
    require_once "models/formModels.php";

    $template = new templateController();
    $template -> GetTemplate(); 
?>