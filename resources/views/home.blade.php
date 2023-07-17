@extends('app')
@section('content')
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
         
@endauth
@guest

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      html,
      body {
        margin: 0;
        padding: 0;
        height: 100%;
      }

      body {
        background-image: url("{{asset('img/wave.png')}}");
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        min-height: 100%;
      }

      .card {
        width: 400px;
        height: 170px;
        background: white;
        margin: 15px 8px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .icon img {
        max-width: 100%;
        max-height: 100%;
      }

      .main {
        display: flex;
        overflow: hidden;
        box-shadow: 0 2px 10px 10px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
        margin-top: 20px;
      }

      .logo {
        width: 550px;
        height: 470px;
        background-image: url("{{asset('img/experts.png')}}");
        background-position: center;
        background-size: cover;
        border-radius: 20px;
      }

      .logo h2 {
        padding: 15px;
      }

      .signin {
        width: 320px;
        background: #061650;
        color: white;
        padding: 20px;
        text-align: center;
        border-radius: 20px;
      }

      form label {
        float: left;
        margin: 25px 0px 0px 40px;
      }

      label {
        font-size: 14px;
      }

      form input,
      form button {
        width: 200px;
        height: 35px;
        outline: none;
        border: none;
        border-radius: 15px;
        padding: 10px;
      }

      form input {
        color: white;
        background-color: #0f3965;
      }

      form a {
        color: white;
        font-size: 14px;
        float: right;
        margin: 15px 25px;
      }

      form button {
        background: #ed0c2e;
        font-size: 16px;
        padding: 1px;
        margin: 10px 0 10px 20px;
        cursor: pointer;
        color: white;
        justify-content: center;
        text-align: center;
      }

      form button:hover {
        transition: 0.5s;
        background: #cf2b44;
      }

      /* Aturan @media screen untuk tampilan responsif pada ukuran website */
      @media screen and (max-width: 1200px) {
        .container {
          padding: 20px;
        }

        .card {
          width: 300px;
        }

        .logo {
          width: 450px;
          height: 380px;
        }

        .binbot {
          width: 200px; /* Ubah ukuran binbot sesuai kebutuhan */
          height: 200px; /* Ubah ukuran binbot sesuai kebutuhan */
        }
      }

      /* Aturan @media screen untuk tampilan responsif pada ukuran tablet */
      @media screen and (max-width: 768px) {
        .container {
          padding: 10px;
        }

        .card {
          width: 250px;
        }

        .logo {
          width: 450px;
          height: 380px;
        }
        .binbot {
          display: none; /* Sembunyikan class binbot pada ukuran mobile */
        }
      }

      /* Aturan @media screen untuk tampilan responsif pada ukuran mobile */
      @media screen and (max-width: 480px) {
        .container {
          padding: 5px;
        }

        .card {
          width: 200px;
        }

        .logo {
          width: 450px;
          height: 380px;
        }

        .binbot {
          display: none; /* Sembunyikan class binbot pada ukuran mobile */
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="icon">
          <img src="{{asset('img/Logo.png')}}" />
        </div>
      </div>
      <div class="main">
        <div class="logo">
          <h2>Pusat Pembinaan Jabatan Fungsional</h2>
        </div>
        <div class="signin">
          <h1>Welcome!</h1>
          <p>Sign in to your account</p>
          
          <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
          <a class="btn btn-info" href="{{ route('register') }}">Register</a>
          <a class="btn btn-primary" style="margin-top: 10px";  href="{{ route('password') }}">Change Password</a>
          @auth
          <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
          @endauth
           @endguest
          @endsection
        </div>
      </div>
    </div>
  </body>
</html>