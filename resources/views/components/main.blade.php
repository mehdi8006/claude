<div class="container mt-4">
    <div class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Trouvez tout ce que vous cherchez</h1>
            <p class="lead mb-4">Des milliers d'annonces à portée de clic : immobilier, véhicules, électronique, emploi et bien plus</p>
        </div>
    </div>
    
    <!-- COMPOSANT: BARRE DE RECHERCHE AVANCÉE -->
    <div class="container">
        <div class="search-box">
            <form>
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                            <input type="text" class="form-control border-start-0" placeholder="Que cherchez-vous ?">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select class="form-select">
                            <option selected>Toutes les catégories</option>
                            <option>Immobilier</option>
                            <option>Véhicules</option>
                            <option>Emploi</option>
                            <option>Multimédia</option>
                            <option>Services</option>
                            <option>Maison</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fas fa-map-marker-alt text-muted"></i></span>
                            <select class="form-select border-start-0">
                                <option selected>Toutes les villes</option>
                                <option>Casablanca</option>
                                <option>Rabat</option>
                                <option>Marrakech</option>
                                <option>Fès</option>
                                <option>Tanger</option>
                                <option>Agadir</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">Rechercher</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <a href="#" class="text-decoration-none" data-bs-toggle="collapse" data-bs-target="#advancedSearch">
                            <i class="fas fa-sliders-h me-1"></i> Recherche avancée
                        </a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm btn-light">
                            <i class="fas fa-location-arrow me-1"></i> Autour de moi
                        </button>
                    </div>
                </div>
                
                <!-- COMPOSANT: FILTRES DE RECHERCHE AVANCÉE -->
                <div class="collapse mt-3" id="advancedSearch">
                    <div class="card card-body bg-light">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Sous-catégorie</label>
                                <select class="form-select">
                                    <option selected>Toutes</option>
                                    <option>Appartements</option>
                                    <option>Maisons</option>
                                    <option>Terrains</option>
                                    <option>Bureaux</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Commune</label>
                                <select class="form-select">
                                    <option selected>Toutes</option>
                                    <option>Maarif</option>
                                    <option>Ain Diab</option>
                                    <option>Gauthier</option>
                                    <option>Anfa</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Prix</label>
                                <div class="d-flex gap-2">
                                    <input type="number" class="form-control" placeholder="Min">
                                    <input type="number" class="form-control" placeholder="Max">
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-filter me-1"></i> Filtrer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- COMPOSANT: CATÉGORIES POPULAIRES -->
    <div class="mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fs-4 fw-bold">Catégories populaires</h2>
            <a href="#" class="text-decoration-none">Voir toutes <i class="fas fa-arrow-right ms-1"></i></a>
        </div>
        <div class="row g-4">
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-home category-icon"></i>
                        <h5 class="card-title fs-6">Immobilier</h5>
                        <p class="card-text text-muted small">4,321 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-car category-icon"></i>
                        <h5 class="card-title fs-6">Véhicules</h5>
                        <p class="card-text text-muted small">3,782 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-laptop category-icon"></i>
                        <h5 class="card-title fs-6">Multimédia</h5>
                        <p class="card-text text-muted small">2,954 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-briefcase category-icon"></i>
                        <h5 class="card-title fs-6">Emploi</h5>
                        <p class="card-text text-muted small">1,876 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-couch category-icon"></i>
                        <h5 class="card-title fs-6">Maison</h5>
                        <p class="card-text text-muted small">1,543 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-handshake category-icon"></i>
                        <h5 class="card-title fs-6">Services</h5>
                        <p class="card-text text-muted small">987 annonces</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- COMPOSANT: ANNONCES RÉCENTES -->
    <div class="mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fs-4 fw-bold">Annonces récentes</h2>
            <div class="d-flex gap-2">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-secondary active">
                        <i class="fas fa-th-large"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
                <select class="form-select form-select-sm" style="width: 180px;">
                    <option selected>Trier par: Plus récentes</option>
                    <option>Trier par: Prix croissant</option>
                    <option>Trier par: Prix décroissant</option>
                    <option>Trier par: Popularité</option>
                </select>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Annonce 1 -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card announcement-card h-100">
                    <div class="position-relative">
                        <img src="/api/placeholder/300/200" class="card-img-top" alt="Annonce">
                        <span class="badge bg-success badge-new">Nouveau</span>
                        <button class="btn btn-sm btn-light position-absolute bottom-0 end-0 m-2">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary">Immobilier</span>
                            <span class="text-success fw-bold">12,500 DH</span>
                        </div>
                        <h5 class="card-title">Appartement moderne au centre ville</h5>
                        <p class="card-text text-muted small">2 chambres, 1 salon, entièrement équipé et rénové...</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i> Casablanca, Maarif</small>
                            <small class="text-muted"><i class="far fa-clock me-1"></i> Aujourd'hui</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Annonce 2 -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card announcement-card h-100">
                    <div class="position-relative">
                        <img src="/api/placeholder/300/200" class="card-img-top" alt="Annonce">
                        <button class="btn btn-sm btn-light position-absolute bottom-0 end-0 m-2">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary">Véhicules</span>
                            <span class="text-success fw-bold">85,000 DH</span>
                        </div>
                        <h5 class="card-title">Dacia Duster 2020 Excellent état</h5>
                        <p class="card-text text-muted small">Diesel, 50,000 km, première main, toutes options...</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i> Rabat, Centre</small>
                            <small class="text-muted"><i class="far fa-clock me-1"></i> Hier</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Annonce 3 -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card announcement-card h-100">
                    <div class="position-relative">
                        <img src="/api/placeholder/300/200" class="card-img-top" alt="Annonce">
                        <span class="badge bg-success badge-new">Nouveau</span>
                        <button class="btn btn-sm btn-light position-absolute bottom-0 end-0 m-2">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary">Multimédia</span>
                            <span class="text-success fw-bold">3,500 DH</span>
                        </div>
                        <h5 class="card-title">iPhone 12 Pro Max 128Go</h5>
                        <p class="card-text text-muted small">Comme neuf, débloqué tout opérateur, avec accessoires...</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i> Marrakech</small>
                            <small class="text-muted"><i class="far fa-clock me-1"></i> Aujourd'hui</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Annonce 4 -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card announcement-card h-100">
                    <div class="position-relative">
                        <img src="/api/placeholder/300/200" class="card-img-top" alt="Annonce">
                        <button class="btn btn-sm btn-light position-absolute bottom-0 end-0 m-2">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary">Emploi</span>
                            <span class="text-success fw-bold">15,000 DH</span>
                        </div>
                        <h5 class="card-title">Développeur Web Full Stack</h5>
                        <p class="card-text text-muted small">CDI, expérience 3 ans min, React/Node.js, télétravail...</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i> Casablanca, Sidi Maarouf</small>
                            <small class="text-muted"><i class="far fa-clock me-1"></i> Il y a 2 jours</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- COMPOSANT: PAGINATION -->
        <div class="d-flex justify-content-center mt-5">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- COMPOSANT: VILLES POPULAIRES -->
    <div class="mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fs-4 fw-bold">Villes populaires</h2>
            <a href="#" class="text-decoration-none">Voir toutes <i class="fas fa-arrow-right ms-1"></i></a>
        </div>
        <div class="row g-4">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-city category-icon"></i>
                        <h5 class="card-title fs-6">Casablanca</h5>
                        <p class="card-text text-muted small">12,543 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-city category-icon"></i>
                        <h5 class="card-title fs-6">Rabat</h5>
                        <p class="card-text text-muted small">7,821 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-city category-icon"></i>
                        <h5 class="card-title fs-6">Marrakech</h5>
                        <p class="card-text text-muted small">6,432 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-city category-icon"></i>
                        <h5 class="card-title fs-6">Tanger</h5>
                        <p class="card-text text-muted small">5,217 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-city category-icon"></i>
                        <h5 class="card-title fs-6">Fès</h5>
                        <p class="card-text text-muted small">4,128 annonces</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card category-card text-center p-3">
                    <div class="card-body">
                        <i class="fas fa-city category-icon"></i>
                        <h5 class="card-title fs-6">Agadir</h5>
                        <p class="card-text text-muted small">3,876 annonces</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- COMPOSANT: BANNIÈRE CTA -->
    <div class="mt-5">
        <div class="card bg-primary text-white">
            <div class="card-body p-4 text-center">
                <h3 class="mb-3">Vous avez quelque chose à vendre ?</h3>
                <p class="mb-4">Publiez votre annonce gratuitement en quelques minutes et atteignez des milliers d'acheteurs potentiels</p>
                <button class="btn btn-light btn-lg px-4" data-bs-toggle="modal" data-bs-target="#authModal" data-auth-mode="register">
                    <i class="fas fa-plus-circle me-2"></i> Déposer une annonce
                </button>
            </div>
        </div>
    </div>
</div>
