
<!-- login.blade.php -->
@extends('layouts.auth')

@section('content')
<link rel="stylesheet" href="{{ asset('css/autho.css') }}">
<div class="Authentification_portal">
    <div class='loginPage flex'>
        <div class="container flex">

            <div class="videoDiv">
                <video src="{{ asset('images/video.mp4') }}" autoPlay muted loop></video>
                <div class="textDiv">
                    <h2 class='title'>Create and sell extraordinary products</h2>
                    <p>adopt the peace of nature!</p>
                </div>
                <div class="footerDiv flex">
                    <span class='text'> Have any account</span>
                    <a href="{{ url('/login') }}">
                        <button class='btn'>Login</button>
                    </a>
                </div>
            </div>

            <div class="formDiv flex">
                <div class="headerDiv">
                    <img src="{{ asset('images/ogi.jpeg') }}" alt="connection failed " />
                    <h3>Welcome Back!</h3>
                </div>
                <form action="{{ route('user.storeuser') }}" method="post" class='form grid'>
                @csrf
                @method('post')
                    <span class='showMessage'>
                    @error('telephone')
                         <p class="text-danger">{{ $message }}</p>
                         @enderror
                    </span>

                    <div class="inputDiv">
                        <label for="Username">Full Names</label>
                        <div class="input">
                            <span class='icon'>&#x1F482;</span>
                            <input type='text' id='fullname' name="fullname" placeholder='Enter Full names' />
                        </div>
                    </div>
             
                    <div class="inputDiv">
                        <label for="Username">Telephone</label>
                        <div class="input">
                        <!-- <span class='icon'>&#x2709;</span> -->
                        <select id="country_code" name="country_code" required>
                    <!-- Add your country codes dynamically or manually -->
                    <option value="250">250</option>
                    <!-- <option value="+44">+44 (UK)</option> -->
                    <!-- Add more options as needed -->
                </select>
                            <input type='number' id='tel' name="telephone" placeholder='Enter your Phone number' />
                        </div>
                    </div>
                    <div class="inputDiv">
                        <label for="Password">Password</label>
                        <div class="input">
                            <span class='icon'>&#x1F512;</span>
                            
                            <input type='password' id='password' name="password" placeholder='Enter Password' />
                        </div>
                    </div>

                    <button type='submit' class='btn flex'>
                        <span>Sign up</span>
                        <span class='icon'>&#x2192;</span>
                    </button>

                    <span class='forgotPassword'>
                        Forget your password? <a href="">Click Here</a>
                    </span>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
