<?php 

    include __DIR__ . '/../database.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM stanze WHERE id = $id";     // seleziono i campi dalla tabella stanze
    $result = $conn->query($sql);                       // creo una query della mia select

    if ($result){
        echo "ok";
    } else {
        echo "non cancellata";
    }
?>