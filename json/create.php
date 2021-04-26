<?php

    require_once('config.php');

    $note = $_POST['note'];
    
    $query = "INSERT INTO note(note)VALUES('$note')";
    
    $sql    = mysqli_query($db_connect, $query);
    if ($sql){
    echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error!') );
    }
?>
