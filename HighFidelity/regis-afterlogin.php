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
  <script src="js/regis_auth.js"></script>

  <title>Supermarket</title>
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
                            <li><a href="category/makanan/makanan-ringan-afterlogin.php">Makanan Ringan</a></li>
                            <li><a href="category/makanan/makanan-beku-afterlogin.php">Makanan Beku</a></li>
                            <li><a href="category/makanan/makanan-pokok-afterlogin.php">Makanan Pokok</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Minuman</li>
                        <div class="menu-content">
                            <li><a href="category/minuman/minuman-ringan-afterlogin.php">Minuman Ringan</a></li>
                            <li><a href="category/minuman/minuman-isotonik-afterlogin.php">Minuman Isotonik</a></li>
                            <li><a href="category/minuman/minuman-soda-afterlogin.php">Minuman Soda</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kesehatan</li>
                        <div class="menu-content">
                            <li><a href="category/kesehatan/perawatan-diri-afterlogin.php">Perawatan Diri</a></li>
                            <li><a href="category/kesehatan/perawatan-badan-afterlogin.php">Perawatan Badan</a></li>
                            <li><a href="category/kesehatan/perawatan-rambut-afterlogin.php">Perawatan Rambut</a></li>
                            <li><a href="category/kesehatan/perawatan-pria-afterlogin.php">Perawatan Pria</a></li>
                            <li><a href="category/kesehatan/obat-obatan-afterlogin.php">Obat - obatan</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Elektronik</li>
                        <div class="menu-content">
                            <li><a href="category/elektronik/televisi-afterlogin.php">Televisi</a></li>
                            <li><a href="category/elektronik/aksesoris-komputer-afterlogin.php">Aksesoris Komputer</a></li>
                            <li><a href="category/elektronik/aksesoris-handphone-afterlogin.php">Aksesoris Handphone</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kebutuhan Rumah Tangga</li>
                        <div class="menu-content">
                            <li><a href="category/kebutuhan rumah tangga/peralatan-kebersihan-afterlogin.php">Peralatan Kebersihan</a></li>
                            <li><a href="category/kebutuhan rumah tangga/peralatan-makan-afterlogin.php">Peralatan Makan</a></li>
                            <li><a href="category/kebutuhan rumah tangga/peralatan-rumah-tangga-afterlogin.php">Peralatan Rumah Tangga</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Fashion</li>
                        <div class="menu-content">
                            <li><a href="category/fashion/fashion-pria-afterlogin.php">Fashion Pria</a></li>
                            <li><a href="category/fashion/fashion-wanita-afterlogin.php">Fashion Wanita</a></li>
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




  <section class="kategori">
    <div class="container title_hightlight">
      <h2 class="font-weight-bold">REGISTRATION</h2>
    </div>
    <br>
    <div class="container logologin">
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
      
        </div>
        <div class="col-md-4">

        </div>
      </div>
    </div>
    <div class="container formlogin">
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <form id="login" action="tambah-proses.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <div class="container">
                <div class="picture-container">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                        <input id="wizard-picture" type="file" name="file">
                    </div>
                    <h6 class="">Choose Picture</h6>
                </div>
            </div>
            </div>
            <div class="form-group">
              <label for="nama">Nama:</label>
              <input type="name" class="form-control" id="nama" placeholder="Enter name" name="nama" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
            </div>
            <div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input type="password" class="form-control" id="c-pwd" placeholder="Enter password" name="c-pwd" required>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a>
                  <button type="button" class="btn btn-primary" onclick="backToIndex()" style="display: block; margin: 0 auto;">Cancel</button>
                </a>
              </div>
              <div class="col-md-6">
                <button type="submit" class="btn btn-success" value="Upload" id="submit" name="tambah" value="Tambah" style="display: block; margin: 0 auto;">Register</button>
              </div>
          </form>
          <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>

          <div class="col-md-4">
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
          <p style="text-align:justify;">Moto kami adalah kepuasan pelanggan merupakan hal yang kami utamakan dengan kata
            lain nomor satu dalam <i>Costumer Service</i>. </p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-8 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mb-4">Produk</h5>

          <ul class="list-unstyled">
            <div class="row">
              <li style="padding-left:16px;">
                <p><a href="category/makanan/makanan-ringan.html">Makanan</a></p>
              </li>
              <li style="padding-left:16px;">
                <p><a href="category/minuman/minuman-ringan.html">Minuman</a></p>
              </li>
            </div>
            <div class="row">
              <li style="padding-left:16px;">
                <p><a href="category/kesehatan/perawatan-diri.html">Kesehatan</a></p>
              </li>
              <li style="padding-left:16px;">
                <p><a href="category/elektronik/televisi.html">Elektronik</a></p>
              </li>
            </div>

            <li>
              <p><a href="category/kebutuhan rumah tangga/peralatan-kebersihan.html">Kebutuhan Rumah Tangga</a></p>
            </li>
            <li>
              <p><a href="category/fashion/fashion-pria.html">Fashion</a></p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Contact details -->
          <h5 class="font-weight-bold text-uppercase mb-4">Alamat</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fa fa-home mr-3"></i> Jln. Barbasari No. 43, Yogyakarta</p>
            </li>
            <li>
              <p><i class="fa fa-envelope mr-3"></i> info@supermart.com</p>
            </li>
            <li>
              <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
            </li>
            <li>
              <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </li>
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
  <script>
  $(document).ready(function(){
  // Prepare the preview for profile picture
      $("#wizard-picture").change(function(){
          readURL(this);
      });
  });
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  </script>
</body>

</html>