<div class="card">

    <?php
    echo '<image src= "data:image/jpeg;base64, ' . $row['image'] . ' " "class="card-img-top" alt="..." width="240" height="240"  >';
    ?>

    <div class="card-title"><?= $row['name'] ?></div>
    <div class="card-body">
        <?= $row['description'] ?>
        <hr>
        <?= $row['price'] ?>
    </div>

</div>