<div class="modal fade" id="advancedSearchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Recherche avancée</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Catégorie</label>
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
                        <div class="col-md-6">
                            <label class="form-label">Sous-catégorie</label>
                            <select class="form-select">
                                <option selected>Toutes les sous-catégories</option>
                                <!-- Options dynamiques selon la catégorie -->
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Ville/Région</label>
                            <select class="form-select">
                                <option selected>Toutes les villes</option>
                                <option>Casablanca</option>
                                <option>Rabat</option>
                                <option>Marrakech</option>
                                <option>Fès</option>
                                <option>Tanger</option>
                                <option>Agadir</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Commune</label>
                            <select class="form-select">
                                <option selected>Toutes les communes</option>
                                <!-- Options dynamiques selon la ville -->
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Prix</label>
                            <div class="d-flex gap-2">
                                <input type="number" class="form-control" placeholder="Min">
                                <input type="number" class="form-control" placeholder="Max">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mots-clés</label>
                            <input type="text" class="form-control" placeholder="Rechercher dans les titres et descriptions">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Date de publication</label>
                        <select class="form-select">
                            <option selected>Tous</option>
                            <option>Aujourd'hui</option>
                            <option>Cette semaine</option>
                            <option>Ce mois-ci</option>
                        </select>
                    </div>
                    
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="onlyPhotos">
                        <label class="form-check-label" for="onlyPhotos">
                            Uniquement les annonces avec photos
                        </label>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Rechercher</button>
                        <button class="btn btn-outline-secondary" type="reset">Réinitialiser</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>