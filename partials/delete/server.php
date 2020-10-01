<?php 

    include __DIR__ . '/../database.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM stanze WHERE id = ?";   // seleziono i campi dalla tabella stanze sostituendo all'id il segnaposto ?
    $stmt = $conn->prepare($sql);               // creo una connessione con sql
    $stmt->bind_param("i", $id);                // sostituisco al placeholder il valore di $id che deve essere un numero
    $stmt->execute();                           // eseguo il tutto
    
    if ($stmt && $stmt->affected_rows > 0){     // se $stmt è stato eseguito e la modifica è stata effettuata reindirizzo all'index
        header("Location: $basepath/index.php?idCancellato=$id"); // quando la cancellazione è stata fatta lo rimando all'index.php
    } else {
        echo "La stanza non è stata cancellata";
    }
?>