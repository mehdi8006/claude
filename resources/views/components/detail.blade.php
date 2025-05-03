<div class="modal fade" id="announcementDetailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Détails de l'annonce</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 p-4">
                            <!-- Galerie d'images -->
                            <div id="carouselAnnouncement" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselAnnouncement" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#carouselAnnouncement" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#carouselAnnouncement" data-bs-slide-to="2"></button>
                                </div>
                                <div class="carousel-inner rounded">
                                    <div class="carousel-item active">
                                        <img src="a.jpg" class="d-block w-100" alt="Annonce">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="b.jpg" class="d-block w-100" alt="Annonce">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="c.jpg" class="d-block w-100" alt="Annonce">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAnnouncement" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselAnnouncement" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                            
                            <!-- Informations détaillées -->
                            <div>
                                <h3 class="mb-3">Appartement moderne au centre ville</h3>
                                <div class="d-flex justify-content-between mb-4">
                                    <span class="badge bg-primary fs-6">Immobilier</span>
                                    <h4 class="text-success fw-bold">12,500 DH</h4>
                                </div>
                                
                                <div class="mb-4">
                                    <h5 class="mb-3">Description</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                
                                <div class="mb-4">
                                    <h5 class="mb-3">Caractéristiques</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item d-flex justify-content-between px-0">
                                                    <span>Type</span>
                                                    <span class="fw-bold">Appartement</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between px-0">
                                                    <span>Superficie</span>
                                                    <span class="fw-bold">95 m²</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between px-0">
                                                    <span>Chambres</span>
                                                    <span class="fw-bold">2</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item d-flex justify-content-between px-0">
                                                    <span>Salles de bain</span>
                                                    <span class="fw-bold">1</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between px-0">
                                                    <span>Étage</span>
                                                    <span class="fw-bold">3ème</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between px-0">
                                                    <span>Meublé</span>
                                                    <span class="fw-bold">Oui</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <h5 class="mb-3">Localisation</h5>
                                    <div class="bg-light p-3 rounded">
                                        <div class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Casablanca, Maarif</div>
                                        <div id="map" class="rounded" style="height: 200px; background-color: #e9ecef;">
                                            <!-- Emplacement pour la carte -->
                                            <div class="d-flex justify-content-center align-items-center h-100">
                                                <div class="text-center">
                                                    <i class="fas fa-map fa-3x mb-2 text-muted"></i>
                                                    <p class="mb-0 text-muted">Carte indisponible pour les visiteurs</p>
                                                    <p class="text-muted small">Connectez-vous pour voir la localisation exacte</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 bg-light p-4">
                            <!-- Carte du vendeur -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Informations sur le vendeur</h5>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary text-white rounded-circle p-3 me-3">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Ahmed M.</h6>
                                            <p class="text-muted mb-0 small">Membre depuis Février 2024</p>
                                        </div>
                                    </div>
                                    <p class="card-text mb-4">Pour contacter le vendeur, vous devez <a href="#" data-bs-toggle="modal" data-bs-target="#authModal">vous connecter</a> ou <a href="#" data-bs-toggle="modal" data-bs-target="#authModal" data-auth-mode="register">vous inscrire</a>.</p>
                                    <button class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#authModal">
                                        <i class="fas fa-comments me-2"></i> Contacter le vendeur
                                    </button>
                                    <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#authModal">
                                        <i class="fas fa-phone-alt me-2"></i> Voir le numéro
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Sécurité et conseils -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Conseils de sécurité</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-shield-alt text-muted me-2"></i> Vérifiez le bien avant tout paiement</li>
                                        <li class="mb-2"><i class="fas fa-shield-alt text-muted me-2"></i> Ne payez jamais par Western Union ou similaire</li>
                                        <li class="mb-2"><i class="fas fa-shield-alt text-muted me-2"></i> Visitez l'appartement de préférence accompagné</li>
                                        <li class="mb-2"><i class="fas fa-shield-alt text-muted me-2"></i> Méfiez-vous des prix anormalement bas</li>
                                    </ul>
                                    <button class="btn btn-outline-secondary w-100" data-bs-toggle="modal" data-bs-target="#authModal">
                                        <i class="fas fa-flag me-2"></i> Signaler cette annonce
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Annonces similaires -->
                            <div>
                                <h5 class="mb-3">Annonces similaires</h5>
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-4">
                                            <img src="/api/placeholder/100/100" class="img-fluid rounded-start h-100" alt="Annonce">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body py-2">
                                                <h6 class="card-title">Appartement 3 pièces</h6>
                                                <p class="card-text text-success mb-0">11,200 DH</p>
                                                <p class="card-text"><small class="text-muted">Casablanca, Gauthier</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-4">
                                            <img src="/api/placeholder/100/100" class="img-fluid rounded-start h-100" alt="Annonce">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body py-2">
                                                <h6 class="card-title">Studio meublé centre</h6>
                                                <p class="card-text text-success mb-0">8,500 DH</p>
                                                <p class="card-text"><small class="text-muted">Casablanca, Maarif</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-4">
                                            <img src="/api/placeholder/100/100" class="img-fluid rounded-start h-100" alt="Annonce">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body py-2">
                                                <h6 class="card-title">Appartement haut standing</h6>
                                                <p class="card-text text-success mb-0">15,800 DH</p>
                                                <p class="card-text"><small class="text-muted">Casablanca, Anfa</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>