<?php
require_once("koneksi.php");
if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    $sql = mysqli_query($conn, "SELECT * from transaksi where idtransaksi='$id'");
    while ($row = mysqli_fetch_array($sql)){       
?>

            <!-- Modal -->
            <?php
                $idbarang = $row['idbarang'];
                $sql2 = mysqli_query($conn, "SELECT * from barang where idbarang='$idbarang'");
                $data2 = mysqli_fetch_assoc($sql2);
                $stockupdate = $data2['stock']+$row['jumlahbarang'];
                echo '<div class="wrapper"><img src="image/'.$data2['image_name'].'" alt="foto-bahan" class="img-info mx-auto d-block"></div>';
                echo '<div class="info-wrapper"><ul><li><b>Harga</b> : '.$data2['harga'].'</li><li><b>Stok</b>  : '.$stockupdate.'</li><li><b>Deskripsi</b>  : '.$data2['deskripsi'].'</li> </ul></div>';
              ?>
              <form method="POST" action="edit-transaksi.php">
              <input type="hidden" name="id" value="<?php echo $row['idtransaksi']; ?>">
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jumlah </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['jumlahbarang'];?>" name="jumlahbarang">
                            </div>
                            </div>
                  <div class="modal-footer">
                  <button class="btn btn-danger pull-left" data-dismiss="modal">Cancel</a></button>
                  <button type="submit" name="simpan" class="btn btn-primary pull-right">Save</a></button>
                  </div>            
            </form>
        <?php } }
?>