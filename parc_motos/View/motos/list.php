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

        <a class="btn btn-danger mt-5" href="index.php?controller=moto&action=add">Ajouter une moto</a>
        <?php
        if (count($allMotos) == 0) {
            echo ('<h1 class="text-center text-danger">
                Il n\'y a pas de motos dans la base de données</h1>');
        } else {
            ?>
            <h1>Toutes nos Motos</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Visuel</th>
                        <th scope="col">Marque</th>
                        <th scope="col">Modèle</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($allMotos as $moto) {
                        echo ('<tr>
                        <th scope="row">' . $moto->getId() . '</th>');
                        if (!is_null($moto->getPicture())) {
                            echo ('<td><img class="img img-thumbnail" style="max-width:100px;"
                            src="Public/uploads/' . $moto->getPicture() . '"></td>');
                        } else {
                            echo ('<td><img class="img img-thumbnail" style="max-width:100px;" src="Public/images/no-picture.jpg"></td>');
                        }
                        echo ('<td>' . $moto->getMark() . '</td>
                    <td>' . $moto->getModel() . '</td>
                    <td>' . $moto->getType() . '</td>
                    <td><a href="index.php?controller=moto&action=detail&id=' . $moto->getId() . '">Voir le détail</a></td>
                    <td><a href="index.php?controller=moto&action=delete&id=' . $moto->getId() . '">Supprimer</a></td></tr>');
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
        ?>
    </div>
    <?php
    include 'View/parts/scripts.php';
    include 'View/parts/footer.php';
    ?>
</body>

</html>