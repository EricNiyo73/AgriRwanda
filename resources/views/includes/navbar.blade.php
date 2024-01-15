<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agri Unity Rwanda</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="container-fluid">
            <div class="logo">
                <img src="{{ asset('images/ogi.jpeg') }}" alt="" />
                Agri_UnityRwanda
            </div>

            <div class="menu-btn" onclick="toggleMenu()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>

            <div class="links">
                <a href="/" onclick="smoothScroll('#home')">Ahabanza</a>
                <a href="#" onclick="smoothScroll('#about')">Ibitwerekeyeho</a>
                <a href="#" onclick="smoothScroll('#service')">Service</a>
                <a href="#" onclick="smoothScroll('#ourProduct')">Our Product</a>
                <a href="#" onclick="smoothScroll('#contact')">Twandikire</a>
                <div class="connect">
                    <a href="{{ route('login') }}">Injira</a>
                    <a href="{{ route('register') }}">Iyandikishe</a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        function toggleMenu() {
            const links = document.querySelector('.links');
            links.classList.toggle('show');
        }

        function smoothScroll(target) {
            document.querySelector(target).scrollIntoView({
                behavior: 'smooth'
            });
            toggleMenu();
        }
    </script>

</body>

</html>
