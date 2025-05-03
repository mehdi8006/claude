<div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 d-none d-md-block">
                            <div class="bg-primary h-100 p-4 text-white d-flex flex-column justify-content-center" style="min-height: 400px; border-radius: 0 0 0 0.3rem;">
                                <h3 class="fw-bold mb-4">Bienvenue sur Annoncia</h3>
                                <p>La plateforme de petites annonces la plus simple et sécurisée.</p>
                                <ul class="list-unstyled mt-4">
                                    <li class="mb-3"><i class="fas fa-check-circle me-2"></i> Publication gratuite</li>
                                    <li class="mb-3"><i class="fas fa-check-circle me-2"></i> Paiement sécurisé</li>
                                    <li class="mb-3"><i class="fas fa-check-circle me-2"></i> Vérification des annonces</li>
                                    <li class="mb-3"><i class="fas fa-check-circle me-2"></i> Messagerie intégrée</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7 p-4">
                            <ul class="nav nav-tabs auth-tabs mb-4" id="authTab" role="tablist">
                                <li class="nav-item w-50" role="presentation">
                                    <button class="nav-link active w-100" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Connexion</button>
                                </li>
                                <li class="nav-item w-50" role="presentation">
                                    <button class="nav-link w-100" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Inscription</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="authTabContent">
                                <!-- Onglet Connexion -->
                                <div class="tab-pane fade show active" id="login" role="tabpanel">
                                    <form>
                                        <div class="mb-3">
                                            <label for="loginEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control form-control-lg" id="loginEmail">
                                        </div>
                                        <div class="mb-3">
                                            <label for="loginPassword" class="form-label">Mot de passe</label>
                                            <input type="password" class="form-control form-control-lg" id="loginPassword">
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">
                                                    Se souvenir de moi
                                                </label>
                                            </div>
                                            <a href="#" class="text-decoration-none">Mot de passe oublié?</a>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg w-100">Se connecter</button>
                                    </form>
                                    <div class="text-center mt-4">
                                        <p class="text-muted">Ou connectez-vous avec</p>
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-outline-secondary"><i class="fab fa-google"></i></button>
                                            <button class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i></button>
                                            <button class="btn btn-outline-secondary"><i class="fab fa-apple"></i></button>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Onglet Inscription -->
                                <div class="tab-pane fade" id="register" role="tabpanel">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName" class="form-label">Prénom</label>
                                                <input type="text" class="form-control form-control-lg" id="firstName">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName" class="form-label">Nom</label>
                                                <input type="text" class="form-control form-control-lg" id="lastName">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="registerEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control form-control-lg" id="registerEmail">
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Téléphone</label>
                                            <input type="tel" class="form-control form-control-lg" id="phone">
                                        </div>
                                        <div class="mb-3">
                                            <label for="registerPassword" class="form-label">Mot de passe</label>
                                            <input type="password" class="form-control form-control-lg" id="registerPassword">
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                                            <input type="password" class="form-control form-control-lg" id="confirmPassword">
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" id="terms">
                                            <label class="form-check-label" for="terms">
                                                J'accepte les <a href="#" class="text-decoration-none">conditions d'utilisation</a> et la <a href="#" class="text-decoration-none">politique de confidentialité</a>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg w-100">S'inscrire</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>