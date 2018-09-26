<?php
include('koneksi.php');

  if(isset($_POST['simpan']))
   {
    session_start();
    $id=$_POST['id'];
  
    $fileName = $_FILES['file']['name']; //get the file name
    $fileSize = $_FILES['file']['size']; //get the size
    $fileError = $_FILES['file']['error']; //get the error when upload
    if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
      $move = move_uploaded_file($_FILES['file']['tmp_name'], 'image/buktipembayaran/'.$fileName); //save image to the folder
      if($move){
        
                $sql = "UPDATE topup SET verifikasi='WAITING', buktitransfer='$fileName' WHERE idtopup='$id'";
                $result=mysqli_query($conn,$sql);

                if ($result)
                {
                    echo "<script type='text/javascript'>alert('Proses topup sedang diproses silahkan tunggu');location='topup.php';</script>";
                    echo "Record updated successfully";
                }
                else
                {
                  echo "<script type='text/javascript'>alert('Terjadi Kesalahan');location='topup.php';</script>";
                  echo "Error updating record: " . mysqli_error($conn);
                }
        
        }
      } 
      else{
        echo "<script type='text/javascript'>alert('Gagal Mengupload gambar');location='topup.php';</script>";
      }

   
  }

 ?>