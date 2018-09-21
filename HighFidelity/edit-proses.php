<?php
include('koneksi.php');
require 'encrypt-decrypt.php';

  if(isset($_POST['simpan']))
   {
    session_start();
  
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = encryptIt($_POST['pwd']);


    $fileName = $_FILES['file']['name']; //get the file name
    $fileSize = $_FILES['file']['size']; //get the size
    $fileError = $_FILES['file']['error']; //get the error when upload
    if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
      $move = move_uploaded_file($_FILES['file']['tmp_name'], 'image/profile/'.$fileName); //save image to the folder
      if($move){
        
                $sql = "UPDATE user SET username='$nama', telp='$phone', email='$email', password='$pwd',image_name='$fileName' WHERE user.id='$id'";
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
                    $_SESSION['s'] = $data['session'];
                    $_SESSION['role'] = $data['role'];
                    $_SESSION['image_name'] = $data['image_name'];
                    $_SESSION['password'] = $data['password'];
                    echo "<script type='text/javascript'>alert('Berhasil Mengubah Akun');location='profile.php';</script>";
                    echo "Record updated successfully";
                }
                else
                {
                  echo "<script type='text/javascript'>alert('Gagal Mengubah Akun');location='profile.php';</script>";
                  echo "Error updating record: " . mysqli_error($conn);
                }
        
        }
      } 
      else{
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
                    $_SESSION['s'] = $data['session'];
                    $_SESSION['role'] = $data['role'];
                    $_SESSION['image_name'] = $data['image_name'];
                    $_SESSION['password'] = $data['password'];
                    echo "<script type='text/javascript'>alert('Berhasil Mengubah Akun');location='profile.php';</script>";
                    echo "Record updated successfully";
                }
                else
                {
                  echo "<script type='text/javascript'>alert('Gagal Mengubah Akun');location='profile.php';</script>";
                  echo "Error updating record: " . mysqli_error($conn);
                }
      }

   
  }

 ?>