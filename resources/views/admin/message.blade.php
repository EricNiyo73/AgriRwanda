<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/adnin.css') }}">
    <title>Agri_unityRwanda</title>
</head>

<body>

<style>
    /* Add this inline style in your HTML or in a separate style tag */
    main {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }

    .message {
        max-width: 300px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        background-color: #fff;
    }

    .message:hover {
        transform: translateY(-5px);
    }

    .message-header {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    .message-body {
        padding: 15px;
    }

    .message-item {
        margin-bottom: 10px;
    }

    .message-item strong {
        color: #007bff;
    }
</style>




    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="/" class="brand">
            <i class='bx bxs-smile'></i>
        
            <span class="text">Agri_unityRwanda</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="{{ route('admin.dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.allUsers') }}">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">All Users</span>
                </a>
            </li>
            <li>
            <a href="{{ route('admin.Productlist') }}">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Products</span>
                </a>
            </li>
            <li>
            <a href="{{ route('admin.message') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Message</span>
                </a>
            </li>
            <li>
            <a href="{{ route('admin.rabuser') }}">
                <i class='bx bxs-message-dots'></i>
                <span class="text">RAB User</span>
                </a>
            </li>
            <li>
            <a href="{{ route('admin.agronomy') }}">
                <i class='bx bxs-message-dots'></i>
                <span class="text">Agronomy Advice</span>
                </a>
            </li>
            <li>
            <a href="{{ route('admin.team') }}">
                <i class='bx bxs-group'></i>
                <span class="text">Team</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <!-- <li>
                <a href="#">
                <a href="{{ route('admin.settings') }}">
                    <span class="text">Settings</span>
                </a>
            </li> -->
            <li>
                <a href="/" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="{{ asset('images/modern.jpg') }}" />
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
    <div class="head-title">
        <!-- Messages -->
        <div class="message">
            <div class="message-item">
                <strong>Name:</strong> John Doe<br>
                <strong>Telephone:</strong> +250 08967564<br>
                <strong>Email:</strong> john.doe@example.com<br>
                <strong>Message:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac urna et odio gravida cursus. Nullam vel ultrices justo. Integer lacinia sem sit amet euismod blandit.
            </div>
            <div class="message-item">
                <strong>Name:</strong> John Doe<br>
                <strong>Telephone:</strong> +250 08967564<br>
                <strong>Email:</strong> john.doe@example.com<br>
                <strong>Message:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac urna et odio gravida cursus. Nullam vel ultrices justo. Integer lacinia sem sit amet euismod blandit.
            </div>
            <!-- Add more message items as needed -->
        </div>
    </div>
</main>

        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

</body>

</html>