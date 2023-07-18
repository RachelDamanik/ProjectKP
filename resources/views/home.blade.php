@extends('app')
@section('content')
@auth
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width", initial-scale="1" />
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <style>
    * {
      margin: 0;
      padding: 0;
      text-decoration: none;
      box-sizing: border-box;
      list-style: none;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      background: #2b3137;
      width: 20vw;
      height: 100vh;
      display: flex;
      flex-direction: column;
      color: white;
      padding-top: 20px;
    }

    .type {
      height: 10vh;
      display: flex;
      align-items: center;
      justify-content: center;
      border-bottom: 2px solid lightgray;
      margin-bottom: 10px;
      color: white;
      cursor: pointer;
      background: #0f3965;
    }

    .type i {
      font-size: 20px;
    }

    .sidebar ul li {
      font-size: 24px;
      padding: 10px 40px;
      color: white;
      display: flex;
      align-items: center;
      cursor: pointer;
    }
    .sidebar ul li:hover {
      background: #2b3137;
      color: limegreen;
    }

    .container {
      margin-left: 20vw; /* Adjust this to make room for the sidebar */
      padding: 20px; /* Add padding for content */
      width: 80vw; /* Use 80vw for container width */
      min-height: 100vh; /* Ensure the container covers the full height */
    }

    .container img {
      max-width: 50%;
      max-height: 50%;
    }

    .header {
      top: 0;
      right: 0;
      width: 80vw;
      height: 10vh;
      background: #0f3965;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      z-index: 1;
      text-align: left;
    }

    .nav {
      width: 100%;
      display: flex;
      justify-content: flex-end;
      position: sticky; /* Keep the navigation fixed at the top */
      top: 0; /* Position it at the top */
      background-color: #0f3965;
    }

    .user i {
      width: 40px;
      height: 40px;
      font-size: 30px;
      padding: 5px;
      background: white;
      border-radius: 50%;
      color: #191919;
      margin: 5px 5px;
      text-align: center;
    }

    .content {
      position: relative;
      margin-top: 10vh;
      min-height: 80vh;
      width: 50%;
      height: 300px;
      background: white;
    }

    .cards {
      padding: 15px 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .card {
      background: white;
      width: 840px;
      height: 495px;
      opacity: 100%;
      display: flex;
      align-items: center;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
        0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .icon {
      color: gray;
      font-size: 40px;
    }

    i:hover {
      color: #0f3965;
    }

    .img {
      max-width: 500%;
    }
    .box {
      font-size: 2.5em;
    }
    @media screen and (max-width: 1050px) {
      .sidebar ul li {
        font-size: 18px;
      }
      .img {
        max-width: 100%;
      }
    }

    @media screen and (max-width: 940px) {
      .sidebar ul li span {
        display: none;
      }
      .sidebar {
        align-items: center;
      }
      .sidebar ul li i {
        font-size: 30px;
      }
      .sidebar ul li:hover {
        padding: 8px 38px;
      }
      .container {
        margin-left: 10vw;
      }
    }

    @media screen and (max-width: 536px) {
      .type h1 {
        display: none;
      }
      .type i {
        font-size: 30px;
      }

      .sidebar ul li i {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <div class="type">
      <i class="fa-solid fa-qrcode"></i>&nbsp;&nbsp;
      <h1>PusBin</h1>
    </div>
    <ul>
      <li>
        <i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;<span>Dashoard</span>
      </li>
      <li><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<span>Profil</span></li>
      <li>
        <i class="fa-solid fa-user-tie">&nbsp;&nbsp;</i><span>AKP</span>
      </li>
     </ul>
  </div>
  <div class="container">
    <div class="header">
      <div class="nav">
        <div class="user">
          <a href="{{ route('logout') }}" class="btn"><i class="fa-solid fa-user"></i> Logout</a>
        </div>
      </div>
    </div>
    <div class="col-lg-11 col-6 mx-auto">
      <div class="mx-auto">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center">
            <div class="mr-3">
              <div class="d-flex align-items-center">
                <img
                  src="{{asset('img/BINBOT1.png')}}"
                  style="width: 300px; height: 460px"
                />
                <div>
                  <h4
                    style="
                      font-family: 'Montserrat', sans-serif;
                      font-size: 2.2rem;
                      font-weight: bold;
                      color: black;
                    "
                  >
                    SELAMAT DATANG
                  </h4>
                  <h4
                    style="
                      font-family: 'Montserrat', sans-serif;
                      font-size: 1rem;
                      color: black;
                    "
                  >
                  <b>{{ Auth::user()->name }}</b>
                  </h4>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
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
        <a class="btn btn-primary" style="margin-top: 10px"; href="{{ route('password') }}">Change Password</a>
      </div>
    </div>
  </div>
</body>
</html>
@endguest
@endsection
