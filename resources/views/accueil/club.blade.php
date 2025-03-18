@extends('base')
@section('title', 'Clubs')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">



<!-- Conteneur principal -->
<div class="full-page-container">
    <!-- Texte avec fond semi-transparent -->
    <div class="overlay-text">
        <h2>
            <span style="color: #d63384;">Nos Clubs</span>
        </h2>
    </div>
</div></br>
<div class="clubs-container">
    <!-- Club 1 -->
    <div class="club">
    <div class="club-header">
        <img src="{{ asset('images/sport.png') }}" alt="Club de Sport Logo" class="club-logo">
        <h2>Club de Sport</h2>
    </div>
    <h5 class="club-description">
        Le <strong>Club de Sport</strong> est un espace dynamique et convivial dédié à la promotion d'un mode de vie sain et actif. Il offre à ses membres une variété d'activités sportives adaptées à tous les niveaux, que vous soyez débutant ou sportif confirmé. Grâce à des entraîneurs qualifiés et des installations modernes, le club vise à améliorer la condition physique, la coordination et le bien-être général de ses membres. Rejoignez-nous pour des séances dynamiques et motivantes dans une ambiance conviviale et énergisante !
        <br><br>
        <strong>Activités proposées :</strong>
        <ul>
            <li><strong>Activités de fitness :</strong> Zumba, Aérobic, Cardio, Step, Fitball, renforcement musculaire.</li>
            <li><strong>Sports collectifs :</strong> Football, basketball, volleyball, tournois amicaux.</li>
            <li><strong>Activités de plein air :</strong> Randonnées, jogging, participation à des événements sportifs locaux.</li>
            <li><strong>Ateliers et formations :</strong> Nutrition, santé, amélioration des techniques sportives.</li>
            <li><strong>Événements spéciaux :</strong> Journées sportives, challenges internes, collaborations interclubs.</li>
        </ul>
        <br>
        <strong>Buts du club :</strong>
        <ul>
            <li>Promouvoir la santé et le bien-être.</li>
            <li>Développer les compétences sportives.</li>
            <li>Favoriser l'esprit d'équipe.</li>
            <li>Encourager la participation communautaire.</li>
        </ul>
</h5>
    <div class="club-gallery">
        <img src="{{ asset('images/sport1.png') }}" alt="Club de Sport Image 1">
        <img src="{{ asset('images/sport2.jpg') }}" alt="Club de Sport Image 2">
        <img src="{{ asset('images/sport3.jpg') }}" alt="Club de Sport Image 3">
        <img src="{{ asset('images/sport4.jpg') }}" alt="Club de Sport Image 4">
        <img src="{{ asset('images/sport5.jpg') }}" alt="Club de Sport Image 5">
        <img src="{{ asset('images/sport6.jpg') }}" alt="Club de Sport Image 6">
    </div>
</div>
    <!-- Club 2 -->
    <div class="club">
    <div class="club-header">
        <img src="{{ asset('images/cooking.png') }}" alt="Club de Cuisine et d'Économie Domestique Logo" class="club-logo">
        <h2>Club de Cuisine et d'Économie Domestique</h2>
    </div>
    <h5 class="club-description">
        Le <strong>Club de Cuisine et d'Économie Domestique</strong> est un espace convivial et éducatif dédié à l'apprentissage des techniques culinaires, à la gestion du foyer et à la promotion d'un mode de vie sain et durable. Ce club offre à ses membres l'opportunité de développer des compétences pratiques en cuisine, en gestion des ressources et en organisation domestique, tout en favorisant la créativité et le partage.
        <br><br>
        <strong>Activités proposées :</strong>
        <ul>
            <li><strong>Ateliers de cuisine :</strong> Apprentissage de recettes traditionnelles et modernes, techniques de pâtisserie, découverte de cuisines du monde.</li>
            <li><strong>Gestion domestique :</strong> Conseils pour le budget familial, astuces pour l'organisation de la maison, réduction du gaspillage alimentaire.</li>
            <li><strong>Sensibilisation à une alimentation saine :</strong> Ateliers sur la nutrition, découverte des produits locaux, lecture des étiquettes alimentaires.</li>
            <li><strong>Projets communautaires :</strong> Repas partagés, actions solidaires (préparation de repas pour les personnes dans le besoin).</li>
            <li><strong>Formations et échanges :</strong> Démonstrations culinaires par des chefs, partage d'expériences entre membres.</li>
        </ul>
        <br>
        <strong>Buts du club :</strong>
        <ul>
            <li>Développer des compétences pratiques en cuisine et en gestion domestique.</li>
            <li>Promouvoir une alimentation saine et durable.</li>
            <li>Encourager la créativité à travers la découverte de nouvelles recettes et techniques.</li>
            <li>Favoriser la convivialité et le partage entre les membres.</li>
            <li>Contribuer à la communauté par des actions solidaires et éducatives.</li>
        </ul>
    </h5>
    <div class="club-gallery">
        <img src="{{ asset('images/cooking1.png') }}" alt="Club de Cuisine Image 1">
        <img src="{{ asset('images/cooking2.png') }}" alt="Club de Cuisine Image 2">
        <img src="{{ asset('images/cooking3.png') }}" alt="Club de Cuisine Image 3">
        <img src="{{ asset('images/cooking4.png') }}" alt="Club de Cuisine Image 4">
        <img src="{{ asset('images/cooking5.png') }}" alt="Club de Cuisine Image 5">
        <img src="{{ asset('images/cooking6.png') }}" alt="Club de Cuisine Image 6">
    </div>
