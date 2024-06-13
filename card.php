<div class="card">

    <img src="<?php echo $row['image'];?>" class="card-img-top" alt="..." width="90" height="160">
    <div class="card-title"><?= $row['name']?></div>
    <div class ="card-body">
        <?= $row['description']?>
        <hr>
        <?= $row['price']?>
    </div>
    <div class="card-footer">
    <a href="" class="btn btn-primary">Auf die Beobachtungsliste</a>
    <a href="" class="btn btn-success">In den Warenkorb</a>
    </div>
</div>