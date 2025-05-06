<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container-fluid">
        <img src="Public/images/logomoto-pngtree.png" alt="Logo de moto" style="max-width:50px; max-height:50px;">
        <a class="navbar-brand" href="index.php?controller=moto&action=list">Parc Motos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="index.php?controller=moto&action=list">Accueil</a>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="index.php?controller=moto&action=sortBy&type=Enduro">Enduro</a>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="index.php?controller=moto&action=sortBy&type=Custom">Custom</a>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="index.php?controller=moto&action=sortBy&type=Sportive">Sportive</a>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="index.php?controller=moto&action=sortBy&type=Roadster">Roadster</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php?controller=security&action=logout">Se
                        déconnecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>