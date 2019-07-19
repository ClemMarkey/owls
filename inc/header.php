<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>La Chouette</title>
</head>

<body class="orange lighten-5">

    <nav class="orange">
        <div class="nav-wrapper">
            <a href="index.php"><img class="brand-logo" src="img/ui/owl.png" alt="Logo chouette" id="logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <?php include 'PHP/nav.php' ?>
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <?php include 'PHP/nav.php' ?>
            </ul>
        </div>
    </nav>