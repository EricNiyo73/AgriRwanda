
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
        <h1>Menya kndi Uhitamo Igihigwa Ushaka </h1>
    </div>
    <div class="searchdisplay">
    <div class="filter-container">
        <label for="category">Filter by Category:</label>
        <select id="category">
            <option value="all">All Categories</option>
            <option value="ibikigwa">Ibikigwa by'ibinyamake</option>
            <option value="diary">Diary and Other (Fish)</option>
            <option value="fresh">Fresh Vegetables</option>
            <option value="organic">Organic Products</option>
        </select>
    </div>
    <form class="search-form">
        <input type="text" placeholder="Search products...">
        <button type="submit">
            <img src="{{ asset('images/search-icon.png') }}" alt="Search">
        </button>
    </form>
    </div>
   

    <div class="product-container">
        <!-- Product 1 -->
        <div class="product-item" data-category="ibikigwa">
            <div class="product-image">
                <img src="{{ asset('images/tomato2.jpg') }}" alt="Connection Failed" />
            </div>
            <div class="product-details">
                <h2>Ibikigwa by'ibinyamake</h2>
                <p>but it is often grown as an annual crop even if biennial and perennial forms exist</p>
            </div>
        </div>

        <div class="product-item" data-category="diary">
            <div class="product-image">
                <img src="{{ asset('images/dairy.jpg') }}" alt="Connection Failed" />
            </div>
            <div class="product-details">
                <h2>Diary and Other (Fish)</h2>
                <p>but it is often grown as an annual crop even if biennial and perennial forms exist</p>
            </div>
        </div>

        <div class="product-item" data-category="fresh">
            <div class="product-image">
                <img src="{{ asset('images/FRESH.webp') }}" alt="Connection Failed" />
            </div>
            <div class="product-details">
                <h2>Fresh Vegetables</h2>
                <p>but it is often grown as an annual crop even if biennial and perennial forms exist</p>
            </div>
            
        </div>

        <!-- Product 2 -->
        <div class="product-item" data-category="organic">
            <div class="product-image">
                <img src="{{ asset('images/irishpatatooes.jpg') }}" alt="Product 2" />
            </div>
            <div class="product-details">
                <h2>Organic Products</h2>
                <p>Tomato is a perennial herbaceous plant </p>
            </div>
        </div>
    </div>

    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categorySelect = document.getElementById('category');
        const productItems = document.querySelectorAll('.product-item');

        categorySelect.addEventListener('change', function () {
            const selectedCategory = categorySelect.value;

            productItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');

                if (selectedCategory === 'all' || selectedCategory === itemCategory) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
</body>
</html>
