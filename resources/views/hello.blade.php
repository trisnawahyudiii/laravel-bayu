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
    <link rel="stylesheet" href="hello.css" />
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
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <!--Hero Section-->
      <section class="hero shadow">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-xl-6 d-flex align-items-center">
              <div class="Headline">
                <h1>Capture Your Best <br />Moments <span>With Us!</span></h1>
                <p>
                  Sewa kamera dimanapun dan kapanpun dengan Mudah dan Murah di RentCam.id. Jangan Ragu Jangan gentar
                  pilihlah kami untuk kenyamanan keluarga dan orang tercinta
                  anda.
                </p>
                <button class="shadow-sm">Rent Now</button>
              </div>
            </div>
            <div class="col-md-12 col-xl-6">
              <div class="imgHero">
                <img width="100%" src="img/kameraLogo.avif" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--whyChose Section-->
      <section id="whyChose">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center my-5">
              <div class="title">
                <h1>Why Choose Us</h1>
                <p>
                  Kenapa Anda Harus Memilih RentCam.id menjadi pilihan
                  Prioritasmu
                </p>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 my-4 d-flex align-items-center">
              <div class="wrapCard">
                <div class="card shadow">
                  <div class="logoCard d-flex justify-content-center mt-5">
                    <div class="logo text-center">
                      <img src="img/why1.svg" width="80%" alt="" />
                    </div>
                  </div>
                  <div class="titleCard mt-5 text-center">
                    <h1>Product Quality</h1>
                  </div>
                  <div class="descCard text-center my-5">
                    <p>
                      But I must explain to you how all this mistaken idea of
                      denouncing pleasur and prasising pain was bron.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 my-4">
              <div class="wrapCard">
                <div class="card shadow">
                  <div class="logoCard d-flex justify-content-center mt-5">
                    <div class="logo text-center">
                      <img src="img/why2.svg" width="80%" alt="" />
                    </div>
                  </div>
                  <div class="titleCard mt-5 text-center">
                    <h1>Save More Money</h1>
                  </div>
                  <div class="descCard text-center my-5">
                    <p>
                      But I must explain to you how all this mistaken idea of
                      denouncing pleasur and prasising pain was bron.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-12 my-4">
              <div class="wrapCard">
                <div class="card shadow">
                  <div class="logoCard d-flex justify-content-center mt-5">
                    <div class="logo text-center">
                      <img src="img/why3.svg" width="80%" alt="" />
                    </div>
                  </div>
                  <div class="titleCard mt-5 text-center">
                    <h1>Fast Delivery</h1>
                  </div>
                  <div class="descCard text-center my-5">
                    <p>
                      But I must explain to you how all this mistaken idea of
                      denouncing pleasur and prasising pain was bron.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Kamera Section -->
      <section id="Kamera">
        <div class="container my-5">
          <div class="row">
            <div class="col-12">
              <div class="textKamera text-center">
                <h1>Our Product</h1>
                <p>Kamera yang Tersedia di RentCam.id</p>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12 mt-4">
              <div class="containerCard border shadow py-5">
                <div class="contentCard">
                  <div class="imgCard text-center">
                    <img src="img/kamera1.svg" width="50%" alt="" />
                  </div>
                  <div class="titleCard text-center mt-3">
                    <h1>Canon CamCorder HDV</h1>
                  </div>
                  <div class="priceCard text-center">
                    <h2>Rp.350.000 <span>/ Day</span></h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12 mt-4">
              <div class="containerCard border shadow py-5">
                <div class="contentCard">
                  <div class="imgCard text-center">
                    <img src="img/kamera2.svg" width="50%" alt="" />
                  </div>
                  <div class="titleCard text-center mt-3">
                    <h1>DJI Mavic Pro</h1>
                  </div>
                  <div class="priceCard text-center">
                    <h2>Rp.800.000 <span>/ Day</span></h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12 mt-4">
              <div class="containerCard border shadow py-5">
                <div class="contentCard">
                  <div class="imgCard text-center">
                    <img src="img/kamera3.svg" width="50%" alt="" />
                  </div>
                  <div class="titleCard text-center mt-3">
                    <h1>DJI Mavic Air</h1>
                  </div>
                  <div class="priceCard text-center">
                    <h2>Rp.1.200.000 <span>/ Day</span></h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12 mt-4">
              <div class="containerCard border shadow py-5">
                <div class="contentCard">
                  <div class="imgCard text-center">
                    <img src="img/kamera4.svg" width="50%" alt="" />
                  </div>
                  <div class="titleCard text-center mt-3">
                    <h1>Sony A7S Mark II</h1>
                  </div>
                  <div class="priceCard text-center">
                    <h2>Rp.375.000 <span>/ Day</span></h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12 mt-4">
              <div class="containerCard border shadow py-5">
                <div class="contentCard">
                  <div class="imgCard text-center">
                    <img src="img/kamera5.svg" width="50%" alt="" />
                  </div>
                  <div class="titleCard text-center mt-3">
                    <h1>Nikon D3500</h1>
                  </div>
                  <div class="priceCard text-center">
                    <h2>Rp.250.000 <span>/ Day</span></h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12 mt-4">
              <div class="containerCard border shadow py-5">
                <div class="contentCard">
                  <div class="imgCard text-center">
                    <img src="img/kamera6.svg" width="50%" alt="" />
                  </div>
                  <div class="titleCard text-center mt-3">
                    <h1>Canon M50</h1>
                  </div>
                  <div class="priceCard text-center">
                    <h2>Rp.275.000 <span>/ Day</span></h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="offset-xl-2 col-xl-4 col-md-6 col-sm-12 mt-4">
              <div class="containerCard border shadow py-5">
                <div class="contentCard">
                  <div class="imgCard text-center">
                    <img src="img/kamera7.svg" width="50%" alt="" />
                  </div>
                  <div class="titleCard text-center mt-3">
                    <h1>Nikon CoolPix</h1>
                  </div>
                  <div class="priceCard text-center">
                    <h2>Rp.200.000 <span>/ Day</span></h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12 mt-4">
              <div class="containerCard border shadow py-5">
                <div class="contentCard">
                  <div class="imgCard text-center">
                    <img src="img/kamera8.svg" width="50%" alt="" />
                  </div>
                  <div class="titleCard text-center mt-3">
                    <h1>Many Lenses All Brand</h1>
                  </div>
                  <div class="priceCard text-center">
                    <h2>Start From Rp.175.000 <span>/ Day</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="FAQ">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="titleFAQ text-center my-5">
                <h1>Frequently Asked Question</h1>
                <p>Pertanyaan Seputar Kami</p>
              </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="Accordion">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSatu">
                        <button
                          class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseSatu"
                          aria-expanded="false"
                          aria-controls="collapseSatu"
                        >
                          Berapa lama proses penyewaan kamera di RentCam.id?
                        </button>
                      </h2>
                      <div
                        id="collapseSatu"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingSatu"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong
                            >This is the first item's accordion body.</strong
                          >
                          It is shown by default, until the collapse plugin adds
                          the appropriate classes that we use to style each
                          element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions.
                          You can modify any of this with custom CSS or
                          overriding our default variables. It's also worth
                          noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition
                          does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingDua">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseDua"
                          aria-expanded="false"
                          aria-controls="collapseDua"
                        >
                          Apakah RentCam.id berani menjamin kualitas produknya?
                        </button>
                      </h2>
                      <div
                        id="collapseDua"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingDua"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong
                            >This is the second item's accordion body.</strong
                          >
                          It is hidden by default, until the collapse plugin
                          adds the appropriate classes that we use to style each
                          element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions.
                          You can modify any of this with custom CSS or
                          overriding our default variables. It's also worth
                          noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition
                          does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTiga">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseTiga"
                          aria-expanded="false"
                          aria-controls="collapseTiga"
                        >
                          Mulai kapan RentCam.id terbentuk?
                        </button>
                      </h2>
                      <div
                        id="collapseTiga"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTiga"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong
                            >This is the third item's accordion body.</strong
                          >
                          It is hidden by default, until the collapse plugin
                          adds the appropriate classes that we use to style each
                          element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions.
                          You can modify any of this with custom CSS or
                          overriding our default variables. It's also worth
                          noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition
                          does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 col-md-12">
                <div class="Accordion">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button
                          class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseFour"
                          aria-expanded="false"
                          aria-controls="collapseFour"
                        >
                          Bagaimana cara menyewa camera di RentCam.id?
                        </button>
                      </h2>
                      <div
                        id="collapseFour"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong
                            >This is the first item's accordion body.</strong
                          >
                          It is shown by default, until the collapse plugin adds
                          the appropriate classes that we use to style each
                          element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions.
                          You can modify any of this with custom CSS or
                          overriding our default variables. It's also worth
                          noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition
                          does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFive">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseFive"
                          aria-expanded="false"
                          aria-controls="collapseFive"
                        >
                          Apa yang membedakan RentCam.id dengan tempat lainnya?
                        </button>
                      </h2>
                      <div
                        id="collapseFive"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong
                            >This is the second item's accordion body.</strong
                          >
                          It is hidden by default, until the collapse plugin
                          adds the appropriate classes that we use to style each
                          element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions.
                          You can modify any of this with custom CSS or
                          overriding our default variables. It's also worth
                          noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition
                          does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSix">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseSix"
                          aria-expanded="false"
                          aria-controls="collapseSix"
                        >
                          Siapa yang bertanggung jawab dari RentCam.id?
                        </button>
                      </h2>
                      <div
                        id="collapseSix"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <strong
                            >This is the third item's accordion body.</strong
                          >
                          It is hidden by default, until the collapse plugin
                          adds the appropriate classes that we use to style each
                          element. These classes control the overall appearance,
                          as well as the showing and hiding via CSS transitions.
                          You can modify any of this with custom CSS or
                          overriding our default variables. It's also worth
                          noting that just about any HTML can go within the
                          <code>.accordion-body</code>, though the transition
                          does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </div>
      </section>
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
