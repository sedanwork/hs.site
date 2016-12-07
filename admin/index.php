<?php
    require_once("../edit/database.php");
    require_once("../edit/func.php");

    $link = db_connect();
    $deck = ['id' => '', 'title' => '', 'img' => '', 'type' => '', 'date' => ''];                                           
    
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";
    
    if($action == "add"){
        if(!empty($_POST)){
            deck_add($link, $_POST['title'], $_POST['img'], $_POST['type'], $_POST['date']);
            header("Location: index.php");
        }
        
        include("../edit/decks_add.php");
    }

    else if($action == "edit"){
        if(!isset($_GET['id']))
            header("Location: index.php");
        
        $id = (int)$_GET['id'];
        
        if(!empty($_POST) && $id > 0){
            deck_edit($link, $id, $_POST['title'], $_POST['img'], $_POST['type'], $_POST['date']);
            header("Location: index.php");
        }
        
        $deck = deck_get($link, $id);
        include("../edit/decks_add.php");
    }

    else if($action == "delete"){
        $id = $_GET['id'];
        $deck = decks_delete($link, $id);
        header("Location: index.php");
    }

    else{
        $deck = decks_all($link);
        include("../edit/decks.php");
    }

?>