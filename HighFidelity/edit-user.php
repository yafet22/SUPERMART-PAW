<?php
include('koneksi.php');
  if(isset($_POST['simpan']))
   {
  
    $id = $_POST['id'];
    $nama = $_POST['username'];
    $phone = $_POST['telp'];
    $email = $_POST['email'];
    $aktif = $_POST['aktif'];
    
    $sql = "UPDATE user SET username='$nama', telp='$phone', email='$email', aktif='$aktif' WHERE user.id='$id'";
 
    $result=mysqli_query($conn,$sql);
    if ($result)
    {
        echo "<script type='text/javascript'>location='index-admin-2.php';alert('Berhasil Mengubah Akun');</script>";
    }
    else
    {
      echo "<script type='text/javascript'>location='index-admin-2.php';alert('Gagal Mengubah Akun');</script>";
      echo "Error updating record: " . mysqli_error($conn);
    }
   
  }

 ?>