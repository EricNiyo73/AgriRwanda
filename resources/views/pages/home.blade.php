@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
    <div class="homepage">
        <div class="background">
            <img src="{{ asset('images/Home.jpg') }}" alt="Connection Failed" />
        </div>
        <div class="content">
            <div class="title">
                <h1 style="font-family: Arial, sans-serif; font-size: 2.5rem; color: #FFFFFF; text-align: center; margin: 20px 0;">
                    Agricultural Solution
                </h1>
                <p>
                    Cultivating Innovation, Growing Sustainability: Your Trusted Partner
                    in Agricultural Solutions
                </p>
            </div>
            <div class="explore">
                <button type="button">Explore Our Service ..</button>
            </div>
        </div>
        @auth
            @if(auth()->user()->role === 'Farmer')
                <a href="{{ route('farmerform') }}">Farmer Form</a>
            @elseif(auth()->user()->role === 'Admin')
                <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
               
            @endif
            <a href="{{ route('logout') }}">Logout</a>
        @else
            <!-- <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a> -->
        @endauth
    </div>
    @include('pages.products')
    @include('pages.about')
    @include('pages.service')
    @include('pages.contact')
    @include('pages.parterns')
@endsection
