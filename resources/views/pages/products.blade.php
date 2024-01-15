<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/Product.css') }}">
<!-- Add this in the head section of your HTML file -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page with Chat</title>
</head>
<body>
 @if($products && count($products) > 0)
    <div class="title">
        <h1>Menya kandi Uhitamo Igihigwa Ushaka Hano</h1>
    </div>
    <div class="searchdisplay">
    <div class="filter-container">
    <form action="{{ route('agronomy.filter') }}" method="GET" id="categoryForm">
        <label for="category">Filter by Category:</label>
        <select id="category" name="category" onchange="document.getElementById('categoryForm').submit()">
                        <option value="all">Hitamo</option>
                    <option value="Ibihigwa by'ibinyampeke">Ibihigwa by'ibinyampeke</option>
                    <option value="Imbuto">Imbuto</option>
                    <option value="Imgoga">Imboga</option>
                    <option value="Ibihingwa Ngandurarugo">Ibihingwa Ngangurabukungu</option>
        </select>
    </form>
</div>

<form action="{{ route('agronomy.filter') }}" method="GET" class="search-form">
    <input type="text" name="search" placeholder="Search products...">
    <button type="submit">
        Search
    </button>
</form>

    </div>
    @else

    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#noProductsModal">
    Mutwihanganire,

Turashishikariza Abantu bafite ibyo bamamaza kutugana tukabafasha.
Murakoze kudufasha kumenyekanisha ubuhinzi bukorerwa iwacu iwacu mu Rwanda.
    </button>

@endif

    <div class="product-container">
        <!-- Product 1 -->
     @foreach($products as $product)

     
            <div class="product-item" data-category="ibikigwa">
                <h4> Biboneka muri :{{ $product->district }}</h4>
                <div class="product-image">
                    <img class="product-image" src="{{ asset('storage/' . $product->image) }}" />
                </div>
                <div class="product-details">
                <a href="{{ route('products.contacting', $product->id) }}">View Farmer Detail</a>
                    <h4>{{ $product->category }}</h4>
                    <p>{{ $product->short_desc }}</p>
                    <h4>Hasigaye: {{ $product->quantity }}, {{ $product->quantity_unit }}</h4>
                </div>
            </div>
            @endforeach
    </div>
</body>
</html>