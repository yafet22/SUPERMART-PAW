<?php
require_once("koneksi.php");
if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    $sql = mysqli_query($conn, "SELECT * from topup where idtopup='$id'");
    while ($row = mysqli_fetch_array($sql)){       
?>

            <!-- Modal -->
            <form id="input" action="uploadtokonfirm.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $row['idtopup']; ?>">
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nominal Topup </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['topup'];?>" name="topup">
                            </div>
                  </div>
                  <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Bank </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['bank'];?>" name="bank">
                            </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-4 col-form-label">Upload Bukti Pembayaran</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgEdt" name="file">
                                        </span>
                                    </span>
                                    <input type="text"  class="form-control" readonly>
                                </div>
                                <img id='img-up'/>  
                  </div>  
                  <button class="btn btn-danger pull-left" data-dismiss="modal">Cancel</a></button>
                  <button type="submit" value="Upload" class="btn btn-primary  pull-right" name="simpan">Save </button>              
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