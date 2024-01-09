<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agri Unity Rwanda</title>
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
>>>>>>> view
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
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('service') }}">Service</a>
                <a href="{{ route('service') }}">Farming Practice</a>
                <a href="{{ route('blog') }}">Our Product</a>
                <a href="{{ route('contact') }}">Contact</a>
                <div class="connect">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <script>
    function toggleMenu() {
        const links = document.querySelector('.links');
        links.classList.toggle('show');
    }
    </script>

</body>

</html> -->
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
                <a href="#" onclick="smoothScroll('#home')">Home</a>
                <a href="#" onclick="smoothScroll('#about')">About</a>
                <a href="#" onclick="smoothScroll('#service')">Service</a>
                <a href="#" onclick="smoothScroll('#farmingPractice')">Farming Practice</a>
                <a href="#" onclick="smoothScroll('#ourProduct')">Our Product</a>
                <a href="#" onclick="smoothScroll('#contact')">Contact</a>
                <div class="connect">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
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
            toggleMenu(); // Close the menu after clicking a link
        }
    </script>

</body>

</html>
