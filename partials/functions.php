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
}


?>