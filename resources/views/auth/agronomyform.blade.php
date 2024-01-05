@extends('layouts.app1')

@section('contentt')
<link rel="stylesheet" href="{{ asset('css/agronomy.css') }}">

    <h1>Form for Advice to Farmers</h1>

    <form >
        @csrf
        <label for="district">Select District:</label>
        <select name="district" id="district">
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

        
        <label for="category">Select Category:</label>
        <select name="category" id="category">
        <option value="ibikigwa">Ibikigwa by'ibinyamake</option>
                    <option value="diary">Diary and Other (Fish)</option>
                    <option value="fresh">Fresh Vegetables</option>
                    <option value="organic">Organic Products</option>
           
        </select>

        <!-- Plant Name -->
        <label for="plant_name">Plant Name:</label>
        <input type="text" name="plant_name" id="plant_name" required>

        <!-- File/Video/Document Upload -->
        <label for="upload">Upload File/Video/Document:</label>
        <input type="file" name="upload" id="upload" accept="video/*, image/*, application/pdf">

        <!-- Additional Information -->
        <label for="additional_info">Additional Information:</label>
        <textarea name="additional_info" id="additional_info" rows="4"></textarea>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>
@endsection

