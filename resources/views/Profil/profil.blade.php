<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1" />
    <title>Dashboard</title>

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
        display: flex;
        flex-direction: column;
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
        margin-bottom: 20px;
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

      i:hover {
        color: #0f3965;
      }

      .userprofile {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        background-color: #d9d9d9;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        font-family: "Inter", sans-serif;
        font-weight: normal;
        font-style: normal;
      }

      .profile-picture {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin: 0 auto;
        display: block;
        overflow: hidden;
      }

      .profile-picture img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .profile-name {
        text-align: center;
        font-size: 24px;
      }

      .profile-details {
        margin-top: 20px;
      }

      @media screen and (max-width: 1050px) {
        .sidebar ul li {
          font-size: 18px;
        }
        .img {
          max-width: 100%;
        }
      }
      .table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid black;
      }

      .table td,
      .table th {
        border: 1px solid black;
        padding: 8px;
      }

      .table th {
        background-color: #f2f2f2;
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
        .userprofile {
          padding: 20px;
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
        .userprofile {
          padding: 15px;
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
      <div class="content">
        <div class="userprofile">
          <div class="profile-picture">
            <img src="Niar.jpg" alt="Profile Picture" />
            <figcaption>Niar Fujita Simbolon</figcaption>
          </div>

          <div class="profile-details">
            <table class="table table-condensed detail-view">
              <thead>
                <tr>
                  <td><b>NIP</b></td>
                  <td>************</td>
                </tr>
                <tr>
                  <td><b>Nama</b></td>
                  <td>Niar Fujita Simbolon</td>
                </tr>
                <tr>
                  <td><b>Golongan</b></td>
                  <td>-</td>
                </tr>
                <tr>
                  <td><b>Pangkat</b></td>
                  <td>-</td>
                </tr>
                <tr>
                  <td><b>Jabatan</b></td>
                  <td>-</td>
                </tr>
                <tr>
                  <td><b>Agama</b></td>
                  <td>Kristen Protestan</td>
                </tr>
                <tr>
                  <td><b>Jenis Kelamin</b></td>
                  <td>Perempuan</td>
                </tr>
                <tr>
                  <td><b>No. Telp</b></td>
                  <td>082246099151</td>
                </tr>
                <tr>
                  <td><b>Email</b></td>
                  <td>niarfujita1@gmail.com</td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
