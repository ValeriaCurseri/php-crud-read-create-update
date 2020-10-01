<?php 

    include __DIR__ . '/../database.php';

    $id = $_POST['id'];
    $roomNumber = $_POST['roomNumber'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];

    $sql = "UPDATE stanze SET room_number = ?, floor = ?, beds = ? WHERE id = ?";     // aggiorno la tabella stanze per i seguenti dati (li proteggo usando il placeholder ?)
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('iiii', $roomNumber, $floor, $beds, $id);
    $stmt->execute();
    var_dump($stmt);

    if ($stmt && $stmt->affected_rows > 0) {        // se lo statemente è stato eseguito e la modifica è stata fatta
        header("Location: $basepath/view.php?id=$id");  // rimando l'utente alla view della stanza modificata
    } elseif ($stmt && $stmt->affected_rows == 0) {
        echo "Non hai modificato nessun dato";
    } else {
        die('errore, hai provato a inserire un dato non valido');
    }

?>