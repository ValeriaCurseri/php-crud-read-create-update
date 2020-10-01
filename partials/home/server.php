<?php 

    include __DIR__ . '/../database.php';
    include __DIR__ . '/../functions.php';

    $results = stampaTutto($conn, 'stanze');

?>