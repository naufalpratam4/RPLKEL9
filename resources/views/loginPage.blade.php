<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Page</title>
  <link rel="stylesheet" href="style1.css" />
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
  <!-- header -->
  <div class="container">
    <h1
      style="font-family: 'Baskervville'; font-style: normal; font-weight: 400; font-size: 65px; line-height: 97px; text-align: center; margin-top: 80px">
      {{$name}}</h1>
    <p class="text-center"
      style="font-family: 'Poppins'; font-style: italic; font-weight: 300; font-size: 18px; line-height: 20px; color: rgba(0, 0, 0, 0.5)">
      insomniazero.com/myaccount</p>
  </div>

  <div class="ps-5 container pt-5">
    <div class="row">
      <!-- loginLeft -->
      <div class="col-lg-5 offset-1">
        <p style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 20px; line-height: 30px">
          Sudah punya akun? Masuk</p>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alamat email" />
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Password" />
        </div>
        <p
          style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 13px; line-height: 20px; color: #2d2d2d; margin-top: -10px">
          minimal 8 karakter disertai angka</p>

        <div class="text-center">
          <button type="button" style="border: 1px solid #2d2d2d; border-radius: 10px; width: 283px" class="btn"><img
              style="width: 24px; height: 24px; left: 338px; top: 640px" src="img/google.png" alt="" /> Sign In With
            Google</button>
        </div>
        <!-- login -->
        <div class="text-center pt-2">
          <a href="homePage"><button type="button" style="border-radius: 10px; width: 283px"
              class="btn btn-dark">LOGIN</button></a>
        </div>
        <div class="text-center pt-2">
          <p
            style="font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 12px; line-height: 18px; text-decoration-line: underline; color: rgba(45, 45, 45, 0.5)">
            Lupa Sandi Anda?</p>
        </div>
      </div>
      <!-- loginRight -->
      <div class="col-lg-5 offset-1" style="padding-left: 100px">
        <h1
          style="font-family: 'Poppins'; font-style: normal; font-weight: 700; font-size: 20px; line-height: 30px; color: #2d2d2d">
          Belum Punya Akun? Daftar</h1>
        <p class="pt-3"
          style="width: 300px; font-family: 'Poppins'; font-style: normal; font-weight: 400; font-size: 14px; line-height: 21px; color: #2d2d2d">
          Bergabunglah dengan kami untuk pengalaman belanja yang lebih lancar dan mudah!
        </p>
        <div class="pt-3">
          <button type="button"
            style="width: 283px; background: #ffffff; border: 1.5px solid #2d2d2d; border-radius: 10px" class="btn">BUAT
            AKUN</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>
</html>