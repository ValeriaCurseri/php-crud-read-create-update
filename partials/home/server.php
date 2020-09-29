<?php 

    include __DIR__ . '/../database.php';

    $sql = "SELECT stanze.id, stanze.room_number, stanze.floor, configurazioni.title FROM stanze INNER JOIN prenotazioni ON prenotazioni.stanza_id = stanze.id INNER JOIN configurazioni ON prenotazioni.configurazione_id = configurazioni.id";     // seleziono i campi room number e floor dalla tabella stanze
    $result = $conn->query($sql);                       // creo una query della mia select

    if ($result && $result->num_rows > 0) {             // se la var result esiste e ha più di 10 righe
        $results = [];                                  // creo un array vuoto per memorizzarci dentro le righe
        while($row = $result->fetch_assoc()) {          // ciclo while: finche ci sono elementi seleziona tutti gli array associativi e stamoa le proprietà richieste nella select [estrae ogni riga e le va a inserire in una variabile]
            $results[] = $row;
        }
    } elseif ($result) {
            echo "0 results";
    } else {
        echo "query error";
    }

?>