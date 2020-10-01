<?php 
include __DIR__ . '/partials/template/header.php';
include __DIR__ . '/partials/view/server.php';
?>

<div class="container">
    <div class="mt-5 mb-5">
        <h2>Dettaglio stanza</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>ID: </strong><?php echo $row['id']; ?></li>
            <li class="list-group-item"><strong>Numero della stanza: </strong><?php echo $row['room_number']; ?></li>
            <li class="list-group-item"><strong>Piano: </strong><?php echo $row['floor']; ?></li>
            <li class="list-group-item"><strong>Letti: </strong><?php echo $row['beds']; ?></li>
        </ul>
    </div>
</div>

<?php 
    include __DIR__ . '/partials/template/footer.php';
?>