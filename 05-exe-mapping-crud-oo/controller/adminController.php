<?php
/*
 * Admin's controller
 */

// Disconnect
if(isset($_GET['disconnect'])){
    if(TheuserManager::disconnectUser()){
        header("Location: ./");
        exit();
    }
}

// create article
if(isset($_GET['create'])){

    // exercice's action

    // form view
    require_once "../view/admin/createAdminView.php";
    exit();
}

// detail admin article
if(isset($_GET['idarticle'])&&ctype_digit($_GET['idarticle'])){

    // exercice's action

    // form view
    require_once "../view/admin/articleAdminView.php";
    exit();
}

// Homepage with all articles by connected user
$recup = $newsManager->readAllNewsByIdUser($_SESSION['idtheUser']);
if(empty($recup)){
    $message = "Pas encore d'article écrit par {$_SESSION['theUserLogin']}";
}else{
    foreach ($recup as $article){
        $item[]= new Thenews($article);
    }
}

// homepage admin view
require_once "../view/admin/indexAdminView.php";