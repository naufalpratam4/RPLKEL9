
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
</head>
<body>
<nav class="navbar navbar-expand-lg pt-3">
      <div class="container">
        <a
          class="navbar-brand"
          href="contactus"
          style="
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;4
            line-height: 21px;
            text-align: center;
            color: #000000;
          "
          >Contact Us</a
        >

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"
              ><img src="img/orang.png" alt=""
            /></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"
              ><img src="img/lova.png" alt=""
            /></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- INSOM -->
<div class="container text-center">
  <h1 style="font-family: 'Baskervville'; font-style: normal; font-weight: 400; font-size: 50px; line-height: 65px; text-align: center; color: #000000">INSOMNIA ZERO</h1>
  
</div>
<div class="container">
  @yield('content')
</div>
</body>
</html>

