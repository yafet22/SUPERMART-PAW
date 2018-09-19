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
    <script src="../../assets/jquery.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../assets/popper.js"></script>
    <script src="../../assets/bootstrap.js"></script>
    <script src="../../assets/mdb.js"></script>
    
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/bootstrap.css">
    <link rel="stylesheet" href="../../style/mdb.css">
    <link rel="stylesheet" href="../../webfonts/font-awesome-4.7.0/css/font-awesome.min.css">


    <title>Supermarket</title>
</head>
<body>
    <?php
      session_start();
      if (!isset($_SESSION['email']))
      {
        // echo " <p><center>Anda Belum Login.<br>Klik Link Dibawah ini Untuk Login.<br><a href=login.php>Disini</a></center></p>";
        // exit;
        echo "<script type='text/javascript'>location='../../belum-login.php';</script>";
      }
      else{
        $text=$_SESSION['email'];
      }
    ?>
    <!--Untuk bagian header-->
    <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color:#22A7F0">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="../../after-login.php"><img id="logo" src="../../img/logo-supermarket-supermart.png" alt="logo-imk-supermarket"></a>
            </div>
            <div class="img-wrapper float-right mt-1">
                <img src="../../img/menu.png" id="menu-icon-phone" alt="icon-menu"style="width: 40px">
                </div>
            <div class="collapse navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav mr-auto">
                    
                </ul>
                <span>  <a href="../../shopping-list.php"><img id="shop-chart" src="../../img/shop-chart.png" class="img-display mx-2" style="width:30px;height:30px;" alt="shop-logo"></a></span>
                <ul class="nav navbar-nav navbar-right">
                <li id="profiledrop" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo '<img src="../../image/profile/'.$_SESSION['image_name'].'" class="img-display mx-2" style="border-radius:50%;width:35px;height:35px" />'; echo $_SESSION['email']; ?> 
                    </a>
                    <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../../after-login.php"><img id="shop-chart" src="../../img/homelogo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="home-logo"><span style="margin-left: 45px;
                    font-size: 18px;">Home</span></a>
                    <a class="dropdown-item" href="../../profile.php"><img src="../../img/user-logo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="user-logo"><span style="margin-left: 45px;
                    font-size: 18px;">Profile</span></a>
                    <a class="dropdown-item" href="../../shopping-list.php"><img id="shop-chart" src="../../img/shoplist.png" class="img-display mx-2" style="width:28px;height:30px;" alt="shop-chart"><span style="margin-left: 45px;
                    font-size: 18px;">Shopping List</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../logout-proses.php"><img id="logout-logo" src="../../img/logoutlogo.png" class="img-display mx-2" style="width:36px;height:30px;" alt="logout-logo"><span style="margin-left: 40px;
                    font-size: 18px;">Log Out</span></a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    
    

    <nav id="navbar">
        <div class="container">
            <div class="menu-wrapper">
                <ul style="padding-left:0px;">
                    <div class="dropdown">
                        <li class="menu">Makanan</li>
                        <div class="menu-content">
                            <li><a href="../makanan/makanan-ringan-afterlogin.php">Makanan Ringan</a></li>
                            <li><a href="../makanan/makanan-beku-afterlogin.php">Makanan Beku</a></li>
                            <li><a href="../makanan/makanan-pokok-afterlogin.php">Makanan Pokok</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Minuman</li>
                        <div class="menu-content">
                            <li><a href="../minuman/minuman-ringan-afterlogin.php">Minuman Ringan</a></li>
                            <li><a href="../minuman/minuman-isotonik-afterlogin.php">Minuman Isotonik</a></li>
                            <li><a href="../minuman/minuman-soda-afterlogin.php">Minuman Soda</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kesehatan</li>
                        <div class="menu-content">
                            <li><a href="../kesehatan/perawatan-diri-afterlogin.php">Perawatan Diri</a></li>
                            <li><a href="../kesehatan/perawatan-badan-afterlogin.php">Perawatan Badan</a></li>
                            <li><a href="../kesehatan/perawatan-rambut-afterlogin.php">Perawatan Rambut</a></li>
                            <li><a href="../kesehatan/perawatan-pria-afterlogin.php">Perawatan Pria</a></li>
                            <li><a href="../kesehatan/obat-obatan-afterlogin.php">Obat - obatan</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Elektronik</li>
                        <div class="menu-content">
                            <li><a href="../elektronik/televisi-afterlogin.php">Televisi</a></li>
                            <li><a href="../elektronik/aksesoris-komputer-afterlogin.php">Aksesoris Komputer</a></li>
                            <li><a href="../elektronik/aksesoris-handphone-afterlogin.php">Aksesoris Handphone</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kebutuhan Rumah Tangga</li>
                        <div class="menu-content">
                            <li><a href="../kebutuhan rumah tangga/peralatan-kebersihan-afterlogin.php">Peralatan Kebersihan</a></li>
                            <li><a href="../kebutuhan rumah tangga/peralatan-makan-afterlogin.php">Peralatan Makan</a></li>
                            <li><a href="../kebutuhan rumah tangga/peralatan-rumah-tangga-afterlogin.php">Peralatan Rumah Tangga</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Fashion</li>
                        <div class="menu-content">
                            <li><a href="../fashion/fashion-pria-afterlogin.php">Fashion Pria</a></li>
                            <li><a href="../fashion/fashion-wanita-afterlogin.php">Fashion Wanita</a></li>
                        </div>
                    </div>

                </ul>
            </div>
        </div>
    </nav>

    <nav id="sidebar" style="height:570px">
        <div class="container">
            <div class="menu-sidebar">
                <div class="menu-title">
                <?php echo '<img src="../../image/profile/'.$_SESSION['image_name'].'" class="img-display mx-2" style="border-radius:50%;width:35px;height:35px" />'; echo $_SESSION['email']; ?> 
                </div>
                <hr>
                <div class="menu-content-sidebar">
                    <li><a href="../../after-login.php">Home</a></li>
                    <li><a href="../../profile.php">Profile</a></li>
                    <li><a href="../../shopping-list.php">Shopping List</a></li>
                    <li><a href="../../logout-proses.php">Log Out</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    <a href="../makanan/makanan-ringan-afterlogin.php">Makanan</a>
                </div>
                <hr>
                <div class="menu-title">
                    <a href="../minuman/minuman-ringan-afterlogin.php">Minuman</a>
                </div>
                <hr>
                <div class="menu-title">
                    <a href="../kesehatan/perawatan-diri-afterlogin.php">Kesehatan</a>
                </div>        
                <hr>
                <div class="menu-title">
                  <a href="../elektronik/televisi-afterlogin.php">Elektronik</a>
                </div>  
                <hr>
                <div class="menu-title">
                    <a href="../fashion/fashion-pria-afterlogin.php">Fashion</a>
                </div>
                <hr>
                <div class="menu-title">
                  <a href="../kebutuhan rumah tangga/peralatan-kebersihan-afterlogin.php">Peralatan Rumah Tangga</a>
                </div>
                <hr>
            </div>
        </div>
    </nav>

    <div class="hover"></div>

    <!-- Button trigger modal    -->

    <div class="container">
        <div class="row">
            <div class="col-md-3 order-first mt-2">
                <li class="list-group-item bg-primary">
                    <a href="minuman-ringan-afterlogin.php" class="text-light">Minuman Ringan</a>
                </li>

                <li class="list-group-item">
                    <a href="minuman-isotonik-afterlogin.php" class="text-dark">Minuman Isotonik</a>
                </li>

                <li class="list-group-item">
                    <a href="minuman-soda-afterlogin.php" class="text-dark">Minuman Soda</a>
                </li>
            </div>

            <div class="col-md-9 order-last mt-2">
                <div class="row">
                <?php

                    include('../../koneksi.php');

                    $sql = "SELECT * FROM barang WHERE kategori='MinumanRingan' ORDER BY idbarang ASC";
                    $result=mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) == 0){
                
                    }else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($result)){
                            echo '<div class="card col-md-3 mx-1 p-3">';
                            // echo '<img src="'.base64_encode($data['foto']).'" alt="foto-bahan" class="img-display">';
                            // echo '<img src="data:image/jpeg;base64,'.base64_encode($data['foto'] ).'" class="img-display"/>';
                            echo '<img src="../../image/'.$data['image_name'].'" class="img-display" />'; 
                            echo '<p class="text-center lead">'.$data['namabarang'].'</p>';
                            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$data['idbarang'].'">Info</button>';
                            echo '</div>';
                            $no++;

                        }

                    }
                ?>
                    <!-- <div class="card col-md-3 mx-1 p-3">
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
                    </div> -->
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
                <li style="padding-left:16px;"><p><a href="../makanan/makanan-ringan.php">Makanan</a></p></li>
                <li style="padding-left:16px;"><p><a href="../minuman/minuman-ringan.php">Minuman</a></p></li>
              </div>
              <div class="row">
                <li style="padding-left:16px;"><p><a href="../kesehatan/perawatan-diri.php">Kesehatan</a></p></li>
                <li style="padding-left:16px;"><p><a href="../elektronik/televisi.php">Elektronik</a></p></li>
              </div>

              <li><p><a href="../kebutuhan rumah tangga/peralatan-kebersihan.php">Kebutuhan Rumah Tangga</a></p></li>
              <li><p><a href="../fashion/fashion-pria.php">Fashion</a></p></li>
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
    <div class="wrapper">
        <?php

            include('../../koneksi.php');

            $sql = "SELECT * FROM barang WHERE kategori='MinumanRingan' ORDER BY idbarang ASC";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) == 0){
                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';

            }else{
                $no = 1;
                while($data = mysqli_fetch_assoc($result)){
                    echo '<div class="modal fade" id="'.$data['idbarang'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                    echo '<div class="modal-dialog modal-dialog-centered" role="document">';
                    echo '<div class="modal-content">';
                    echo '<div class="modal-header">';
                    echo '<h5 class="modal-title" id="exampleModalLongTitle">'.$data['namabarang'].'</h5>';
                    echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                    echo '</div>';
                    echo '<div class="modal-body">';
                    echo '<div class="wrapper"><img src="../../image/'.$data['image_name'].'" alt="foto-bahan" class="img-info mx-auto d-block"></div>';
                    echo '<div class="info-wrapper"><ul><li><b>Harga</b> : '.$data['harga'].'</li><li><b>Stok</b>  : '.$data['stock'].'</li><li><b>Deskripsi</b>  : '.$data['deskripsi'].'</li> </ul></div>';
                    echo ' <form id="jumlah" action="../../input-transaksi-proses.php?iduser='.$_SESSION['id'].'&idbarang='.$data['idbarang'].'&namabarang='.$data['namabarang'].'&harga='.$data['harga'].'" method="POST">
                    <div class="form-group">';
                    echo '<input type="name" class="form-control" id="jumlah" placeholder="Jumlah beli" name="jumlah" required></div>';
                    echo '<button type="submit" value="tambah" name="tambah" class="btn btn-warning" >Masukan chart</button>';
                    echo '</form>';
                    echo '</div>';
                    echo '<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    $no++;
                }

            }
        ?>
        <!-- <div class="modal fade" id="ultraProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        </div> -->

    </div>
    <!--Load javascript-->
    <script src="../../assets/bootstrap.js"></script>
    <script src="../../assets/script.js"></script>
</body>
</html>
