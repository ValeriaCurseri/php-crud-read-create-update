<?php 

include __DIR__ . '/partials/view/server.php';

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read & Delete</title>
    <link rel="stylesheet" href="dist/app.css">
</head>
<body>
    <div class="container">
        <div class="mt-5 mb-5">
            <a href="index.php">Torna alla lista completa</a>
            <ul class="list-group">
                <li class="list-group-item"><strong>ID: </strong><?php echo $row['id']; ?></li>
                <li class="list-group-item"><strong>Numero della stanza: </strong><?php echo $row['room_number']; ?></li>
                <li class="list-group-item"><strong>Piano: </strong><?php echo $row['floor']; ?></li>
            </ul>
        </div>
    </div>
</body>
</html>