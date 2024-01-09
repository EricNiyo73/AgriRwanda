<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Service.css') }}">
    <title>advice</title>
</head>

<body>
@if(isset($agronomies) && count($agronomies) > 0)
    <div class="title">
         <h1>Agronomy Officer Support</h1>
    </div>
    <div class="searchdisplay">
    <div class="filter-container">
    <form action="{{ route('agronomy.filter') }}" method="GET" id="categoryForm">
        <label for="category">Filter by Category:</label>
        <select id="category" name="category" onchange="document.getElementById('categoryForm').submit()">
            <option value="all">All Categories</option>
            <option value="Ibikigwa by'ibinyamake">Ibikigwa by'ibinyamake</option>
            <option value="Diary and Other (Fish">Diary and Other (Fish)</option>
            <option value="FreshVegetables">Fresh Vegetables</option>
            <option value="Organic Products">Organic Products</option>
            <option value="Ibihingwa Ngandurarugo">Ibingwa Ngandurarugo</option>
        </select>
    </form>
</div>

<form action="{{ route('agronomy.filter') }}" method="GET" class="search-form">
    <input type="text" name="search" placeholder="Search plant...">
    <button type="submit">
        Search
    </button>
</form>

    </div>
    @else

    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#noProductsModal">
    Mutwihanganire, Ibyo mwasabye ntago bibashije kuboneka
Murakoze kudufasha kumenyekanisha ubuhinzi bukorerwa iwacu iwacu mu Rwanda.
    </button>

@endif
    <div id="service" class="service_container">
       
    
        <div class="cards_container">
            @foreach($agronomies as $agro)
            <div class="small_cards">
                <div class="videoside">
                    <iframe width="100%" height="100%" src="{{ asset('storage/' . $agro->video) }}" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <div class="content_right">
                    <p>
                       {{ $agro->short_desc }}
                    </p>
                    <h6>Ushaka Amakuru yisumbuye wahamagara: {{ $agro->in_charge }}</h6>
                </div>
            </div>
            @endforeach
        </div>

        <div class="offer">
            @foreach(['20+', '20+k', '220+', '520+'] as $count)
            <div class="offer_service">
                <h1>{{ $count }}</h1>
                <p>List of any and all companies related to agribusiness</p>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>