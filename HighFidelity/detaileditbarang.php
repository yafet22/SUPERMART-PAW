<?php
require_once("koneksi.php");
if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    $sql = mysqli_query($conn, "SELECT * from barang where idbarang='$id'");
    while ($row = mysqli_fetch_array($sql)){       
?>
            <!-- Modal -->
               <form id="input" action="../../editbarang-proses.php" method="POST" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?php echo $row['idbarang']; ?>">
                  <div class="form-group">
                             <label for="nbarangr">Nama Barang: </label>
                             <input type="text" class="form-control" id="nbarang" placeholder="Enter name barang" name="nbarang" value="<?php echo $row['namabarang']; ?>" >
                             </div>
                  <div class="form-group">
                             <label for="kbarang">Kategori: </label>
                             <input type="text" class="form-control" id="kbarang" placeholder="Enter kategori barang" name="kbarang" value="<?php echo $row['kategori'];?>"  readonly>
                             </div>
                  <div class="form-group">
                             <label for="hbarang">Harga: </label>
                             <input type="text" class="form-control" id="hbarang" placeholder="Enter harga barang" name="hbarang" value="<?php echo $row['harga']; ?>">
                             </div>
                  <div class="form-group">
                             <label for="sbarang">Stock: </label>
                             <input type="text" class="form-control" id="sbarang" placeholder="Enter stock barang" name="sbarang" value="<?php echo $row['stock']; ?>">
                             </div>
                  <div class="form-group">
                             <label for="desc">Deskripsi: </label>
                             <textarea class="form-control" rows="3" id="desc" placeholder="Enter deskripsi barang" name="desc" ><?php echo $row['deskripsi']; ?></textarea>
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
                                <img id='img-up'/>
                            </div>
                            <button type="submit" value="Upload" class="btn btn-primary" name="simpan">Save </button>
                  </form>
                 
        <?php } }
?>

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

