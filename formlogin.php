<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>LOGIN SPP</title>
  <style>

  </style>
</head>

<body>
  <!-- Section: Design Block -->
  <section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
      }

      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }

      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }

      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }
    </style>

<?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo "<div class='alert'>Username dan Password tidak sesuai</div";
    }
  }
  ?>
    <form action="cek_login.php" method="post"></form>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <form action="cek_login.php" method="post">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
              Aplikasi Pembayaran SPP <br />
              <span style="color: hsl(218, 81%, 75%)">for your education</span>
            </h1>
            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
              Aplikasi Pembayaran SPP ini untuk mengetahui anda sudah membayar spp atau belum
              dan mengetahui total tunggakan anda, semuanya kami buat agar sesimple mungkin
            </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="text-center">
                  <img src="logo_osis.jpeg" style="width: 90px;" alt="logo">
                </div>
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <div class="row">
                  <div class="col-md-6 mb-4">
                  </div>
                  <div class="col-md-6 mb-4">
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="username" class="form-control" />
                  <label class="form-label" for="form3Example3">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control" />
                  <label class="form-label" for="form3Example3">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Login
                </button>

                <div class="d-flex align-items-center justify-content-center pb-4">
                  <p class="mb-0 me-2">Don't have an account?</p>
                  <button type="button" class="btn btn-outline-danger">Create new</button>
                </div>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or Login with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>
                </div>
                <div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. Radhimas Maxsilano Wijanarko.
    </div>
  </section>
  <!-- Section: Design Block -->