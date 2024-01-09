<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Service.css') }}">
    <title>Document</title>
</head>

<body>

    <div id="service" class="service_container">
        <h1>Agronomy Officer Support</h1>

        <div class="cards_container">
            @foreach(range(1, 4) as $index)
            <div class="small_cards">
                <div class="videoside">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <div class="content_right">
                    <p>
                        Field Ready
                        Technological information and others,
                        in addition to information about companies in the sector,
                        list of any and all companies related to agribusiness.
                    </p>
                    <button>Get The Service</button>
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