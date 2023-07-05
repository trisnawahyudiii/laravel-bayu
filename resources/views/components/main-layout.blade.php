<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RentCam.Id</title>

    <!-- css bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- css-->
    <link rel="stylesheet" href="{{asset('/css/hello.css')}}" />
  </head>
  <body>
    <main>
      <!-- Navbar -->
      <nav
        id="navbarStyle"
        class="navbar navbar-expand-lg navbar-light fixed-top"
      >
        <div class="container p-4">
          <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="" /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse spaceNav" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#whyChose">Why Us?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Kamera">Our Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#FAQ">FAQ</a>
              </li>
            </ul>\
            <ul class="navbar-nav">
            @if (Auth::check())
            <form action="/logout" method="POST">
                @csrf
                <li class="nav-item">
                    <button type="submit" class="logoutButton">Logout</button>
                </li>
            </form>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup">Register</a>
                </li>
            @endif

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      {{-- main slot --}}
      {{$slot}}
    </main>

    <footer class="bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <div class="wrapFooter py-4 text-center d-flex">
              <img src="img/logo.svg" alt="">
              <div class="textFooter ms-4 d-flex align-items-center">
                <h3 class="text-white">RentCam.id</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
