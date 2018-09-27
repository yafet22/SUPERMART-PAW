<?php  session_start(); ?>
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
  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="assets/popper.js"></script>
    <script src="assets/bootstrap.js"></script>
    <script src="assets/mdb.js"></script>
    
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/mdb.css">
    <link rel="stylesheet" href="webfonts/font-awesome-4.7.0/css/font-awesome.min.css">


    <title>Supermarket</title>
</head>
<body>
    <?php
      if (!isset($_SESSION['email']))
      {
        // echo " <p><center>Anda Belum Login.<br>Klik Link Dibawah ini Untuk Login.<br><a href=login.php>Disini</a></center></p>";
        // exit;
        echo "<script type='text/javascript'>location='belum-login.php';</script>";
      }
      else if($_SESSION['role']!='admin')
      {
        echo "<script type='text/javascript'>location='bukan-admin.php';</script>";
      }
    ?>
    <!--Untuk bagian header-->
    <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color:#22A7F0">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="home-admin.php"><img id="logo" src="img/logo-supermarket-supermart.png" alt="logo-imk-supermarket"></a>
            </div>
            <div class="img-wrapper float-right mt-1">
                <img src="img/menu.png" id="menu-icon-phone" alt="icon-menu"style="width: 40px">
                </div>
            <div class="collapse navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav mr-auto">
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li id="profiledrop" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo '<img src="image/profile/'.$_SESSION['image_name'].'" class="img-display mx-2" style="border-radius:50%;width:35px;height:35px" />'; echo'ADMIN'; ?> 
                    </a>
                    <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="home-admin.php"><img id="shop-chart" src="img/homelogo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="home-logo"><span style="margin-left: 25px;
                    font-size: 18px;">Home</span></a>
                    <a class="dropdown-item" href="profile-admin.php"><img src="img/user-logo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="user-logo"><span style="margin-left: 25px;
                    font-size: 18px;">Profile</span></a>
                    <a class="dropdown-item" href="index-admin.php"><img id="shop-chart" src="img/shoplist.png" class="img-display mx-2" style="width:28px;height:30px;" alt="shop-chart"><span style="margin-left: 4px;
                    font-size: 18px;">Admin Panel</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout-proses.php"><img id="logout-logo" src="img/logoutlogo.png" class="img-display mx-2" style="width:36px;height:30px;" alt="logout-logo"><span style="margin-left: 14px;
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
                            <li><a href="category/makanan/makanan-ringan-admin.php">Makanan Ringan</a></li>
                            <li><a href="category/makanan/makanan-beku-admin.php">Makanan Beku</a></li>
                            <li><a href="category/makanan/makanan-pokok-admin.php">Makanan Pokok</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Minuman</li>
                        <div class="menu-content">
                            <li><a href="category/minuman/minuman-ringan-admin.php">Minuman Ringan</a></li>
                            <li><a href="category/minuman/minuman-isotonik-admin.php">Minuman Isotonik</a></li>
                            <li><a href="category/minuman/minuman-soda-admin.php">Minuman Soda</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kesehatan</li>
                        <div class="menu-content">
                            <li><a href="category/kesehatan/perawatan-diri-admin.php">Perawatan Diri</a></li>
                            <li><a href="category/kesehatan/perawatan-badan-admin.php">Perawatan Badan</a></li>
                            <li><a href="category/kesehatan/perawatan-rambut-admin.php">Perawatan Rambut</a></li>
                            <li><a href="category/kesehatan/perawatan-pria-admin.php">Perawatan Pria</a></li>
                            <li><a href="category/kesehatan/obat-obatan-admin.php">Obat - obatan</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Elektronik</li>
                        <div class="menu-content">
                            <li><a href="category/elektronik/televisi-admin.php">Televisi</a></li>
                            <li><a href="category/elektronik/aksesoris-komputer-admin.php">Aksesoris Komputer</a></li>
                            <li><a href="category/elektronik/aksesoris-handphone-admin.php">Aksesoris Handphone</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kebutuhan Rumah Tangga</li>
                        <div class="menu-content">
                            <li><a href="category/kebutuhan rumah tangga/peralatan-kebersihan-admin.php">Peralatan Kebersihan</a></li>
                            <li><a href="category/kebutuhan rumah tangga/peralatan-makan-admin.php">Peralatan Makan</a></li>
                            <li><a href="category/kebutuhan rumah tangga/peralatan-rumah-tangga-admin.php">Peralatan Rumah Tangga</a></li>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Fashion</li>
                        <div class="menu-content">
                            <li><a href="category/fashion/fashion-pria-admin.php">Fashion Pria</a></li>
                            <li><a href="category/fashion/fashion-wanita-admin.php">Fashion Wanita</a></li>
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
                <?php echo '<img src="image/profile/'.$_SESSION['image_name'].'" class="img-display mx-2" style="border-radius:50%;width:35px;height:35px" />'; echo $_SESSION['email']; ?> 
                </div>
                <hr>
                <div class="menu-content-sidebar">
                    <li><a href="home-admin.php">Home</a></li>
                    <li><a href="profile-admin.php">Profile</a></li>
                    <li><a href="index-admin.php">Admin Panel</a></li>
                    <li><a href="logout-proses.php">Log Out</a></li>
                </div>
                <hr>
                <div class="menu-title">
                    <a href="category/makanan/makanan-ringan-admin.php">Makanan</a>
                </div>
                <hr>
                <div class="menu-title">
                    <a href="category/minuman/minuman-ringan-admin.php">Minuman</a>
                </div>
                <hr>
                <div class="menu-title">
                    <a href="category/kesehatan/perawatan-diri-admin.php">Kesehatan</a>
                </div>        
                <hr>
                <div class="menu-title">
                  <a href="category/elektronik/televisi-admin.php">Elektronik</a>
                </div> 
                <hr>
                <div class="menu-title">
                    <a href="category/fashion/fashion-pria-admin.php">Fashion</a>
                </div> 
                <hr> 
                <div class="menu-title">
                  <a href="category/kebutuhan rumah tangga/peralatan-kebersihan-admin.php">Peralatan Rumah Tangga</a>
                </div>
                <hr>
            </div>
        </div>
    </nav>

    <div class="hover">

    </div>

    <!--Bagian Isi-->

    <section class="kategori">
      <div class="container title_hightlight">
        <h2 class="font-weight-bold">DATA TRANSAKSI</h2>
      </div>
      <br>
      <div class="container shop list">
        <div class="row">
           <div class="col-md-3 order-first mt-2">
                    <li class="list-group-item">
                        <a href="index-admin.php" class="text-dark">Data Barang</a>
                    </li>

                    <li class="list-group-item">
                        <a href="index-admin-2.php" class="text-dark">Data User</a>
                    </li>

                    <li class="list-group-item">
                        <a href="index-admin-3.php" class="text-dark">Data Transaksi</a>
                    </li>

                    <li class="list-group-item bg-primary">
                        <a href="index-admin-4.php" class="text-light">Data Topup</a>
                    </li>
          </div>
          <div class="col-md-9 order-first mt-2">
            <div class="row">
                    <div class="col-md-12 order-first mt-2">
                        <div class="pull-right">
                            <div class="search p-2">
                                <input class="form-control mr-sm-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by ID Topup" aria-label="Search">
                            </div>
                        </div>
                        <div class="pull-left">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" href="#" type="button" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Search By
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="index-admin-4.php">All</a>
                                    <a class="dropdown-item" href="index-admin-4-waiting.php">Waiting Only</a>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12 order-first mt-2">
                <div class="table-responsive-md">
                <table id=tableadmin class="table table-bordered" cellpadding="5" cellspacing="0" width="100%">
                    <tr style="background-color:#4285f4;color:white;text-align:center;">
                        <th class="font-weight-bold">No</th>
                        <th class="font-weight-bold">Id Topup</th>
                        <th class="font-weight-bold">Id User </th>
                        <th class="font-weight-bold">Jumlah Topup</th>
                        <th class="font-weight-bold">Bank</th>
                        <th class="font-weight-bold">Status</th>
                    </tr>

                    <?php

                    include('koneksi.php');

                    $halaman = 5;
                    $pages = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($pages>1) ? ($pages * $halaman) - $halaman : 0;
                    $sql = "SELECT * FROM topup WHERE verifikasi='WAITING' LIMIT $mulai, $halaman";
                    $result1 = mysqli_query($conn,"SELECT * FROM topup WHERE verifikasi='WAITING'");
                    $no = $mulai + 1;

                    if($result=mysqli_query($conn,$sql))
                    {
                        $total = mysqli_num_rows($result1);
                        $pages = ceil($total/$halaman);
                        if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0)
                        {

                            while($data = mysqli_fetch_assoc($result)){
                                    echo '<tr style="text-align:center;">';
                                    echo '<td>'.$no.'</td>';
                                    echo '<td>'.$data['idtopup'].'</td>';
                                    echo '<td>'.$data['idpembeli'].'</td>';
                                    echo '<td>'.$data['topup'].'</td>';
                                    echo '<td>'.$data['bank'].'</td>';
                                    echo '<td>'.$data['verifikasi'].'</td>';
                                    echo '</tr>';
                                    $no++;
                            }
                        }
                        else
                        {
                            echo '<tr><td colspan="6">Tidak ada data!</td><tr>';
                        }
                    }
                    ?>
                </table>
                <div class="col-md-12">
                <nav aria-label="Page navigation example">
                <ul class="pagination" style="margin-left:320px">
                <?php for ($i=1; $i<=$pages ; $i++){ ?>
                  <li class="page-item"><a class="page-link text-white bg-primary" href="?barang&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

                  <?php } ?>
                </ul>
                </nav>
                </div>
                    </div>
                </div>
            </div>
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
                <li style="padding-left:16px;"><p><a href="category/makanan/makanan-ringan-admin.php">Makanan</a></p></li>
                <li style="padding-left:16px;"><p><a href="category/minuman/minuman-ringan-admin.php">Minuman</a></p></li>
              </div>
              <div class="row">
                <li style="padding-left:16px;"><p><a href="category/kesehatan/perawatan-diri-admin.php">Kesehatan</a></p></li>
                <li style="padding-left:16px;"><p><a href="category/elektronik/televisi-admin.php">Elektronik</a></p></li>
              </div>

              <li><p><a href="category/kebutuhan rumah tangga/peralatan-kebersihan-admin.php">Kebutuhan Rumah Tangga</a></p></li>
              <li><p><a href="category/fashion/fashion-pria-admin.php">Fashion</a></p></li>
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
                  <a class="btn-gplus col-md-6" href="https://www.google.com/"><i class="fa fa-google-plus" style="width:38px;"></i></a>
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
        <!-- <div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                <label for="nama">Nama : </label>
                                <input type="text" class="form-control" id="nama" placeholder="Enter nama user" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="telp">Telp : </label>
                                <input type="text" class="form-control" id="telp" placeholder="Enter telepon user" name="telp" value="<?php $_SESSION['id']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="hbarang">Email: </label>
                                <input type="text" class="form-control" id="email" placeholder="Enter harga barang" name="email">
                            </div>
                            <div class="form-group">
                                <label for="sbarang">Status Aktif: </label>
                                <input type="text" class="form-control" id="aktif" placeholder="Enter stock barang" name="aktif">
                            </div>
                            <button type="submit" value="Tambah" class="btn btn-primary" name="tambah">Save </button>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal start here -->
        <div class="modal fade" id="konfirmbyadmin" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit User</h5>
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
    <script type="text/javascript">
    $(document).ready(function(){
        $('#konfirmbyadmin').on('show.bs.modal', function (e) {
            var getDetail = $(e.relatedTarget).data('id');
            /* fungsi AJAX untuk melakukan fetch data */
            $.ajax({
                type : 'post',
                url : 'konfirmbyadmin.php',
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
  <script>
    function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableadmin");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }
    }
    }
    </script>
</body>
</html>
