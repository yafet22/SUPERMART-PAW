<?php
  include 'koneksi.php';

  if(isset($_POST['tambah']))
  {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = md5($_POST['pwd']);
    $kode   = md5(uniqid(rand()));

    // cek apakah email sudah terdaftar
    $query = "SELECT email FROM user WHERE email='$email'";
    $find = mysqli_query($conn,$query);

    if ($find && mysqli_num_rows($find) > 0) {
      echo "<script type='text/javascript'>alert('Email sudah digunakan sebelumnya');location='regis.php';</script>";
    }
    else
    {
      $sql = "INSERT into user VALUES (NULL,'$nama','user','$phone','$email','$pwd','$kode',NULL,NULL)";
      
          $to     = $_POST['email'];
          $judul  = "Aktivasi Akun Anda";
          $dari   = 'From: TUBES@web.com'."\r\n"
                    .'MIME-Version: 1.0 \n'."\r\n"
                    .'Content-type: text/html;charset=UTF-8' . "\r\n"; 
          
  
          $pesan  = "Klik link berikut untuk mengaktifkan akun: <br />";
          // $pesan  .= "<a href='konfirm.php?email=".$_POST['email']."&kode=$kode&username=".$_POST['nama']."'>konfirm.php?email=".$_POST['email']."&kode=$kode</a>";
          // $pesan .="<a href='konfirm.php'>cek</a>";
          $pesan .="<a href='localhost/HighFidelity/konfirm.php?email=".$_POST['email']."&kode=$kode&nama=".$_POST['nama']."'>cek</a>";
  
          $kirim  = mail($to, $judul, $pesan, $dari);
  
          if($kirim AND $conn->query($sql)==TRUE)
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