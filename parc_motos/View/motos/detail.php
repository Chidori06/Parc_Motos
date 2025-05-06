<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'View/parts/styles.php';
    include 'View/parts/navbar.php';
    include 'View/parts/header.php';
    ?>
    <title>Parc Motos</title>
</head>

<body>
    <div class="container">
        <a class="btn btn-danger mt-5" href="index.php?controller=moto&action=list">Revenir à la liste</a>

        <h1 class="text-center">
            <?php
            echo ($moto->getMark()) ?>
        </h1>

        <div class="col-md-12 text-center">

            <h2>
                <?php echo ($moto->getModel()); ?>
            </h2>

            <div class="picture">
                <?php
                if (!is_null($moto->getPicture())) {
                    ?>
                    <img class="img img-thumbnail" src="Public/uploads/<?php echo ($moto->getPicture()); ?> ">
                    <?php
                } else {
                    echo ('<img class="img img-thumbnail" src="Public/images/no-picture.jpg">');
                }
                ?>
                <h3>Type de moto :
                    <?php echo ($moto->getType()); ?>
                </h3>
            </div>
        </div>

    </div>
    <?php
    include 'View/parts/scripts.php';
    include 'View/parts/footer.php';
    ?>
</body>

</html>