<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'View/parts/styles.php';
    include 'View/parts/navbar.php';
    include 'View/parts/header.php';
    require "View/parts/function.php";
    ?>
    <title>Parc Motos</title>
</head>

<body>

    <div class="container">
        <a class="btn btn-danger mt-5" href="index.php?controller=moto&action=list">Retour à la liste</a>
        <h1 class="text-center">Ajouter une moto</h1>



        <form method="post" enctype="multipart/form-data">
            <div class="form-group mt-3">
                <label>Marque du véhicule</label>
                <input class="form-control <?php echo (displayBsClass('mark', $errors)); ?>" name="mark"
                    value="<?php echo (keepValue("mark")); ?>" placeholder="Marque">

                <?php
                displayErrorMessage("mark", $errors);
                ?>

            </div>
            <div class="form-group mt-3">
                <label>Modèle du véhicule</label>
                <input class="form-control <?php echo (displayBsClass('model', $errors)); ?>" name="model"
                    value="<?php echo (keepValue("model")); ?>" placeholder="Modèle">

                <?php
                displayErrorMessage("model", $errors);
                ?>
            </div>
            <div class="form-group mt-3">
                <label>Visuel de la moto</label>
                <input type="file" name="picture"
                    class="form-control <?php echo (displayBsClass("picture", $errors)); ?>">
                <?php
                displayErrorMessage("picture", $errors);
                ?>
            </div>
            <div class="form-group mt-3">
                <label class="">Type</label>
                <select name="type" class="form-select <?php echo (displayBsClass("type", $errors)); ?>">
                    <option>Choisissez un type de moto</option>
                    <?php
                    foreach (Moto::$allowedType as $moto) {
                        $selected = '';
                        if ($_POST["type"] == $moto) {
                            $selected = "selected";
                        }
                        echo ('<option ' . $selected . ' value="' . $moto . '">' . $moto . '</option>');
                    }

                    ?>

                </select>
                <?php
                displayErrorMessage("type", $errors);
                ?>
            </div>
            <input type="submit" value="Ajouter" class="btn btn-danger mt-3 mb-5">
        </form>

    </div>
    <?php
    include 'View/parts/scripts.php';
    include 'View/parts/footer.php';
    ?>
</body>

</html>