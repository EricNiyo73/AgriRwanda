<!-- Add this line to the head section of resources/views/layouts/app.blade.php -->

<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Agri Unity Rwanda')</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <!-- Include Bootstrap CSS here if not included via CDN -->
</head>
<body>
    @include('includes.navbar')
 

    <div class="container mt-4">
        @yield('content')
       
    </div>
    @include('includes.footer')
   
    <!-- Include Bootstrap JS here if needed -->
</body>
</html>
