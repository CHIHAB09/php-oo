<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Titre de l'article</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/custom.min.css" media="screen">
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body id="page-top">
<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <a href="./" class="navbar-brand">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link" href="?connect">Connexion</a>
                </li>
            </ul>

        </div>
    </div>
</div>

<div class="container">

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12 mx-auto">

                    <h1>Titre de l'article</h1>
                <hr>
                <h3>Exercice: Ici le détail de l'article par son ID ($_GET['idarticle'])</h3>
                <p>Au format comme l'article ci-dessous, il est complet et a le login joint de l'utilisateur qui l'a écrit</p>
                <p>Quand on clique sur l'auteur on a tous les articles écrits par celui-ci</p>
                <p>Le texte est complet et le retour à la ligne est automatique</p>
                <hr>
                <h4>Titre News 2</h4>
                <p>Ici le texte complet avec des<br>retours à la ligne <br> automatiques</p>
                <h5>Par <a href="?idauteur=3">login2</a> le 2020-01-02 09:11:47</h5>

                <hr>
                <a href="#page-top">Retour en haut</a>
                <hr>
            </div>

        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
