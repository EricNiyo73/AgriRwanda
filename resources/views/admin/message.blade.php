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
            overflow-x: auto; 
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        @media screen and (max-width: 768px) {
            table {
                font-size: 14px; 
            }

            th, td {
                padding: 10px;
            }
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
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <!-- Replace this static data with the dynamic data you'll fetch later -->
                <tr>
                    <td>John Doe</td>
                    <td>(123) 456-7890</td>
                    <td>john@example.com</td>
                    <td>This is a sample message. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                </tr>
                <tr>
                    <td>Jane Doe</td>
                    <td>(987) 654-3210</td>
                    <td>jane@example.com</td>
                    <td>Another sample message. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
            <!-- Add more message items as needed -->
        </div>
    </div>
</main>

        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

</body>

</html>