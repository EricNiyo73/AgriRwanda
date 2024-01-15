<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/Contact.css') }}">
    <!-- Add the following line to include Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    /* Add this to your existing CSS file or create a new one */

    #contactForm {
        display: none;
        margin-top: 20px;
        max-width: 300px;
        margin-left: auto;
        margin-right: 0;
        margin-bottom: 20px;
    }

    #contactForm input,
    #contactForm textarea,
    #contactForm button {
        width: 100%;
        margin-bottom: 15px;
        padding: 10px;
        box-sizing: border-box;
    }

    #contactForm button {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    /* Ensure the image is initially visible */
    .help_image {
        display: block;
    }
    </style>
</head>

<body>

    <div id="contact" class="contact_container">
        <div class="left_container">
            <h1>Need any help?</h1>
            <p>
                The information is also part of the MF Rural, where you can find news,
                quotes, technological information and others, in addition.
            </p>
            <small><i class="fas fa-phone-alt"></i> +250 08967564</small>
            <small><i class="fas fa-envelope"></i> contact@agriunityrwanda.com</small>
            <small><i class="fas fa-map-marker-alt"></i> 768/A, Green lane 790, Max town kigali -Rwanda</small>
            <button type="button" onclick="toggleForm()">Drop your Message</button>
        </div>

        <!-- Form section -->
        <div id="contactForm">
            <form onsubmit="submitForm()">
                <input type="text" placeholder="Your Name" required>
                <input type="tel" placeholder="Your Phone Number" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="right_container">
            <div class="help_image">
                <img src="{{ asset('images/help.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <script>
    // Add this script at the end of your HTML body or in a separate JS file
    function toggleForm() {
        var contactForm = document.getElementById('contactForm');
        var helpImage = document.querySelector('.help_image');

        if (contactForm.style.display === 'none') {
            contactForm.style.display = 'block';
            helpImage.style.display = 'none';
        } else {
            contactForm.style.display = 'none';
            helpImage.style.display = 'block';
        }
    }

    function submitForm() {
        // Handle form submission logic
        // After submission, you can reset the form and show the image again if needed
        var contactForm = document.getElementById('contactForm');
        var helpImage = document.querySelector('.help_image');

        contactForm.style.display = 'none';
        helpImage.style.display = 'block';
    }
    </script>
</body>

</html>