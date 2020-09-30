<?php 
    include __DIR__ . '/partials/template/header.php';
    include __DIR__ . '/partials/update/server.php';
?>

<div class="container">

    <div class="mt-5 mb-5">

        <form action="partials/update/server-edit.php" method="post">
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input type="text" name="roomNumber" class="form-control" id="roomNumber" value="<?php echo $row['room_number'] ?>">
            </div>
            <div class="form-group">
                <label for="floor">Piano</label>
                <input type="text" name="floor" class="form-control" id="floor" value="<?php echo $row['floor'] ?>">
            </div>
            <div class="form-group">
                <label for="beds">Letti</label>
                <input type="text" name="beds" class="form-control" id="beds" value="<?php echo $row['beds'] ?>">
            </div>
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'] ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control bg-warning" value="MODIFICA">
            </div>
        
        </form>

    </div>

</div>

<?php 
    include __DIR__ . '/partials/template/footer.php';
?>