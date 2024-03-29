@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/farmer.css') }}">

<div class="farmer_container">
    <div class="form-container">
        <h1>Menyekanisha Umusaruwo Wawe</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <form action="{{ route('farmerform.sub') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
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
                <option selected>Hitamo</option>
                    <option value="Rulindo">Rulindo</option>
                    <option value="Huye">Huye</option>
                    <option value="Musanze">Musanze</option>
                    <option value="Nyaruguru">Nyaruguru</option>
                    <option value="Bugesera">Bugesera</option>
                    <option value="Kayonza">Kayonza</option>
                    <option value="Nyamagabe">Nyamagabe</option>
                    <option value="Nyanza">Nyanza</option>
                    <option value="Gicumbi">Gicumbi</option>
                    <option value="Burera">Burera</option>
                    <option value="Ruhango">Ruhango</option>
                    <option value="Kirehe">Kirehe</option>
                    <option value="Rwamagana">Rwamagana</option>
                    <option value="Gakenke">Gakenke</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category">Product Category:</label>
                <select id="category" name="category" required>
                <option selected>Hitamo</option>
                    <option value="Ibihigwa by'ibinyampeke">Ibihigwa by'ibinyampeke</option>
                    <option value="Imbuto">Imbuto</option>
                    <option value="Imgoga">Imboga</option>
                    <option value="Ibihingwa Ngandurarugo">Ibihingwa Ngangurabukungu</option>
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
                <input type="text" id="text" name="product_description"  required>
            </div>
            <div class="form-group">
            <label for="quantity">Quantity/Ingano:</label>
          <div class="quantity-input">
        <input type="number" id="quantity" name="quantity" required>
        <select id="quantity_unit" name="quantity_unit" required>
        <option selected>Hitamo</option>
            <option value="kg">Kilogram (kg)</option>
            <option value="litre">Litre</option>
            <option value="piece">Piece</option>
            <option value="box">Box</option>
        </select>
    </div>
</div>

            <div class="form-group">
                <button type="submit" onclick="return confirm('Emeza ko ushaka Kumenyekanisha umusaruro')">Ohereza</button>
            </div>
        </form>
    </div>
    

@endsection
