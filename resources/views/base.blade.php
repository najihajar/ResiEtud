<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="{{'assets/app.css'}}" />

        
    </head>
    <body >
        <!-- bar de navigation -->
        @include('navbar/navbar')
        <!-- Tous nos contenus seront affiché ici  -->
        @yield('content')
    
        <!-- Pied de page -->
        @include('partials.footer')
        <!-- Nos script  -->
        @include('script')
    

        @if(Auth::check() && Auth::user()->role === 'admin')
            <a href="{{ route('admin.announcements.index') }}" class="btn btn-primary">📋 Gérer les annonces</a>
        @endif

    </body>
</html>
