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
            if($_FILES["img"]["size"] > 1024*3*1024)
           {
             echo ("Размер файла превышает три мегабайта");
             exit;
           }
           if(is_uploaded_file($_FILES["img"]["tmp_name"]))
           {
             move_uploaded_file($_FILES["img"]["tmp_name"], "C:/xampp/htdocs/hs.site/images/decks/".$_FILES["img"]["name"]);
           } else {
              echo("Ошибка загрузки файла");
           }
            deck_add($link, $_POST['title'], "images/decks/".$_FILES["img"]["name"], $_POST['type'], $_POST['date']);
            header("Location: index.php");
        }
        
        include("../edit/decks_add.php");
    }

    else if($action == "edit"){
        if(!isset($_GET['id']))
            header("Location: index.php");
        
        $id = (int)$_GET['id'];
        
        if(!empty($_POST) && $id > 0){
            if($_FILES)
                deck_edit($link, $id, $_POST['title'], "images/decks/".$_FILES["img"]["name"], $_POST['type'], $_POST['date']);
            else
                deck_edit($link, $id, $_POST['title'], $deck['img'], $_POST['type'], $_POST['date']);
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