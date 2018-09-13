<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Load css-->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/mdb.css">
    <link rel="stylesheet" href="webfonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="assets/jquery.js"></script>
    <script src="assets/popper.js"></script>
    <script src="assets/bootstrap.js"></script>
    <script src="assets/mdb.js"></script>
    <script src="js/jquery.min.js"></script>

    <title>IMK Supermarket</title>
</head>
<body>
    <!--Untuk bagian header-->
    <header id="header-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <img id="logo" src="img/logo-supermarket-supermart.png" alt="logo-imk-supermarket">
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <a href="logreg.php"><img id="user-logo" src="img/usernew.png" alt="user-logo"></a>
              <img id="shop-chart" src="image/shop-chart.png" alt="shop-chart">
              <div class="desc"><a id="user" href="profile.php">
              <?php session_start(); 
              $text=$_SESSION['email'];
              $wordlimit=wordlimit($text);
              echo $wordlimit;

              function wordlimit($text,$limit=13){
                  if(strlen($text)>$limit)
                    $word=mb_substr($text,0,$limit-3)."...";
                  else
                    $word=$text;

                    return $word;
              }
              ?>
              </a>
              </div>
              
            </div>
          </div>

    
        </div>

    </header>

    <nav id="navbar">
        <div class="container">
            <div class="menu-wrapper">
                <ul style="padding-left:0px;">
                    <div class="dropdown">
                        <li class="menu">Makanan</li>
                        <div class="menu-content">
                            <li><a href="category/makanan/makanan-ringan.php">Makanan Ringan</a></li>
                            <li><a href="category/makanan/makanan-beku.html">Makanan Beku</a></li>
                            <li><a href="category/makanan/makanan-pokok.html">Makanan Pokok</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Minuman</li>
                        <div class="menu-content">
                            <li><a href="category/minuman/minuman-ringan-afterlogin.php">Minuman Ringan</a></li>
                            <li><a href="category/minuman/minuman-isotonik.html">Minuman Isotonik</a></li>
                            <li><a href="category/minuman/minuman-soda.html">Minuman Soda</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kesehatan</li>
                        <div class="menu-content">
                            <li><a href="category/kesehatan/perawatan-diri.html">Perawatan Diri</a></li>
                            <li><a href="category/kesehatan/perawatan-badan.html">Perawatan Badan</a></li>
                            <li><a href="category/kesehatan/perawatan-rambut.html">Perawatan Rambut</a></li>
                            <li><a href="category/kesehatan/perawatan-pria.html">Perawatan Pria</a></li>
                            <li><a href="category/kesehatan/obat-obatan.html">Obat - obatan</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Elektronik</li>
                        <div class="menu-content">
                            <li><a href="category/elektronik/televisi.html">Televisi</a></li>
                            <li><a href="category/elektronik/aksesoris-komputer.html">Aksesoris Komputer</a></li>
                            <li><a href="category/elektronik/aksesoris-handphone.html">Aksesoris Handphone</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kebutuhan Rumah Tangga</li>
                        <div class="menu-content">
                            <li><a href="category/kebutuhan rumah tangga/peralatan-kebersihan.html">Peralatan Kebersihan</a></li>
                            <li><a href="category/kebutuhan rumah tangga/peralatan-makan.html">Peralatan Makan</a></li>
                            <li><a href="category/kebutuhan rumah tangga/peralatan-rumah-tangga.html">Peralatan Rumah Tangga</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Fashion</li>
                        <div class="menu-content">
                            <li><a href="category/fashion/fashion-pria.html">Fashion Pria</a></li>
                            <li><a href="category/fashion/fashion-wanita.html">Fashion Wanita</a></li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <nav id="sidebar">
        <div class="container">
            <div class="menu-sidebar">
                <div class="menu-title">
                    Makanan
                </div>
                <hr>
                <div class="menu-content-sidebar">
                    <li><a href="category/makanan/makanan-ringan.html">Makanan Ringan</a></li>
                    <li><a href="category/makanan/makanan-beku.html">Makanan Beku</a></li>
                    <li><a href="category/makanan/makanan-pokok.html">Makanan Pokok</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Minuman
                </div>
                <hr>
                <div class="menu-content-sidebar">
                    <li><a href="category/minuman/minuman-ringan.html">Minuman Ringan</a></li>
                    <li><a href="category/minuman/minuman-isotonik.html">Minuman Isotonik</a></li>
                    <li><a href="category/minuman/minuman-soda.html">Minuman Soda</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Kesehatan
                </div>
                <hr>
                <div class="menu-content-sidebar">
                  <li><a href="category/kesehatan/perawatan-diri.html">Perawatan Diri</a></li>
                  <li><a href="category/kesehatan/perawatan-badan.html">Perawatan Badan</a></li>
                  <li><a href="category/kesehatan/perawatan-rambut.html">Perawatan Rambut</a></li>
                  <li><a href="category/kesehatan/perawatan-pria.html">Perawatan Pria</a></li>
                  <li><a href="category/kesehatan/obat-obatan.html">Obat - obatan</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Elektronik
                </div>
                <hr>
                <div class="menu-content-sidebar">
                  <li><a href="category/elektronik/televisi.html">Televisi</a></li>
                  <li><a href="category/elektronik/aksesoris-komputer.html">Aksesoris Komputer</a></li>
                  <li><a href="category/elektronik/aksesoris-handphone.html">Aksesoris Handphone</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Peralatan Rumah Tangga
                </div>
                <hr>
                <div class="menu-content-sidebar">
                  <li><a href="category/kebutuhan rumah tangga/peralatan-kebersihan.html">Peralatan Kebersihan</a></li>
                  <li><a href="category/kebutuhan rumah tangga/peralatan-makan.html">Peralatan Makan</a></li>
                  <li><a href="category/kebutuhan rumah tangga/peralatan-rumah-tangga.html">Peralatan Rumah Tangga</a></li>
                </div>
            </div>
        </div>
    </nav>

    <div class="hover">

    </div>

    <!--Bagian Isi-->
    <section class="top">
        <div class="container slider">
            <div class="container innerslider">
                <div id="sliderinti" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#sliderinti" data-slide-to="0" class="active"></li>
                    <li data-target="#sliderinti" data-slide-to="1"></li>
                    <li data-target="#sliderinti" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/slider1.jpg" style="width:100%;">
                    </div>
                    <div class="carousel-item">
                      <img src="img/slider2.jpg" style="width:100%;">
                    </div>
                    <div class="carousel-item">
                      <img src="img/slider3.jpg" style="width:100%;">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#sliderinti" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#sliderinti" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="container highlight">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/slider2.jpg" style="width:100%;">
                    </div>
                    <div class="col-md-6">
                        <img src="img/slider3.jpg" style="width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="kategori">
      <div class="container title_hightlight">
        <h2 class="font-weight-bold">HIGHLIGHT</h2>
      </div>
      <div class="container minuman tipe">
        <div class="row">
          <div class="col-md-3">
              <img src="img/minuman.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/minuman1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/minuman2.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/minuman1.jpg" style="width:100%;">
          </div>
        </div>
      </div>
      <div class="container makanan tipe">
        <div class="row">
          <div class="col-md-3">
              <img src="img/makanan1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/makanan1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/makanan1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/makanan.jpg" style="width:100%;">
          </div>
        </div>
      </div>
      <div class="container kesehatan tipe">
        <div class="row">
          <div class="col-md-3">
              <img src="img/kesehatan.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/kesehatan1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/kesehatan2.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/kesehatan3.jpg" style="width:100%;">
          </div>
        </div>
      </div>
      <div class="container elektronik tipe">
        <div class="row">
          <div class="col-md-3">
              <img src="img/elektronik1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/elektronik1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/elektronik1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/elektronik.jpg" style="width:100%;">
          </div>
        </div>
      </div>
      <div class="container rumahtangga tipe">
        <div class="row">
          <div class="col-md-3">
              <img src="img/rumahtangga.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/rumahtangga1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/rumahtangga2.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/rumahtangga3.jpg" style="width:100%;">
          </div>
        </div>
      </div>
      <div class="container fashion tipe">
        <div class="row">
          <div class="col-md-3">
              <img src="img/fashion3.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/fashion2.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/fashion1.jpg" style="width:100%;">
          </div>
          <div class="col-md-3">
              <img src="img/fashion.jpg" style="width:100%;">
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small pt-4 mt-4 footerbtm">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mb-4">SUPERMART</h5>
            <p>Toko paling lengkap, murah dan terpercaya</p>
            <p style="text-align:justify;">Moto kami adalah kepuasan pelanggan merupakan hal yang kami utamakan dengan kata lain nomor satu dalam <i>Costumer Service</i>.  </p>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-8 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mb-4">Produk</h5>

            <ul class="list-unstyled">
              <div class="row">
                <li style="padding-left:16px;"><p><a href="category/makanan/makanan-ringan.html">Makanan</a></p></li>
                <li style="padding-left:16px;"><p><a href="category/minuman/minuman-ringan.html">Minuman</a></p></li>
              </div>
              <div class="row">
                <li style="padding-left:16px;"><p><a href="category/kesehatan/perawatan-diri.html">Kesehatan</a></p></li>
                <li style="padding-left:16px;"><p><a href="category/elektronik/televisi.html">Elektronik</a></p></li>
              </div>

              <li><p><a href="category/kebutuhan rumah tangga/peralatan-kebersihan.html">Kebutuhan Rumah Tangga</a></p></li>
              <li><p><a href="category/fashion/fashion-pria.html">Fashion</a></p></li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

            <!-- Contact details -->
            <h5 class="font-weight-bold text-uppercase mb-4">Alamat</h5>

            <ul class="list-unstyled">
              <li><p><i class="fa fa-home mr-3"></i> Jln. Barbasari No. 43, Yogyakarta</p></li>
              <li><p><i class="fa fa-envelope mr-3"></i> info@supermart.com</p></li>
              <li><p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p></li>
              <li><p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p></li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

            <!-- Social buttons -->
            <h5 class="font-weight-bold text-uppercase mb-4">Follow Kami</h5>

            <div class="row sosmed">
                <div class="container">
                  <!-- Facebook -->
                  <a class="btn-fb col-md-6" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="container">
                  <!-- Twitter -->
                  <a class="btn-tw col-md-6" href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="container">
                  <!-- Google +-->
                  <a class="btn-gplus col-md-6" href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="container">
                  <!-- Dribbble -->
                  <a class="btn-dribbble col-md-6" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                </div>

              </div>



          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="index.php"> Supermart.com</a> alright reserved.
      </div>
      <!-- Copyright -->

    </footer>

    <!-- Footer -->
    <!-- Button trigger modal    -->
    <!--Load javascript-->
    <script>
      function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    </script>
    <script src="assets/bootstrap.js"></script>
    <script src="assets/script.js"></script>
</body>
</html>
