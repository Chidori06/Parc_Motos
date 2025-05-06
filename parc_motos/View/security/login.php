<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'View/parts/styles.php';

    ?>
    <title>Parc Motos</title>
</head>

<body class="bg-image" style="background-image: url('Public/images/motos.jpg');">
    <div class="container">
        <div class="col-md-4 justify-content-center">
            <h1 class="black">Se connecter</h1>
            <form method="post">
                <div class="form-group">
                    <label class="black">Nom d'utilisateur</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label class="black">Mot de Passe</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" value="Se connecter" class="btn btn-dark mt-2">
            </form>
            <?php if ($error) {
                echo ('<div class="text-danger">Identifiants incorrects</div>');
            } ?>
        </div>
    </div>
    <?php
    include 'View/parts/scripts.php';
    ?>
</body>

</html>