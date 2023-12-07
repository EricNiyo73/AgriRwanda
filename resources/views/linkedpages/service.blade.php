<!-- resources/views/pages/about.blade.php -->
<!-- resources/views/pages/service.blade.php -->

@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/Service.css') }}">
    
    <div class="service_container">
        <h1>Services we provide</h1>
        
        <div class="cards_container">
            @foreach(range(1, 4) as $index)
                <div class="small_cards">
                    <div class="photoside">
                        <img src="{{ asset('images/monitor.jpg') }}" alt="Connection failed" />
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
@endsection
