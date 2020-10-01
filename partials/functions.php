<?php 

function stampaTutto($conn, $table){
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $results = [];
        while($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    } elseif ($result) {
        $results = "";
    } else {
        $results = false;
    }
    return $results;

    $conn->close();
}


function stampaDettagli($conn, $table, $id){
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->query($sql);
   
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } elseif ($result) {
        $row = "";
    } else {
        $row = false;
    }

    return $row;

    $conn->close();
}

function rimuoviId($conn, $table, $id, $basepath){
    $sql = "DELETE FROM $table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    var_dump($stmt);
    var_dump($conn);
    
    if ($stmt && $stmt->affected_rows > 0){
        header("Location: $basepath/index.php?idCancellato=$id");
    } else {
        echo "La stanza non è stata cancellata";
    }

    $stmt->close();
    $conn->close();

}

?>