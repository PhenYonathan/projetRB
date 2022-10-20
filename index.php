<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../staticfiles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Projet | Yonathan Cardoso</title>
</head>
<body class="body">

<div class="header">
    <h1 class="h1">Bienvenu dans l'espace de gestion</h1>
</div>

<div class="bdd">
    <p class="txt-content"><i>Vérifier l'état de connexion à la base de données :</i></p>

    <div class="connect">
        <?php

        include 'model/functionsUtils.php';
        $connexion = FunctionsUtils::activeCnx();

        if ($connexion != null) {
            echo "<p class='txt-content'>Connexion à la base de donnée réussie</p>";

            ?>
            <a href="views/connect.php"><button class="btn btn-primary">Se connecter</button></a>
            <?php

        } else {
            echo "<p class='txt-content'> ! Connexion à la base de donnée échouée ! </p>";
        }


        ?>
    </div>
</div>
</body>
</html>
