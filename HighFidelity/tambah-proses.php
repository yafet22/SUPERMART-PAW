<?php
  include 'koneksi.php';
  include 'mail.php';


  if(isset($_POST['tambah']))
  {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = md5($_POST['pwd']);
    $kode   = md5(uniqid(rand()));
    $mail = new Mail();
    $user='user';

    // cek apakah email sudah terdaftar
    $query = "SELECT email FROM user WHERE email='$email'";
    $find = mysqli_query($conn,$query);

    if ($find && mysqli_num_rows($find) > 0) {
      echo "<script type='text/javascript'>alert('Email sudah digunakan sebelumnya');location='regis.php';</script>";
    }
    else
    {
      $sql = "INSERT into user VALUES (NULL,'$nama','$user','$phone','$email','$pwd','$kode','T',0)";
          
          $mail->sendEmail($email, $kode);
  
          if($conn->query($sql)==TRUE)
          {
              // echo "<p class='info'>Berhasil Dikirim</p>";
              echo "<script type='text/javascript'>alert('Berhasil membuat akun');location='logreg.php';</script>";
          }
          else
          {
              echo "<script type='text/javascript'>alert('Gagal Membuat Akun');location='regis.php';</script>";
          }
    }
 

    // if ($conn->query($sql)==TRUE) {
    //   echo "<script type='text/javascript'>alert('Berhasil membuat akun');location='logreg.php';</script>";
    // }
    // else
    // {
    //   echo "<script type='text/javascript'>alert('Gagal Membuat Akun');location='regis.php';</script>";
    // }
  }
?>