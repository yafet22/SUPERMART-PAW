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
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/bootstrap.css">
    <link rel="stylesheet" href="../../style/mdb.css">
    <link rel="stylesheet" href="../../webfonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="../../assets/jquery.js"></script>
    <script src="../../assets/popper.js"></script>
    <script src="../../assets/bootstrap.js"></script>

    <title>IMK Supermarket</title>
</head>
<body>
    <!--Untuk bagian header-->
    <header id="header-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <a href="after-login.php"><img id="logo" src="img/logo-supermarket-supermart.png" alt="logo-imk-supermarket"></a>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <a href="logreg.html"><img id="user-logo" src="img/usernew.png" alt="user-logo"></a>
              <a href="shopping-list.html"><img id="shop-chart" src="image/shop-chart.png" alt="shop-chart"></a>
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
                            <li><a href="../makanan/makanan-ringan.html">Makanan Ringan</a></li>
                            <li><a href="../makanan/makanan-beku.html">Makanan Beku</a></li>
                            <li><a href="../makanan/makanan-pokok.html">Makanan Pokok</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Minuman</li>
                        <div class="menu-content">
                            <li><a href="../minuman/minuman-ringan.html">Minuman Ringan</a></li>
                            <li><a href="../minuman/minuman-isotonik.html">Minuman Isotonik</a></li>
                            <li><a href="../minuman/minuman-soda.html">Minuman Soda</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kesehatan</li>
                        <div class="menu-content">
                            <li><a href="../kesehatan/perawatan-diri.html">Perawatan Diri</a></li>
                            <li><a href="../kesehatan/perawatan-badan.html">Perawatan Badan</a></li>
                            <li><a href="../kesehatan/perawatan-rambut.html">Perawatan Rambut</a></li>
                            <li><a href="../kesehatan/perawatan-pria.html">Perawatan Pria</a></li>
                            <li><a href="../kesehatan/obat-obatan.html">Obat - obatan</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Elektronik</li>
                        <div class="menu-content">
                            <li><a href="../elektronik/televisi.html">Televisi</a></li>
                            <li><a href="../elektronik/aksesoris-komputer.html">Aksesoris Komputer</a></li>
                            <li><a href="../elektronik/aksesoris-handphone.html">Aksesoris Handphone</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kebutuhan Rumah Tangga</li>
                        <div class="menu-content">
                            <li><a href="../kebutuhan rumah tangga/peralatan-kebersihan.html">Peralatan Kebersihan</a></li>
                            <li><a href="../kebutuhan rumah tangga/peralatan-makan.html">Peralatan Makan</a></li>
                            <li><a href="../kebutuhan rumah tangga/peralatan-rumah-tangga.html">Peralatan Rumah Tangga</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Fashion</li>
                        <div class="menu-content">
                            <li><a href="../fashion/fashion-pria.html">Fashion Pria</a></li>
                            <li><a href="../fashion/fashion-wanita.html">Fashion Wanita</a></li>
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
                    <li><a href="../makanan/makanan-ringan.html">Makanan Ringan</a></li>
                    <li><a href="../makanan/makanan-beku.html">Makanan Beku</a></li>
                    <li><a href="../makanan/makanan-pokok.html">Makanan Pokok</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Minuman
                </div>
                <hr>
                <div class="menu-content-sidebar">
                    <li><a href="../minuman/minuman-ringan.html">Minuman Ringan</a></li>
                    <li><a href="../minuman/minuman-isotonik.html">Minuman Isotonik</a></li>
                    <li><a href="../minuman/minuman-soda.html">Minuman Soda</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Kesehatan
                </div>
                <hr>
                <div class="menu-content-sidebar">
                  <li><a href="../kesehatan/perawatan-diri.html">Perawatan Diri</a></li>
                  <li><a href="../kesehatan/perawatan-badan.html">Perawatan Badan</a></li>
                  <li><a href="../kesehatan/perawatan-rambut.html">Perawatan Rambut</a></li>
                  <li><a href="../kesehatan/perawatan-pria.html">Perawatan Pria</a></li>
                  <li><a href="../kesehatan/obat-obatan.html">Obat - obatan</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Elektronik
                </div>
                <hr>
                <div class="menu-content-sidebar">
                  <li><a href="../elektronik/televisi.html">Televisi</a></li>
                  <li><a href="../elektronik/aksesoris-komputer.html">Aksesoris Komputer</a></li>
                  <li><a href="../elektronik/aksesoris-handphone.html">Aksesoris Handphone</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Peralatan Rumah Tangga
                </div>
                <hr>
                <div class="menu-content-sidebar">
                  <li><a href="../kebutuhan rumah tangga/peralatan-kebersihan.html">Peralatan Kebersihan</a></li>
                  <li><a href="../kebutuhan rumah tangga/peralatan-makan.html">Peralatan Makan</a></li>
                  <li><a href="../kebutuhan rumah tangga/peralatan-rumah-tangga.html">Peralatan Rumah Tangga</a></li>
                </div>
            </div>
        </div>
    </nav>

    <div class="hover"></div>

    <!-- Button trigger modal    -->

    <div class="container">
        <div class="row">
            <div class="col-md-3 order-first mt-2">
                <li class="list-group-item bg-primary">
                    <a href="minuman-ringan.html" class="text-light">Minuman Ringan</a>
                </li>

                <li class="list-group-item">
                    <a href="minuman-isotonik.html" class="text-dark">Minuman Isotonik</a>
                </li>

                <li class="list-group-item">
                    <a href="minuman-soda.html" class="text-dark">Minuman Soda</a>
                </li>
            </div>

            <div class="col-md-9 order-last mt-2">
                <div class="row">
                    <div class="card col-md-3 mx-1 p-3">
                        <img src="../../img/Edited/Minuman Ringan/Ultramilk.jpg" alt="foto-bahan" class="img-display">
                        <p class="text-center lead">Ultra Milk Coklat</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ultraProduk">
                            Info
                        </button>
                    </div>

                    <div class="card col-md-3 mx-1 p-3">
                        <img src="../../img/Edited/Minuman Ringan/Indomilk.jpg" alt="foto-bahan" class="img-display">
                        <p class="text-center lead">Indomilk</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#indomilkProduk">
                            Info
                        </button>
                    </div>

                    <div class="card col-md-3 mx-1 p-3">
                        <img src="../../img/Edited/Minuman Ringan/Indomilk Kaleng.jpg" alt="foto-bahan" class="img-display">
                        <p class="text-center lead">Indomilk Kaleng</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kalengProduk">
                            Info
                        </button>
                    </div>

                    <div class="card col-md-3 mx-1 my-1 p-3">
                        <img src="../../img/Edited/Minuman Ringan/Cimory.jpg" alt="foto-bahan" class="img-display">
                        <p class="text-center lead">Cimory</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cimoryProduk">
                            Info
                        </button>
                    </div>

                    <div class="card col-md-3 mx-1 my-1 p-3">
                        <img src="../../img/Edited/Makanan Ringan/Indomilk buah.jpg" alt="foto-bahan" class="img-display">
                        <p class="text-center lead">Indomilk Pisang</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#indomilkPisang">
                            Info
                        </button>
                    </div>

                    <div class="card col-md-3 mx-1 my-1 p-3">
                        <img src="../../img/Edited/Minuman Ringan/Kratingdaeng.jpg" alt="foto-bahan" class="img-display">
                        <p class="text-center lead">Kratingdaeng</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kratingdaengProduk">
                            Info
                        </button>
                    </div>

                    <div class="card col-md-3 mx-1 my-1 p-3">
                        <img src="../../img/Edited/Minuman Ringan/marjan.jpg" alt="foto-bahan" class="img-display">
                        <p class="text-center lead">Sirup Marjan</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#marjanProduk">
                            Info
                        </button>
                    </div>

                    <div class="card col-md-3 mx-1 my-1 p-3">
                        <img src="../../img/Edited/Minuman Ringan/teh botol.jpg" alt="foto-bahan" class="img-display">
                        <p class="text-center lead">Teh Botol</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tehBotolProduk">
                            Info
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                <li style="padding-left:16px;"><p><a href="../makanan/makanan-ringan.html">Makanan</a></p></li>
                <li style="padding-left:16px;"><p><a href="../minuman/minuman-ringan.html">Minuman</a></p></li>
              </div>
              <div class="row">
                <li style="padding-left:16px;"><p><a href="../kesehatan/perawatan-diri.html">Kesehatan</a></p></li>
                <li style="padding-left:16px;"><p><a href="../elektronik/televisi.html">Elektronik</a></p></li>
              </div>

              <li><p><a href="../kebutuhan rumah tangga/peralatan-kebersihan.html">Kebutuhan Rumah Tangga</a></p></li>
              <li><p><a href="../fashion/fashion-pria.html">Fashion</a></p></li>
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
        <a href="index.html"> Supermart.com</a> alright reserved.
      </div>
      <!-- Copyright -->

    </footer>
    <div class="wrapper">
        <div class="modal fade" id="ultraProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ultra Milk Coklat</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="wrapper">
                            <img src="../../img/Edited/Minuman Ringan/Ultramilk.jpg" alt="foto-bahan" class="img-info mx-auto d-block">
                        </div>

                        <div class="info-wrapper">
                            <ul>
                                <li><b>Harga</b> : Rp 6.000</li>
                                <li><b>Stok</b>  : Available</li>
                                <li><b>Deskripsi</b>  : Minuman Susu rasa coklat.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="indomilkPisang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ultra Milk Coklat</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="wrapper">
                            <img src="../../img/Edited/Makanan Ringan/Indomilk buah.jpg" alt="foto-bahan" class="img-info mx-auto d-block">
                        </div>

                        <div class="info-wrapper">
                            <ul>
                                <li><b>Harga</b> : Rp 4.000</li>
                                <li><b>Stok</b>  : Available</li>
                                <li><b>Deskripsi</b>  : Minuman Susu rasa pisang.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="kratingdaengProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Kratingdaeng</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="wrapper">
                            <img src="../../img/Edited/Minuman Ringan/Kratingdaeng.jpg" alt="foto-bahan" class="img-info mx-auto d-block">
                        </div>

                        <div class="info-wrapper">
                            <ul>
                                <li><b>Harga</b> : Rp 10.000</li>
                                <li><b>Stok</b>  : Available</li>
                                <li><b>Deskripsi</b>  : Minuman Energi.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="marjanProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Sirup Marjan</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="wrapper">
                            <img src="../../img/Edited/Minuman Ringan/marjan.jpg" alt="foto-bahan" class="img-info mx-auto d-block">
                        </div>

                        <div class="info-wrapper">
                            <ul>
                                <li><b>Harga</b> : Rp 18.000</li>
                                <li><b>Stok</b>  : Available</li>
                                <li><b>Deskripsi</b>  : Sirup rasa cocopandan.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tehBotolProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Teh Botol</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="wrapper">
                            <img src="../../img/Edited/Minuman Ringan/teh botol.jpg" alt="foto-bahan" class="img-info mx-auto d-block">
                        </div>

                        <div class="info-wrapper">
                            <ul>
                                <li><b>Harga</b> : Rp 6.000</li>
                                <li><b>Stok</b>  : Available</li>
                                <li><b>Deskripsi</b>  : Teh Kemasan rasa Teh Melati.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="indomilkProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Indomilk</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="wrapper">
                            <img src="../../img/Edited/Minuman Ringan/Indomilk.jpg" alt="foto-bahan" class="img-info mx-auto d-block">
                        </div>

                        <div class="info-wrapper">
                            <ul>
                                <li><b>Harga</b> : Rp 6.000</li>
                                <li><b>Stok</b>  : Available</li>
                                <li><b>Deskripsi</b>  : Minuman Susu rasa vanilla.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="kalengProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Indomilk Kaleng</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="wrapper">
                            <img src="../../img/Edited/Minuman Ringan/Indomilk Kaleng.jpg" alt="foto-bahan" class="img-info mx-auto d-block">
                        </div>

                        <div class="info-wrapper">
                            <ul>
                                <li><b>Harga</b> : Rp 6.000</li>
                                <li><b>Stok</b>  : Available</li>
                                <li><b>Deskripsi</b>  : Susu Kental Manis dengan kaleng.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cimoryProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Cimory</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="wrapper">
                            <img src="../../img/Edited/Minuman Ringan/Cimory.jpg" alt="foto-bahan" class="img-info mx-auto d-block">
                        </div>

                        <div class="info-wrapper">
                            <ul>
                                <li><b>Harga</b> : Rp 10.000</li>
                                <li><b>Stok</b>  : Available</li>
                                <li><b>Deskripsi</b>  : Minuman Susu rasa coklat.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="bearBrandProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Bear Brand</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Load javascript-->
    <script src="../../assets/bootstrap.js"></script>
    <script src="../../assets/script.js"></script>
</body>
</html>
