<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= ucfirst($page); ?> - Bricole</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-4.0.0-beta.2.min.css">
</head>
<body class="bg-info">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php?page=home">Bricole</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>