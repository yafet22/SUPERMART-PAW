<?php
include('koneksi.php');
  if(isset($_POST['simpan']))
   {
    session_start();
  
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = $_POST['new-pwd'];

    $sql = "UPDATE user SET username='$nama', telp='$phone', email='$email', password='$pwd' WHERE user.id='$id'";
 
    $result=mysqli_query($conn,$sql);
    if ($result)
    {
        $sql2 = "SELECT * FROM user where id = '$id'";
        $result2=mysqli_query($conn,$sql2);
        $data = mysqli_fetch_assoc($result2);
        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['telp'] = $data['telp'];
        $_SESSION['id'] = $data['id'];
        echo "<script type='text/javascript'>alert('Berhasil Mengubah Akun');location='profile.php';</script>";
        echo "Record updated successfully";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Gagal Mengubah Akun');location='profile.php';</script>";
      echo "Error updating record: " . mysqli_error($conn);
    }
   
  }

 ?>