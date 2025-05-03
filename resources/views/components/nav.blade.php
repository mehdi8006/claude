<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <i class="fas fa-bullhorn text-primary me-2"></i>
            <span class="fw-bold fs-4">Annoncia</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="fas fa-home me-1"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-layer-group me-1"></i> Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-map-marker-alt me-1"></i> Villes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-info-circle me-1"></i> À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-question-circle me-1"></i> Aide</a>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#authModal" data-auth-mode="login">
                    <i class="fas fa-sign-in-alt me-1"></i> Connexion
                </button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authModal" data-auth-mode="register">
                    <i class="fas fa-user-plus me-1"></i> Inscription
                </button>
            </div>
        </div>
    </div>
</nav>