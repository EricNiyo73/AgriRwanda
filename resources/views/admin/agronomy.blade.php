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
            <li>
                <a href="#">
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
        <h2>Agronomy Officer Management</h2>
        <p>All activities related to the agronomy officer</p>
    </div>

    <!-- Agronomy Officer Activities -->
    <section class="setting-section">
        <h3>Agronomy Officer Activities</h3>

        <!-- Add Activity Form -->
        <div class="setting-option">
            <h4>Add New Activity</h4>
            <form action="#" method="post">
                <label for="activityName">Activity Name:</label>
                <input type="text" id="activityName" name="activityName" required>

                <label for="activityDescription">Activity Description:</label>
                <textarea id="activityDescription" name="activityDescription" rows="4" required></textarea>

                <button type="submit">Add Activity</button>
            </form>
        </div>

        <!-- List of Activities -->
        <div class="setting-option">
            <h4>Activity List</h4>
            <ul>
                <li>Activity 1 - Description of Activity 1</li>
                <li>Activity 2 - Description of Activity 2</li>
                <!-- Add dynamic content or fetch from the database -->
            </ul>
        </div>
    </section>

    <!-- Agronomy Officer Actions -->
    <section class="setting-section">
        <h3>Agronomy Officer Actions</h3>

        <!-- Add Action Form -->
        <div class="setting-option">
            <h4>Add New Action</h4>
            <form action="#" method="post">
                <label for="actionName">Action Name:</label>
                <input type="text" id="actionName" name="actionName" required>

                <label for="actionDescription">Action Description:</label>
                <textarea id="actionDescription" name="actionDescription" rows="4" required></textarea>

                <button type="submit">Add Action</button>
            </form>
        </div>

        <!-- List of Actions -->
        <div class="setting-option">
            <h4>Action List</h4>
            <ul>
                <li>Action 1 - Description of Action 1</li>
                <li>Action 2 - Description of Action 2</li>
                <!-- Add dynamic content or fetch from the database -->
            </ul>
        </div>
    </section>
</main>

        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

</body>

</html>