@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/farmer.css') }}">

<div class="farmer_container">
    <div class="form-container">
        <h1>Shyira kugihe Umusaruwo Wawe</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('product.updateProduct', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
             <div class="form-group_container">
            <div class="form-group">
                <label for="fullname">Full Name/Izina rya cooperative:</label>
                <input type="text" id="fullname" name="fullname" value="{{ $product->fullname }}">
            </div>
            <div class="form-group">
                <label for="tel">Telephone mubarizwaho:</label>
                <input type="tel" id="telephone" name="telephone" value="{{  $product->telephone  }}">
            </div>
            </div>
            <div class="form-group">
                <label for="district">District:</label>
                <select id="district" name="district">
                    <option selected>District</option>
                    <option value="rulindo" {{$product->district === 'rulindo' ? 'selected': ''}}>Rulindo</option>
                    <option value="huye" {{$product->district === 'huye' ? 'selected': ''}}>Huye</option>
                    <option value="musanze" {{$product->district === 'musanze' ? 'selected': ''}}>musanze</option>
                    <option value="nyaruguru" {{$product->district === 'nyaruguru' ? 'selected': ''}}>nyaruguru</option>
                    <option value="bugesera" {{$product->district === 'bugesera' ? 'selected': ''}}>Bugesera</option>
                    <option value="kanyonza" {{$product->district === 'kanyonza' ? 'selected': ''}}>Kayonza</option>
                    <option value="nyamagabe" {{$product->district === 'nyamagabe' ? 'selected': ''}}>Nyamagabe</option>
                    <option value="nyanza" {{$product->district === 'nyanza' ? 'selected': ''}}>Nyanza</option>
                    <option value="gicumbi" {{$product->district === 'gicumbi' ? 'selected': ''}}>Gicumbi</option>
                    <option value="burera" {{$product->district === 'burera' ? 'selected': ''}}>Burera</option>
                    <option value="ruhando" {{$product->district === 'ruhando' ? 'selected': ''}}>Ruhango</option>
                    <option value="kirehe" {{$product->district === 'kirehe' ? 'selected': ''}}>Kirehe</option>
                    <option value="rwamagana" {{$product->district === 'rwamagana' ? 'selected': ''}}>Rwamagana</option>
                    <option value="gakenke" {{$product->district === 'gakenke' ? 'selected': ''}}>Gakenye</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category">Product Category:</label>
                <select id="category" name="category">
                <option selected>Hitamo</option>
                    <option value="diary" {{$product->category === 'diary' ? 'selected': ''}}>Diary and Other (Fish)</option>
                    <option value="fresh" {{$product->category === 'fresh' ? 'selected': ''}}>Fresh Vegetables</option>
                    <option value="organic" {{$product->category === 'organic' ? 'selected': ''}}>Organic Products</option>
                </select>
            </div>

            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" value="{{  $product->product_name }}">
            </div>

            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="image">Product Detailed:</label>
                <input type="text" id="text" name="product_description" value="{{  $product->product_description }}">
            </div>
            <div class="form-group">
            <label for="quantity">Quantity/Ingano:</label>
          <div class="quantity-input">
        <input type="number" id="quantity" name="quantity" value="{{ $product->quantity }}">
        <select id="quantity_unit" name="quantity_unit">
        <option selected>Hitamo</option>
            <option value="kg" {{$product->quantity_unit === 'kg' ? 'selected': ''}}>Kilogram (kg)</option>
            <option value="litre" {{$product->quantity_unit === 'litre' ? 'selected': ''}}>Litre</option>
            <option value="piece" {{$product->quantity_unit === 'piece' ? 'selected': ''}}>Piece</option>
            <option value="box" {{$product->quantity_unit === 'box' ? 'selected': ''}}>Box</option>
        </select>
    </div>
</div>

            <div class="form-group">
                <button type="submit">Ohereza</button>
            </div>
        </form>
    </div>
 
    @endsection