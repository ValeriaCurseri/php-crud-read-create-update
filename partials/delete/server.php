<?php 

    include __DIR__ . '/../database.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM stanze WHERE id = $id";     // seleziono i campi dalla tabella stanze
    $result = $conn->query($sql);                       // creo una query della mia select

    if ($result){
        header("Location: $basepath/index.php?id=$id"); // quando la cancellazione è stata fatta lo rimando all'index.php
    } else {
        echo "La stanza non è stata cancellata";
    }
?>