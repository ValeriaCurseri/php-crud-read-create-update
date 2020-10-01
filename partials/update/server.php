<?php 

    include __DIR__ . '/../database.php';
    include __DIR__ . '/../functions.php';

    $id = $_GET['id'];

    $row = stampaDettagli($conn, 'stanze', $id);

?>