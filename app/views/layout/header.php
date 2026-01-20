<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitsport</title>
    <link rel="shortcut icon" href="/app/img/logo_fitsport.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@400;600&display=swap">
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="/app/img/logo_fitsport.png" alt="Logo" width="30" height="24"
                 class="d-inline-block align-text-top"> FITSPORT
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=abonnement&action=index">ABONNEMENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=activite&action=index">Activités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=communication&action=contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=communication&action=apropos">À PROPOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=auth&action=login">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


