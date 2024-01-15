@extends('layouts.app1')

@section('contentt')
<link rel="stylesheet" href="{{ asset('css/agronomy.css') }}">

    <h1>Form for Advice to Farmers</h1>

         <form action="{{ route('auth.submitAgriForm') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <label for="district">Select District:</label>
        <select name="district" id="district">
        <option value="rulindo">Rulindo</option>
                    <option value="Huye">Huye</option>
                    <option value="Musanze">Musanze</option>
                    <option value="Nyaruguru">Nyaruguru</option>
                    <option value="Bugesera">Bugesera</option>
                    <option value="kanyonza">Kayonza</option>
                    <option value="Nyamagabe">Nyamagabe</option>
                    <option value="Nyanza">Nyanza</option>
                    <option value="Gicumbi">Gicumbi</option>
                    <option value="Burera">Burera</option>
                    <option value="Ruhango">Ruhango</option>
                    <option value="kirehe">Kirehe</option>
                    <option value="Rwamagana">Rwamagana</option>
                    <option value="Gakenke">Gakenke</option>
           
        </select>

        
        <label for="category">Select Category:</label>
        <select name="category" id="category">
        <option selected>Hitamo</option>
                    <option value="Ibihigwa by'ibinyampeke">Ibihigwa by'ibinyampeke</option>
                    <option value="Imbuto">Imbuto</option>
                    <option value="Imgoga">Imboga</option>
                    <option value="Ibihingwa Ngandurarugo">Ibihingwa Ngangurabukungu</option>
           
        </select>
        <label for="plant_name">Plant Name:</label>
        <input type="text" name="plant_name" id="plant_name" required>
        <label for="upload">Upload File/Video/Document:</label>
        <input type="file" name="video" id="upload" accept="video/*, image/*, application/pdf">
        <label for="additional_info">Additional Information:</label>
        <textarea name="additional_info" id="additional_info" rows="4"></textarea>
        <label for="in_charge">In- charge By:</label>
        <input type="number" name="in_charge" id="in_charge" required>
        <button type="submit">submit</button>
    </form>
@endsection

