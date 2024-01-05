<!-- resources/views/pages/home.blade.php -->

@extends('layouts.app1')

@section('contentt')
<link rel="stylesheet" href="{{ asset('css/Home.css') }}">
<div class="homepage">
    <div class="background">
        <img src="{{ asset('images/Home.jpg') }}" alt="Connection Failed" />
    </div>
    <div class="content">
        <div class="title">
            <h1
                style="font-family: Arial, sans-serif; font-size: 2.5rem; color: #FFFFFF; text-align: center; margin: 20px 0;">
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
</div>
@include('pages.products')
@include('pages.about')
@include('pages.service')
@include('pages.blog')
@include('pages.Experts')
@include('pages.contact')
@include('pages.parterns')
@endsection