@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/farmer.css') }}">

<div class="farmer_container">
    <div class="form-container">
        <h1>Menyekanisha Umusaruwo Wawe</h1>
        <form action="{{ route('farmerform.submit') }}" method="post" enctype="multipart/form-data">
            @csrf
             <div class="form-group_container">
            <div class="form-group">
                <label for="fullname">Full Name/Izina rya cooperative:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="tel">Telephone mubarizwaho:</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            </div>
            <div class="form-group">
                <label for="district">District:</label>
                <select id="district" name="district" required>
                    <option value="rulindo">Rulindo</option>
                    <option value="huye">Huye</option>
                    <option value="musanze">musanze</option>
                    <option value="nyaruguru">nyaruguru</option>
                    <option value="bugesera">Bugesera</option>
                    <option value="kanyonza">Kayonza</option>
                    <option value="nyamagabe">Nyamagabe</option>
                    <option value="nyanza">Nyanza</option>
                    <option value="gicumbi">Gicumbi</option>
                    <option value="burera">Burera</option>
                    <option value="ruhando">Ruhango</option>
                    <option value="kirehe">Kirehe</option>
                    <option value="rwamagana">Rwamagana</option>
                    <option value="gakenye">Gakenye</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category">Product Category:</label>
                <select id="category" name="category" required>
                    <option value="ibikigwa">Ibikigwa by'ibinyamake</option>
                    <option value="diary">Diary and Other (Fish)</option>
                    <option value="fresh">Fresh Vegetables</option>
                    <option value="organic">Organic Products</option>
                </select>
            </div>

            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" required>
            </div>

            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="image">Product Detailed:</label>
                <input type="text" id="text" name="pruduct_description"  required>
            </div>
            <div class="form-group">
            <label for="quantity">Quantity/Ingano:</label>
          <div class="quantity-input">
        <input type="number" id="quantity" name="quantity" required>
        <select id="quantity_unit" name="quantity_unit" required>
            <option value="kg">Kilogram (kg)</option>
            <option value="litre">Litre</option>
            <option value="piece">Piece</option>
            <option value="box">Box</option>
        </select>
    </div>
</div>

            <div class="form-group">
                <button type="submit">Ohereza</button>
            </div>
        </form>
    </div>
    <div class="product-list-container">
        <h2>Posted Products</h2>
        
        <div class="product-item">
            <div class="product-info">
                <span class="product-number">1.</span>
                <span class="product-date">Date</span>
                <span class="product-name">Product Name</span>
                <img class="product-image" src="path/to/product-image.jpg" alt="Product Image">
                <p class="product-description">Short description (10 words)</p>
                <div class="product-actions">
                    <button class="delete-action">Delete</button>
                    <button class="update-action">Update</button>
                </div>
            </div>
        </div>
       
    </div>
    </div>  
@endsection
