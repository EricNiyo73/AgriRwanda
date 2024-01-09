<!-- resources/views/footer.blade.php -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/Footer.css') }}">
<div class="footer_section">
    <div class="footer_flex">
        <div class="footer_content">
            <div class="logo">
                <img src="{{ asset('images/ogi.jpeg') }}" alt="Agri_UnityRwanda Logo" />
                <h2>Agri_UnityRwanda</h2>
            </div>
            <p>
            Agri_UnityRwanda is your go-to source for the latest news, quotes,
                and technological information in the agricultural sector. 
                Stay connected with us for innovative solutions.
            </p>
            <div class="social_icons">
            <a href="#" class="fa fa-facebook" target="_blank"></a>
            <a href="mailto:info@agriunityrwanda.com" class="fa fa-envelope"></a>
            <a href="#" class="fa fa-tiktok" target="_blank"></a>
            <a href="https://wa.me/1234567890" class="fa fa-whatsapp" target="_blank"></a>
           </div>
        </div>
        <div class="quicklink_footer">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/">About</a></li>
                <li><a href="/">Services</a></li>
                <li><a href="/">Contact</a></li>
                <li><a href="/">Project</a></li>
            </ul>
        </div>
        <div class="quicklink_footer">
            <h4>Explore</h4>
            <ul>
                <li><a href="/">Agricultural Products</a></li>
                <li><a href="/">Farming Practices</a></li>
                <li><a href="/">Expert Advice</a></li>
                <li><a href="/">Partnerships</a></li>
            </ul>
        </div>
        <div class="quicklink_footer">
    <h4>Recently News</h4>
    <div class="news">
        <div class="news-item">
            <img src="{{ asset('images/dairy.jpg') }}" alt="News Image 1">
            <div class="news-content">

                <p>Beef retail prices hit a record</p>
                <span class="news-date">18 Aug 2018</span>
            </div>
        </div>
        
        <!-- Add more news items as needed -->
    </div>
    <div class="news">
        <div class="news-item">
            <img src="{{ asset('images/dairy.jpg') }}" alt="News Image 1">
            <div class="news-content">

                <p>Beef retail prices hit a record</p>
                <span class="news-date">18 Aug 2018</span>
            </div>
        </div>
        
    
    </div>
</div>

    </div>
    <div class="copy_right">
        <p>&copy; {{ date('Y') }} All rights reserved | Desinned and Developed by Alain-Eric</p>
    </div>
</div>

