<?php 

    include __DIR__ . '/../database.php';

    $sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $roomNumber, $floor, $beds);

    // set parameters and execute
    $roomNumber = $_POST['roomNumber'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];
    $stmt->execute();

    if ($stmt && $stmt->affected_rows > 0) {
        header("Location: $basepath/index.php?stanza=$roomNumber");
    } else {
        echo "La stanza non è stata aggiunta";
    }

    $stmt->close();
    $conn->close();

?>