<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agri Unity Rwanda</title>
</head>
<body>
<nav class="navbar">
    <div class="container-fluid">
        <div class="logo">
        <img src="{{ asset('images/ogi.jpeg') }}" alt="" />
            Agri_UnityRwanda
        </div>
        <div class="links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('service') }}">Service</a>
            <a href="{{ route('service') }}">Farming Practice</a>
            <a href="{{ route('blog') }}">Our Product</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
        <div class="connect">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
</nav>
</body>
</html>







