<?php
require_once("koneksi.php");
if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    $sql = mysqli_query($conn, "SELECT * from topup where idtopup='$id'");
    while ($row = mysqli_fetch_array($sql)){       
?>

            <!-- Modal -->
              <div class="container">
                    <?php
                        echo  '<div class="wrapper"><img src="image/buktipembayaran/'.$row['buktitransfer'].'" alt="foto-bukti transfer" class="img-info mx-auto d-block"></div>'; 
                    ?>
            </div>
            <br>
              <form method="POST" action="konfirm-proses.php">
              <input type="hidden" name="id" value="<?php echo $row['idtopup']; ?>">
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Id Top up </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['idtopup'];?>" name="idtopup" readonly>
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Id user</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['idpembeli'];?>" name="idpembeli" readonly>
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nominal Topup</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['topup'];?>" name="topup" readonly>
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Bank</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['bank'];?>" name="bank" readonly>
                            </div>
                            </div>  
                  <div class="modal-footer">
                  <div class="span2">
                        <p><button type="submit" name="simpan" class="btn btn-primary btn-md btn-block pull-right">Konfirmasi Pembayaran</a></button></p>
                        <p><button class="btn btn-danger btn-md btn-block pull-left" data-dismiss="modal">Cancel</a></button></p>
                  </div>
                  </div>            
            </form>
        <?php } }
?>