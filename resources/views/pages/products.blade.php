<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page with Chat</title>
    <link rel="stylesheet" href="{{ asset('css/Product.css') }}">
</head>
<body>
    <div class="title">
    <h1>Trending Agricultural Farmers Product </h1>
    </div>
    
    <div class="product-container">
        <!-- Product 1 -->
   <!-- Product 1 -->
<div class="product-item">
    <div class="product-image">
    <img src="{{ asset('images/tomato2.jpg') }}" alt="Connection Failed" />
    </div>
    <div class="product-details">
        <h2>Tomato</h2>
        <p>But it is often grown as an annual crop even if biennial and perennial forms exist</p>
        <small> Farmer:  Nkurunziza Jean Bosco</small>
        <button class="chat-button" onclick="openChat('Farmer 1')">Chat with Farmer</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
    <img src="{{ asset('images/dairy.jpg') }}" alt="Connection Failed" />
    </div>
    <div class="product-details">
        <h2>Dairy
Products</h2>
        <p>but it is often grown as an annual crop even if biennial and perennial forms exist</p>
        <small> Farmer:  MURENZI Athanase</small>
        <button class="chat-button" onclick="openChat('Farmer 1')">Chat with Farmer</button>
    </div>
</div>
<div class="product-item">
    <div class="product-image">
    <img src="{{ asset('images/FRESH.webp') }}" alt="Connection Failed" />
    </div>
    <div class="product-details">
        <h2>Fresh
Vegetables</h2>
        <p>but it is often grown as an annual crop even if biennial and perennial forms exist</p>
        <small> Farmer:  MUHAWENIMANA Gertulde</small>
        <button class="chat-button" onclick="openChat('Farmer 1')">Chat with Farmer</button>
    </div>
</div>
<!-- Product 2 -->
<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/irishpatatooes.jpg') }}" alt="Product 2" />
    </div>
    <div class="product-details">
        <h2>Organic
Products</h2>
        <p>irish Potatoes is a perennial herbaceous plant </p>
        <small> Farmer:  MUKAMABANO  Dathive</small>
        <button class="chat-button" onclick="openChat('Farmer 2')">Chat with Farmer</button>
    </div>
</div>


       

    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeChatModal()">&times;</span>
            <h2 id="farmerName"></h2>
            <textarea id="chatMessage" rows="4" cols="50" placeholder="Type your message..."></textarea>
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        function openChat(farmerName) {
            document.getElementById('farmerName').innerText = farmerName;
            document.getElementById('myModal').style.display = 'flex';
        }

        function closeChatModal() {
            document.getElementById('myModal').style.display = 'none';
        }

        function sendMessage() {
            var farmerName = document.getElementById('farmerName').innerText;
            var userMessage = document.getElementById('chatMessage').value;

            if (userMessage.trim() !== '') {
                alert('Sending message to ' + farmerName + ': ' + userMessage);
                closeChatModal();
                // Implement further actions, e.g., sending the message to the server
            }
        }
    </script>

</body>
</html>

