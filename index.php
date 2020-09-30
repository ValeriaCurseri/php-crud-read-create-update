<?php 
    include __DIR__ . '/partials/template/header.php';
    include __DIR__ . '/partials/home/server.php';
?>

<div class="container">
    <div class="mt-5 mb-5">
        <h2>Tutte le stanze</h2>
        <?php if(!empty($_GET['id'])){ 
            $stanzaCancellata = $_GET['id'] ?>
            <div class="alert mt-3 mb-3 bg-warning">
                <?php echo "La stanza $stanzaCancellata è stata cancellata"; ?>
            </div>
        <?php }?>

        <table class="table">
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
                        <td><a href="view.php?id=<?php echo $room['id']; ?>">VIEW</a></td>
                        <td><a href="update.php?id=<?php echo $room['id']; ?>">UPDATE</a></td>
                        <td>
                            <form action="./partials/delete/server.php" method="post">
                                <input type="submit" name="" value="DELETE" class="btn btn-danger">
                                <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php 
    include __DIR__ . '/partials/template/footer.php';
?>