
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
<nav class="navbar navbar-expand-lg " style="height: 80px;background-color: #e9ecef;" >
    <div class="container">
        <!-- Logo ou nom de l'application -->
        <a class="navbar-brand" href="{{ route('app_accueil') }}">
            <img src="{{ asset('images/gry.jpg') }}" alt="Logo" style="height: 60px;">
        </a>

        <!-- Bouton pour les écrans mobiles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenu de la barre de navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Liens de navigation -->
                <li class="nav-item">
                    <a class="nav-link fw-bold @if(request()->routeIs('app_accueil')) active @endif" href="{{ route('app_accueil') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold @if(request()->routeIs('app_presentation')) active @endif" href="{{ route('app_presentation') }}">Présentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold @if(request()->routeIs('app_club')) active @endif" href="{{ route('app_club') }}">Clubs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold @if(request()->routeIs('app_contact')) active @endif" href="{{ route('app_contact') }}">Contact</a>
                </li>

                @auth
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link fw-bold" style="background: none; border: none; cursor: pointer;">Déconnexion</button>
                    </form>
                </li>
                @endauth

                @guest
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('login') }}">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('register') }}">Inscription</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>