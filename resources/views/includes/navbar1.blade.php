<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="logo">
                <img src="{{ asset('images/ogi.jpeg') }}" alt="" />
                Agri_UnityRwanda
            </div>
            <div class="links">
                <a href="/" onclick="smoothScroll('#home')">Ahabanza</a>
                <a href="#" onclick="smoothScroll('#about')">Ibitwerekeyeho</a>
                <a href="#" onclick="smoothScroll('#service')">Service</a>
                <a href="#" onclick="smoothScroll('#ourProduct')">Our Product</a>
                <a href="#" onclick="smoothScroll('#contact')">Twandikire</a>
            </div>
            <div class="connect">

               <a href="{{ route('auth.agronomyform') }}">Tanga</a>
                <a href="/">Logout</a>
            </div>
        </div>
    </nav>
</body>

</html>