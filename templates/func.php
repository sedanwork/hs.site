<?php

function decks_all($link){
    $query = "SELECT * FROM decks ORDER BY id DESC";
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $decks = array();
    
    for ($i = 0; $i < $n; $i++)
    {
        $temp = mysqli_fetch_assoc($result);
        $decks[] = $temp;
    }
    return $decks;
    
}

function deck_add($link, $title, $img, $type, $date) {
    
    $title = trim($title);
    $type = trim($type);
    $img = trim($img);
    
    if ($title == '')
        return false;
    
    $t = "INSERT INTO decks (title, img, type, date) VALUES ('%s', '%s', '%s', '%s')";
    
    $query = sprintf($t, mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $img),
                         mysqli_real_escape_string($link, $type),
                         mysqli_real_escape_string($link, $date));
    echo $query;
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    return true;
}

function deck_get($link, $deck_id){
    
    $query = sprintf("SELECT * FROM decks WHERE id=%d",(int)$deck_id);
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $deck = mysqli_fetch_assoc($result);
    
    return $deck;
}

function deck_edit($link, $id, $title, $img, $type, $date) {
    
    $title = trim($title);
    $type = trim($type);
    $img = trim($img);
    $id = (int)$id;
    
    if($title == '')
        return false;
    
    $sql = "UPDATE decks SET title='%s', img='%s', type='%s', date='%s' WHERE id='%d'";
    
    $query = sprintf($sql, mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $img),
                         mysqli_real_escape_string($link, $type),
                         mysqli_real_escape_string($link, $date),
                         $id);
    
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);    
    
}

function decks_delete($link, $id){
    $id = (int)$id;
    
    if($id == 0)
        return false;
    
    $query = sprintf("DELETE FROM decks WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);  
}


?>