<?php 
    include __DIR__ . '/partials/template/header.php';
?>

<div class="container">

    <div class="mt-5 mb-5">
        <h2>Aggiungi una nuova stanza</h2>
        <form action="partials/create/server.php" method="post">
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input type="text" name="roomNumber" class="form-control" id="roomNumber" placeholder="Inserisci il numero della stanza">
            </div>
            <div class="form-group">
                <label for="floor">Piano</label>
                <input type="text" name="floor" class="form-control" id="floor" placeholder="Inserisci il piano">
            </div>
            <div class="form-group">
                <label for="beds">Letti</label>
                <input type="text" name="beds" class="form-control" id="beds" placeholder="Inserisci il numero dei letti">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control bg-warning" value="INSERISCI">
            </div>
        
        </form>

    </div>

</div>

<?php 
    include __DIR__ . '/partials/template/footer.php';
?>