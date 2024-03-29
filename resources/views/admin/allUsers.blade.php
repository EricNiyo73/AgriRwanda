<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/adnin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>Agri_unityRwanda</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="/" class="brand">
        <img src="{{ asset('images/ogi-removebg-preview.png') }}" alt="" />
        
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
            <li>
            <a href="{{ route('admin.settings') }}">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
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

                <!-- User Table -->
                <div class="user-table">
                    <table>
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Static data for demonstration purposes -->
                          @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->telephone }}</td>
                    <td>
                        <a href="{{ route('user.editing', $user->id) }}">Edit</a>
                        <form action="{{route('user.destroyUser',$user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

</body>

</html>