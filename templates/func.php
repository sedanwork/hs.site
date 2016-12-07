<?php

function decs_all($link){
    $query = "SELECT * FROM decs ORDER BY id DESC";
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    $n = mysqli_num_rows($result);
    $decs = array();
    
    for ($i = 0; $i < $n; $i++)
    {
        $temp = mysqli_fetch_assoc($result);
        $decs[] = $temp;
    }
    return $decs;
    
}

function deck_add($link, $title, $img, $type, $date) {
    
    $title = trim($title);
    $type = trim($type);
    $img = trim($img);
    
    if ($title == '')
        return false;
    
    $t = "INSERT INTO decs (title, img, type, date) VALUES ('%s', '%s', '%s', '%s')";
    
    $query = sprintf($t, mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $img),
                         mysqli_real_escape_string($link, $type),
                         mysqli_real_escape_string($link, $date));
    echo $query;
    $result = mysqli_query($link, $query);
    
    if(!result)
        die(mysqli_error($link));
    
    return true;
}


?>