@extends('app')
@section('content')
@auth
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1" />
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
        min-height: 100vh;
      }

      .sidebar {
        position: fixed;
        background: #2b3137;
        width: 20vw;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
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
        position: absolute;
        right: 0;
        width: 80%;
        height: 100%;
        text-align: center;
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
        width: 90%;
        display: flex;
        text-align: center;
        justify-content: flex-end;
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
            <a href="#" class="btn"><i class="fa-solid fa-user"></i></a>
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
    </div>
  </body>
</html>
@endauth