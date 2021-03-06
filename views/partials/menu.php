<nav class="navbar navbar-expand-lg navbar-dark bg-dark main-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= PUBLIC_PATH ?>"><i class="fas fa-lemon main-logo"></i> WikiFruit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link<?= (ROUTE == '/') ? ' active' : ''; ?>" href="<?= PUBLIC_PATH ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= (ROUTE == '/fruits/liste/') ? ' active' : ''; ?>" href="<?= PUBLIC_PATH . 'fruits/liste/' ?>">Liste des fruits</a>
                </li>
                <?php

                if(isConnected()){
                    ?>

                    <li class="nav-item">
                        <a class="nav-link<?= (ROUTE == '/deconnexion/') ? ' active' : ''; ?>" href="<?= PUBLIC_PATH . 'deconnexion/' ?>">Déconnexion</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link<?= (ROUTE == '/fruits/ajouter-un-fruit/') ? ' active' : ''; ?>" href="<?= PUBLIC_PATH . 'fruits/ajouter-un-fruit/' ?>">Ajouter un fruit</a>
                    </li>

                    <?php
                } else {
                    ?>

                    <li class="nav-item">
                        <a class="nav-link<?= (ROUTE == '/creer-un-compte/') ? ' active' : ''; ?>" href="<?= PUBLIC_PATH . 'creer-un-compte/' ?>">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= (ROUTE == '/connexion/') ? ' active' : ''; ?>" href="<?= PUBLIC_PATH . 'connexion/' ?>">Connexion</a>
                    </li>

                    <?php
                }

                ?>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>