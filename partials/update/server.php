<?php 

    include __DIR__ . '/../database.php';

    $id = $_GET['id'];

    $sql = "SELECT id, room_number, floor, beds FROM stanze WHERE id = $id";     // seleziono i campi dalla tabella stanze
    $result = $conn->query($sql);                       // creo una query della mia select

    if ($result && $result->num_rows > 0) {             // se la var result esiste e ha più di 10 righe
        $row = $result->fetch_assoc();         // ciclo while: finche ci sono elementi seleziona tutti gli array associativi e stamoa le proprietà richieste nella select [estrae ogni riga e le va a inserire in una variabile]
    } elseif ($result) {
            echo "0 results";
    } else {
        echo "query error";
    }

?>