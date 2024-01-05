
<link rel="stylesheet" href="{{ asset('css/facilitator.css') }}">
@extends('layouts.app')
@section('content')

 <div class="facilitator">
       <div class="divid">
    <h2>Aho tubarizwa</h2>
    <p>Akarere: {{ $product->district }}</p>
    <p>Amazina: {{ $product->fullname }}</p>
    <p>Telephone: {{ $product->telephone }}</p>
    <p>Ibihari: {{ $product->quantity }}  {{ $product->quantity_unit }}</p>
    </div>
 </div>
@endsection
