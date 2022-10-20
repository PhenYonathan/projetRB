<?php
    include "controller/getEleve.php";
?>

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

    <title>Se connecter</title>
</head>
<body class="body">

    <div class="content-form">
        <div class="header-form">
            <h1>Se connecter</h1>
            <p>Merci d'utilisé votre mail et mot de passe</p>
        </div>
        <form class="form" action="connect.php" method="POST">
            <div class="row">
                <div class="col">
                    <label>
                        Mail :
                        <input placeholder="Mail" class="form-control" type="text" name="email">
                    </label><br>
                </div>
                <div class="col">
                    <label>
                        Password :
                        <input placeholder="Password" class="input form-control" type="text" name="password">
                    </label><br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input class="input form-control" type="submit">
                </div>
            </div>
        </form>
    </div>

    <div class="content-form">
        <?php



        echo $_POST["email"], $_POST["password"];

        ?>
    </div>

</html>
</body>
