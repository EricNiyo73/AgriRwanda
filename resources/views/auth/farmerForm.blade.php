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
        <form action="{{ route('farmerform.submit') }}" method="post" enctype="multipart/form-data">
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
                    <option value="rulindo">Rulindo</option>
                    <option value="huye">Huye</option>
                    <option value="musanze">Musanze</option>
                    <option value="nyaruguru">Nyaruguru</option>
                    <option value="bugesera">Bugesera</option>
                    <option value="kanyonza">Kayonza</option>
                    <option value="nyamagabe">Nyamagabe</option>
                    <option value="nyanza">Nyanza</option>
                    <option value="gicumbi">Gicumbi</option>
                    <option value="burera">Burera</option>
                    <option value="ruhando">Ruhango</option>
                    <option value="kirehe">Kirehe</option>
                    <option value="rwamagana">Rwamagana</option>
                    <option value="gakenye">Gakenke</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category">Product Category:</label>
                <select id="category" name="category" required>
                <option selected>Hitamo</option>
                    <option value="Ibihigwa by'ibinyampeke">Ibihigwa by'ibinyampeke</option>
                    <option value="Diary and Other (Fish)">Diary and Other (Fish)</option>
                    <option value="Fresh Vegetables">Fresh Vegetables</option>
                    <option value="organic">Organic Products</option>
                    <option value="Ibihingwa Ngandurarugo">Ibingwa Ngandurarugo</option>
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
                <button type="submit">Ohereza</button>
            </div>
        </form>
    </div>
    <div class="product-list-container">
    <h2>Posted Products</h2>
    <table border="3">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Product Name</th>
                <th>Image</th>
                <!-- <th>Description</th> -->
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $product->formatted_created_at }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td><img class="product-image" src="{{ asset('storage/' . $product->image) }}" alt="Product Image"></td>
                    <!-- <td>{{ $product->short_description }}</td> -->
                    <td>
                    <form action="{{route('product.deleting',$product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-action" onclick="return confirm('Are you sure you want to delete this Product?')">Delete</button>
                        </form>
                        </td>
                        <td>
                        <button class="update-action"><a href="{{ route('farmer.editing', $product->id) }}">Update</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
