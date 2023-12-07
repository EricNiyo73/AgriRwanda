<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/Contact.css') }}">
    <!-- Add the following line to include Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="contact_container">
        <div class="left_container">
            <h1>Need any help?</h1>
            <p>
                The information is also part of the MF Rural, where you can find news,
                quotes, technological information and others, in addition.
            </p>
            <small><i class="fas fa-phone-alt"></i> +250 08967564</small>
            <small><i class="fas fa-envelope"></i> contact@agriunityrwanda.com</small>
            <small><i class="fas fa-map-marker-alt"></i> 768/A, Green lane 790, Max town kigali -Rwanda</small>
            <button type="button">Drop your Message</button>
        </div>
        <div class="right_container">
            <div class="help_image">
                <img src="{{ asset('images/help.jpg') }}" alt="">
            </div>
        </div>
    </div>
</body>
</html>
