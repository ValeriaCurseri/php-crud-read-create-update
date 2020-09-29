<?php

include __DIR__ . '/env.php';

    // Connect
    $conn = new mysqli($servername, $username, $password,
    $dbname);
    
    // Check connection
    if ($conn && $conn->connect_error) {    // se la variabile $conn esiste MA ci sono degli errori di connessione
        echo "Connessione fallita: " . $conn->connect_error;
        die();
    }

 ?>