@extends('base')
@section('title', 'Presentation')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
<!-- Ajoutez Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Conteneur principal -->
<div class="full-page-container">
    <!-- Texte avec fond semi-transparent -->
    <div class="overlay-text">
        <h2>
            <span style="color: #d63384;">Présentation</span>
            <span style="color: #d63384;">de la </span>
            <span style="color: #d63384;">résidence</span>
        </h2>
    </div>
</div>

<!-- Section texte + photo -->
<div class="content-section">
    <div class="text-content">
        <h3>À propos de notre résidence</h3>
        <p>
            <strong>Notre résidence</strong> est bien plus qu'un simple lieu de vie. C'est un espace conçu pour offrir confort, sécurité et bien-être à tous ses résidents. Avec des installations modernes et un environnement convivial, nous nous engageons à créer une communauté où chacun peut s'épanouir.
        </p>
        <p>
            Que vous cherchiez un endroit paisible pour vous reposer ou un lieu dynamique pour rencontrer vos voisins, notre résidence répond à tous vos besoins. Découvrez un cadre de vie exceptionnel, où chaque détail a été pensé pour vous.
        </p>
    </div>
    <div class="image-content">
        <img src="{{ asset('images/img.jpg') }}" alt="Photo de la résidence" class="img-fluid">
    </div>
</div>

<!-- Galerie de photos avec Bootstrap -->
<div class="gallery-section">
    <h3>Galerie de la Résidence</h3>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            <!-- Carte 1 -->
            <div class="col">
                <div class="card gallery-card">
                    <img src="{{ asset('images/img.jpg') }}" class="card-img-top" alt="Photo 1">
                    <div class="card-body">
                        <h5 class="card-title">Salon spacieux</h5>
                        <p class="card-text">Un espace lumineux et confortable pour se détendre.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="col">
                <div class="card gallery-card">
                    <img src="{{ asset('images/img.jpg') }}" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                        <h5 class="card-title">Cuisine moderne</h5>
                        <p class="card-text">Équipée avec des appareils haut de gamme.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="col">
                <div class="card gallery-card">
                    <img src="{{ asset('images/img.jpg') }}" class="card-img-top" alt="Photo 3">
                    <div class="card-body">
                        <h5 class="card-title">Chambre élégante</h5>
                        <p class="card-text">Un espace paisible pour un sommeil réparateur.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 4 -->
            <div class="col">
                <div class="card gallery-card">
                    <img src="{{ asset('images/img.jpg') }}" class="card-img-top" alt="Photo 4">
                    <div class="card-body">
                        <h5 class="card-title">Terrasse ensoleillée</h5>
                        <p class="card-text">Profitez du soleil dans un cadre relaxant.</p>
                    </div>
                </div>
            </div>
             <!-- Carte 1 -->
             <div class="col">
                <div class="card gallery-card">
                    <img src="{{ asset('images/img.jpg') }}" class="card-img-top" alt="Photo 1">
                    <div class="card-body">
                        <h5 class="card-title">Salon spacieux</h5>
                        <p class="card-text">Un espace lumineux et confortable pour se détendre.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="col">
                <div class="card gallery-card">
                    <img src="{{ asset('images/img.jpg') }}" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                        <h5 class="card-title">Cuisine moderne</h5>
                        <p class="card-text">Équipée avec des appareils haut de gamme.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="col">
                <div class="card gallery-card">
                    <img src="{{ asset('images/img.jpg') }}" class="card-img-top" alt="Photo 3">
                    <div class="card-body">
                        <h5 class="card-title">Chambre élégante</h5>
                        <p class="card-text">Un espace paisible pour un sommeil réparateur.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 4 -->
            <div class="col">
                <div class="card gallery-card">
                    <img src="{{ asset('images/img.jpg') }}" class="card-img-top" alt="Photo 4">
                    <div class="card-body">
                        <h5 class="card-title">Terrasse ensoleillée</h5>
                        <p class="card-text">Profitez du soleil dans un cadre relaxant.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ajoutez le script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
