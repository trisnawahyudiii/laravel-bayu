<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div
      class="container d-flex justify-content-center"
      style="height: 100vh"
    >
      <div
        class="row h-100 justify-content-center d-flex align-items-center w-100"
      >
        <div class="col-12 d-flex justify-content-center">
          <div class="wrap">
            <form class="form" action="/login" method="POST">
              @csrf
              <p class="form-title">Masuk</p>
              <div class="input-container">
                <input placeholder="Masukkan Email" type="email" id="email" name="email" class="@error('email') is-invalid @enderror" autofocus required value="{{old('email')}}"/>
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
              <div class="input-container">
                <input placeholder="Masukkan Kata Sandi" type="password" id="email" name="password" required autofocus/>
              </div>
              <button class="submit" type="submit">Masuk</button>

              <p class="signup-link">
                Belum Punya Akun?
                <a href="/signup">Daftar</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
