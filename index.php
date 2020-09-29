<?php 

include __DIR__ . '/partials/home/server.php';

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
        <table class="table mt-5 mb-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero stanza</th>
                    <th>Piano</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($results as $room){ ?>
                    <tr>
                        <td><?php echo $room['id']; ?></td>
                        <td><?php echo $room['room_number']; ?></td>
                        <td><?php echo $room['floor']; ?></td>
                        <td><a href="">VIEW</a></td>
                        <td><a href="">UPDATE</a></td>
                        <td><a href="">DELETE</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>