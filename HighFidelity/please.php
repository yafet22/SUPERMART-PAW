<table class="table table-bordered">
               <tr>
                 <th class="info">No</th>
                  <th class="info">Nama Kamar</th>
                  <th class="info">Tipe Kamar</th>
                  <th class="info">Gambar</th>
                  <th class="info">Deskripsi</th>
                  <th class="info">Harga</th>
                  <th class="info" colspan="2">Action</th>
               </tr>

               <?php
                include('../../koneksi.php');
                $halaman = 5;
                $pages = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($pages>1) ? ($pages * $halaman) - $halaman : 0;
                $sql = "SELECT * FROM kamar LIMIT $mulai, $halaman";
                $result1 = mysqli_query($conn,"SELECT * FROM kamar");
                $no = $mulai + 1;
                if($result=mysqli_query($conn,$sql))
                {
                  $total = mysqli_num_rows($result1);
                  $pages = ceil($total/$halaman);
                  if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0)
                  {

                    while($data = mysqli_fetch_assoc($result)){
                        echo '<tr>';
                            echo '<td>'.$no++.'</td>';
                            echo '<td width="12%">'.$data['nama_kamar'].'</td>';
                            echo '<td width="12%">'.$data['tipe_kamar'].'</td>';
                            echo '<td width="15%"><center><img src="../admin-tool/image/'.$data['gambar_kamar'].'" width="100%"></center></td>';
                            echo '<td>'.$data['deskripsi'].'</td>';
                            echo '<td width="15%">Rp. '.$data['harga_kamar'].'</td>';
                            echo '<td width="10%"><a href="&namakamar='.$data['nama_kamar'].'" id="myBt1">Edit</a> / <a href="hapuskamar.php">Hapus</a></td>
                            </tr>';
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
             <nav allign="center">
               <ul class="pagination">
                 <?php for ($i=1; $i<=$pages ; $i++){ ?>
                  <li><a href="?kamar&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

                  <?php } ?>
               </ul>
             </nav>
          </div>