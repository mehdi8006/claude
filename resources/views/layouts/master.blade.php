<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annoncia - Petites Annonces</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fa;
            --accent-color: #1cc88a;
        }
        
        /* Styles personnalisés */
        .hero-section {
            background: linear-gradient(to right, rgba(78, 115, 223, 0.9), rgba(28, 200, 138, 0.9)), 
                        url('/api/placeholder/1200/400') center/cover no-repeat;
            padding: 4rem 0;
            color: white;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }
        
        .search-box {
            background-color: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            margin-top: -3rem;
            position: relative;
            z-index: 10;
        }
        
        .category-card {
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            height: 100%;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        
        .category-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .announcement-card {
            transition: transform 0.3s;
            height: 100%;
        }
        
        .announcement-card:hover {
            transform: translateY(-5px);
        }
        
        .footer {
            background-color: var(--secondary-color);
            padding: 3rem 0;
            margin-top: 3rem;
        }
        
        .nav-link.active {
            color: var(--accent-color) !important;
            font-weight: bold;
        }
        
        /* Badge pour les annonces récentes */
        .badge-new {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--accent-color);
        }
        
        /* Styles pour le modal de connexion/inscription */
        .auth-tabs .nav-link {
            border-radius: 0;
            padding: 1rem;
        }
        
        .form-control-lg {
            padding: 0.8rem 1rem;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
@yield('nav')
<!-- SECTION HERO ET RECHERCHE -->
@yield('main')
<!-- PIED DE PAGE -->
@yield('footer')
@yield('appelpage')
<!-- MODAL AUTHENTIFICATION -->

<!-- PAGE DE DÉTAIL D'ANNONCE (Modal) -->


<!-- PAGE DE RECHERCHE AVANCÉE (Modal) -->



<!-- SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    // Script pour initialiser les composants Bootstrap
    document.addEventListener('DOMContentLoaded', function() {
        // Activer tous les tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
        
        // Gérer l'onglet d'authentification à afficher selon le bouton cliqué
        document.querySelectorAll('[data-auth-mode]').forEach(function(element) {
            element.addEventListener('click', function() {
                var mode = element.getAttribute('data-auth-mode');
                if (mode === 'register') {
                    document.getElementById('register-tab').click();
                } else {
                    document.getElementById('login-tab').click();
                }
            });
        });
        
        // Simuler l'affichage du détail d'une annonce quand on clique sur une annonce
        document.querySelectorAll('.announcement-card').forEach(function(card) {
            card.addEventListener('click', function() {
                var announcementModal = new bootstrap.Modal(document.getElementById('announcementDetailModal'));
                announcementModal.show();
            });
        });
        
        // Ouvrir le modal de recherche avancée
        document.querySelector('[data-bs-target="#advancedSearch"]').addEventListener('click', function(e) {
            e.preventDefault();
            var searchModal = new bootstrap.Modal(document.getElementById('advancedSearchModal'));
            searchModal.show();
        });
    });
</script>
</body>
</html>