<?php
require_once("koneksi.php");
if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    $sql = mysqli_query($conn, "SELECT * from user where id='$id'");
    while ($row = mysqli_fetch_array($sql)){       
?>

            <!-- Modal -->
              <form method="POST" action="edit-user.php">
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['username'];?>" name="username">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Telp</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['telp'];?>" name="telp">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['email'];?>" name="email">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Status Aktif</label>
                            <div class="col-sm-8">
                            <?php
                                if($row['aktif']=="Y")
                                {
                                    echo'<label class="radio-inline">';
                                    echo'<input type="radio" name="aktif" id="optionsRadiosInline1" value="Y" checked> Y </label>';
                                    echo'<label class="radio-inline" style="margin-left:20px;" >';
                                    echo'<input type="radio" name="aktif" id="optionsRadiosInline2" value="T"> T </label>';
                                }
                                else
                                {
                                    echo'<label class="radio-inline">';
                                    echo'<input type="radio" name="aktif" id="optionsRadiosInline1" value="Y"> Y </label>';
                                    echo'<label class="radio-inline" style="margin-left:20px;">';
                                    echo'<input type="radio" name="aktif" id="optionsRadiosInline2" value="T" checked> T </label>';
                                }
                            ?>
                            </div>
                            </div>
                  <div class="modal-footer">
                  <button class="btn btn-danger pull-left" data-dismiss="modal">Cancel</a></button>
                  <button type="submit" name="simpan" class="btn btn-primary pull-right">Save</a></button>
                  </div>            
            </form>
        <?php } }
?>