@extends('base')
@section('title', 'Contact')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
<!-- Conteneur principal -->
<div class="full-page-container">
    <!-- Texte avec fond semi-transparent -->
    <div class="overlay-text">
        <h2>
            <span style="color: #d63384;">Contact</span>
        </h2>
    </div>
</div></br>
<div class="container mt-5">

    <div class="row mt-4">
        <!-- Contact Form -->
        <div class="col-md-6">
            <h2>Your Name</h2>
            <input type="text" class="form-control mb-3" placeholder="Your Name">

            <h2>Your Email</h2>
            <input type="email" class="form-control mb-3" placeholder="Your Email">

            <h2>Subject</h2>
            <input type="text" class="form-control mb-3" placeholder="Subject">

            <h2>Message</h2>
            <textarea class="form-control mb-3" placeholder="Message" rows="5"></textarea>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Send Message</button>
            </div>
        </div>

        <!-- Google Maps Embed -->
        <div class="col-md-6">
            <h2>Our Location</h2>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.986654148016!2d-5.003393724665647!3d34.0377578197559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8b2f126c6b1f%3A0x363dabff5b8cbe80!2sAdresse%20Sp%C3%A9cifique%20%C3%A0%20F%C3%A8s%2C%20Maroc!5e0!3m2!1sfr!2sma!4v1710000000000" 
                width="100%" 
                height="500" 
                style="border: 1px solid #ccc; border-radius: 8px;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</div>


    
@endsection