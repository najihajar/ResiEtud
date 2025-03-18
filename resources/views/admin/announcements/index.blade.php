@if(Auth::check() && Auth::user()->role === 'admin')
    <h2>Gestion des Annonces</h2>
    <a href="{{ route('admin.announcements.create') }}">Créer une nouvelle annonce</a>
    <ul>
        @foreach($announcements as $announcement)
            <li>
                <h4>{{ $announcement->title }}</h4>
                <p>{{ $announcement->description }}</p>
                <form action="{{ route('admin.announcements.destroy', $announcement) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
                <a href="{{ route('admin.announcements.edit', $announcement) }}">Modifier</a>
            </li>
        @endforeach
    </ul>
@else
    <p>Accès refusé.</p>
@endif
