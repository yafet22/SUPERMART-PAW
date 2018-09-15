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
      else if($_SESSION['role']!='admin')
      {
        echo "<script type='text/javascript'>location='../../bukan-admin.php';</script>";
      }
    ?>
    <!--Untuk bagian header-->
    <header id="header-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <a href="../../index-admin.php"><img id="logo" src="../../img/logo-supermarket-supermart.png" alt="logo-imk-supermarket"></a>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <a href="../../logreg.php"><img id="user-logo" src="../../img/usernew.png" alt="user-logo"></a>
              <div class="desc"><a id="admin" href="../../profile-admin.php">ADMIN
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
                            <li><a href="../makanan/makanan-ringan-admin.php">Makanan Ringan</a></li>
                            <li><a href="../makanan/makanan-beku-admin.php">Makanan Beku</a></li>
                            <li><a href="../makanan/makanan-pokok-admin.php">Makanan Pokok</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Minuman</li>
                        <div class="menu-content">
                            <li><a href="../minuman/minuman-ringan-admin.php">Minuman Ringan</a></li>
                            <li><a href="../minuman/minuman-isotonik-admin.php">Minuman Isotonik</a></li>
                            <li><a href="../minuman/minuman-soda-admin.php">Minuman Soda</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kesehatan</li>
                        <div class="menu-content">
                            <li><a href="../kesehatan/perawatan-diri-admin.php">Perawatan Diri</a></li>
                            <li><a href="../kesehatan/perawatan-badan-admin.php">Perawatan Badan</a></li>
                            <li><a href="../kesehatan/perawatan-rambut-admin.php">Perawatan Rambut</a></li>
                            <li><a href="../kesehatan/perawatan-pria-admin.php">Perawatan Pria</a></li>
                            <li><a href="../kesehatan/obat-obatan-admin.php">Obat - obatan</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Elektronik</li>
                        <div class="menu-content">
                            <li><a href="../elektronik/televisi-admin.php">Televisi</a></li>
                            <li><a href="../elektronik/aksesoris-komputer-admin.php">Aksesoris Komputer</a></li>
                            <li><a href="../elektronik/aksesoris-handphone-admin.php">Aksesoris Handphone</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kebutuhan Rumah Tangga</li>
                        <div class="menu-content">
                            <li><a href="../kebutuhan rumah tangga/peralatan-kebersihan-admin.php">Peralatan Kebersihan</a></li>
                            <li><a href="../kebutuhan rumah tangga/peralatan-makan-admin.php">Peralatan Makan</a></li>
                            <li><a href="../kebutuhan rumah tangga/peralatan-rumah-tangga-admin.php">Peralatan Rumah Tangga</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Fashion</li>
                        <div class="menu-content">
                            <li><a href="../fashion/fashion-pria-admin.php">Fashion Pria</a></li>
                            <li><a href="../fashion/fashion-wanita-admin.php">Fashion Wanita</a></li>
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
                    <li><a href="../makanan/makanan-ringan.php">Makanan Ringan</a></li>
                    <li><a href="../makanan/makanan-beku.php">Makanan Beku</a></li>
                    <li><a href="../makanan/makanan-pokok.php">Makanan Pokok</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Minuman
                </div>
                <hr>
                <div class="menu-content-sidebar">
                    <li><a href="../minuman/minuman-ringan.php">Minuman Ringan</a></li>
                    <li><a href="../minuman/minuman-isotonik.php">Minuman Isotonik</a></li>
                    <li><a href="../minuman/minuman-soda.php">Minuman Soda</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Kesehatan
                </div>
                <hr>
                <div class="menu-content-sidebar">
                  <li><a href="../kesehatan/perawatan-diri.php">Perawatan Diri</a></li>
                  <li><a href="../kesehatan/perawatan-badan.php">Perawatan Badan</a></li>
                  <li><a href="../kesehatan/perawatan-rambut.php">Perawatan Rambut</a></li>
                  <li><a href="../kesehatan/perawatan-pria.php">Perawatan Pria</a></li>
                  <li><a href="../kesehatan/obat-obatan.php">Obat - obatan</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Elektronik
                </div>
                <hr>
                <div class="menu-content-sidebar">
                  <li><a href="../elektronik/televisi.php">Televisi</a></li>
                  <li><a href="../elektronik/aksesoris-komputer.php">Aksesoris Komputer</a></li>
                  <li><a href="../elektronik/aksesoris-handphone.php">Aksesoris Handphone</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    Peralatan Rumah Tangga
                </div>
                <hr>
                <div class="menu-content-sidebar">
                  <li><a href="../kebutuhan rumah tangga/peralatan-kebersihan.php">Peralatan Kebersihan</a></li>
                  <li><a href="../kebutuhan rumah tangga/peralatan-makan.php">Peralatan Makan</a></li>
                  <li><a href="../kebutuhan rumah tangga/peralatan-rumah-tangga.php">Peralatan Rumah Tangga</a></li>
                </div>
            </div>
        </div>
    </nav>

    <div class="hover"></div>

    <!-- Button trigger modal    -->

    <div class="container">
        <div class="row">
            <div class="col-md-3 order-first mt-2">
                <li class="list-group-item">
                    <a href="minuman-ringan-admin.php" class="text-dark">Minuman Ringan</a>
                </li>

                <li class="list-group-item">
                    <a href="minuman-isotonik-admin.php" class="text-dark">Minuman Isotonik</a>
                </li>

                <li class="list-group-item bg-primary">
                    <a href="minuman-soda-admin.php" class="text-light">Minuman Soda</a>
                </li>
                <br>
                <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#inputbarang">
                    Input Barang     
                </button>
            </div>

            <div class="col-md-9 order-last mt-2">
                <div class="row">
                <?php

                    include('../../koneksi.php');

                    $sql = "SELECT * FROM barang WHERE kategori='MinumanSoda' ORDER BY idbarang ASC";
                    $result=mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) == 0){
                        echo '<tr><td colspan="6">Tidak ada data!</td></tr>';

                    }else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($result)){
                            echo '<div class="card col-md-3 mx-1 p-3">';
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

            $sql = "SELECT * FROM barang WHERE kategori='MinumanSoda' ORDER BY idbarang ASC";
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
                    echo '</div>';
                    echo '<div class="modal-footer"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editbarang" data-id="'.$data['idbarang'].'">Edit barang</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    $no++;
                    $_SESSION['id']=$data['idbarang'];
                    $_SESSION['nama']=$data['namabarang'];
                    $_SESSION['harga']=$data['harga'];
                    $_SESSION['stock']=$data['stock'];
                    $_SESSION['deskripsi']=$data['deskripsi'];
                }

            }
        ?>
        <div class="modal fade" id="inputbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Input Barang</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="input" action="../../inputbarang-proses.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nbarangr">Nama Barang: </label>
                                <input type="text" class="form-control" id="nbarang" placeholder="Enter name barang" name="nbarang">
                            </div>
                            <div class="form-group">
                                <label for="kbarang">Kategori: </label>
                                <input type="text" class="form-control" id="kbarang" placeholder="Enter kategori barang" name="kbarang" value="MinumanSoda">
                            </div>
                            <div class="form-group">
                                <label for="hbarang">Harga: </label>
                                <input type="text" class="form-control" id="hbarang" placeholder="Enter harga barang" name="hbarang">
                            </div>
                            <div class="form-group">
                                <label for="sbarang">Stock: </label>
                                <input type="text" class="form-control" id="sbarang" placeholder="Enter stock barang" name="sbarang">
                            </div>
                            <div class="form-group">
                                <label for="desc">Deskripsi: </label>
                                <textarea class="form-control" rows="3" id="desc" placeholder="Enter deskripsi barang" name="desc"></textarea>
                                <!-- <input type="text" class="form-control" id="desc" placeholder="Enter deskripsi barang" name="desc"> -->
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp" name="file">
                                        </span>
                                    </span>
                                    <input type="text"  class="form-control" readonly>
                                </div>
                                <img id='img-upload'/>
                            </div>
                            <button type="submit" value="Upload" class="btn btn-primary" name="tambah">Save </button>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

         <!-- <div class="modal fade" id="editbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Barang</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="input" action="../../editbarang-proses.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                            <div class="form-group">
                                <label for="nbarangr">Nama Barang: </label>
                                <input type="text" class="form-control" id="nbarang" placeholder="Enter name barang" name="nbarang" value="<?php echo $_SESSION['nama']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="kbarang">Kategori: </label>
                                <input type="text" class="form-control" id="kbarang" placeholder="Enter kategori barang" name="kbarang" value="Minuman">
                            </div>
                            <div class="form-group">
                                <label for="hbarang">Harga: </label>
                                <input type="text" class="form-control" id="hbarang" placeholder="Enter harga barang" name="hbarang" value="<?php echo $_SESSION['harga']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="sbarang">Stock: </label>
                                <input type="text" class="form-control" id="sbarang" placeholder="Enter stock barang" name="sbarang" value="<?php echo $_SESSION['stock']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="desc">Deskripsi: </label>
                                <textarea class="form-control" rows="3" id="desc" placeholder="Enter deskripsi barang" name="desc" ><?php echo $_SESSION['deskripsi']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgEdt" name="picture">
                                        </span>
                                    </span>
                                    <input type="text"  class="form-control" readonly>
                                </div>
                                <img id='img-upload'/>
                            </div>
                            <button type="submit" value="Upload" class="btn btn-primary" name="simpan">Save </button>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Modal start here -->
        <div class="modal fade" id="editbarang" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-data"></div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- End of Modal -->
    </div>
    <!--Load javascript-->
    <script>
        $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
    </script>
    <script>
        $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-up').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgEdt").change(function(){
		    readURL(this);
		}); 	
	});
    </script>
    <script src="../../assets/bootstrap.js"></script>
    <script src="../../assets/script.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#editbarang').on('show.bs.modal', function (e) {
            var getDetail = $(e.relatedTarget).data('id');
            /* fungsi AJAX untuk melakukan fetch data */
            $.ajax({
                type : 'post',
                url : '../../detaileditbarang.php',
                /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                data :  'getDetail='+ getDetail,
                /* memanggil fungsi getDetail dan mengirimkannya */
                success : function(data){
                $('.modal-data').html(data);
                /* menampilkan data dalam bentuk dokumen HTML */
                }
            });
         });
    });
  </script>
</body>
</html>