</div>

    <!-- Club 3 -->
    <div class="club">
        <div class="club-header">
            <img src="{{ asset('images/culturel.png') }}" alt="Club 2 Logo" class="club-logo">
            <h2>Club Culturel</h2>
        </div>
        <h5 class="club-description">
            Ceci est la description du Club 2. Vous pouvez ajouter ici une brève présentation du club, ses objectifs, et ses activités.
        </h5>
        <div class="club-gallery">
            <img src="{{ asset('images/1.png') }}" alt="Club 2 Image 1">
            <img src="{{ asset('images/2.png') }}" alt="Club 2 Image 2">
            <img src="{{ asset('images/3.png') }}" alt="Club 2 Image 3">
            <img src="{{ asset('images/4.png') }}" alt="Club 2 Image 4">
            <img src="{{ asset('images/5.png') }}" alt="Club 2 Image 5">
            <img src="{{ asset('images/6.png') }}" alt="Club 2 Image 6">
        </div>
    </div>
    <!-- Club 4-->
    <div class="club">
    <div class="club-header">
        <img src="{{ asset('images/social.png') }}" alt="Club de Service Communautaire Logo" class="club-logo">
        <h2>Club de Service Communautaire</h2>
    </div>
    <h5 class="club-description">
        Le <strong>Club de Service Communautaire</strong> est un espace dédié à l'engagement social, à la solidarité et à l'amélioration des conditions de vie des membres de la communauté. À travers des initiatives variées et des projets concrets, le club vise à sensibiliser, éduquer et soutenir les personnes dans le besoin, tout en encourageant le bénévolat et la participation active de ses membres.
        <br><br>
        <strong>Activités réalisées :</strong>
        <ul>
            <li><strong>Initiatives sociales :</strong> Distribution de paniers alimentaires, collaboration avec des associations locales.</li>
            <li><strong>Sensibilisation et éducation :</strong> Ateliers sur la santé (anémie, diabète, santé reproductive), campagnes de sensibilisation.</li>
            <li><strong>Visites et explorations :</strong> Découverte du patrimoine historique de Fès, visites de musées et centres sociaux.</li>
            <li><strong>Formations et ateliers :</strong> Ateliers pratiques (fabrication de bracelets, pliages en papier), formations en animation éducative.</li>
            <li><strong>Collaborations et partenariats :</strong> Travail avec des associations locales pour des projets communautaires.</li>
        </ul>
        <br>
        <strong>Objectifs du club :</strong>
        <ul>
            <li>Promouvoir l'esprit de solidarité et d'entraide.</li>
            <li>Sensibiliser la communauté à des enjeux sociaux et de santé.</li>
            <li>Encourager l'engagement citoyen et le bénévolat.</li>
            <li>Offrir des opportunités de formation et de développement personnel.</li>
        </ul>
    </h5>
    <div class="club-gallery">
        <img src="{{ asset('images/community1.png') }}" alt="Club de Service Communautaire Image 1">
        <img src="{{ asset('images/community2.png') }}" alt="Club de Service Communautaire Image 2">
        <img src="{{ asset('images/community3.png') }}" alt="Club de Service Communautaire Image 3">
        <img src="{{ asset('images/community4.png') }}" alt="Club de Service Communautaire Image 4">
        <img src="{{ asset('images/community5.png') }}" alt="Club de Service Communautaire Image 5">
        <img src="{{ asset('images/community6.png') }}" alt="Club de Service Communautaire Image 6">
    </div>
</div>
@endsection