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


?>