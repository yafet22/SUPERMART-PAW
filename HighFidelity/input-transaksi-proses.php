<?php
  include 'koneksi.php';
  if(isset($_POST['tambah']))
  {
    $iduser = $_GET['iduser'];
    $idbarang = $_GET['idbarang'];
    $namabarang = $_GET['namabarang'];
    $harga = $_GET['harga'];
    $jumlah = $_POST['jumlah'];
    $status = 'hold';
    // $tanggal = $date->getTimestamp();          

    $user = "SELECT * FROM user WHERE id=$iduser";
    $result2=mysqli_query($conn,$user);
    $data = mysqli_fetch_assoc($result2);
    $sessionuser = $data['session'];
    $namauser = $data['username'];


    $cek = "SELECT * FROM transaksi WHERE idbarang='$idbarang' AND idpembeli='$iduser' AND sessionpembeli='$sessionuser'";
    $result=mysqli_query($conn,$cek);
    
    $user = "SELECT * FROM user WHERE id=$iduser";
    $result2=mysqli_query($conn,$user);
    $data = mysqli_fetch_assoc($result2);

    if(mysqli_num_rows($result) == 0)
    {
        $sql = "INSERT into transaksi VALUES (NULL,'$iduser','$namauser','$sessionuser','$idbarang','$namabarang','$jumlah','$jumlah'*'$harga',NOW(),'$status')";
      
          if($conn->query($sql)==TRUE)
          {
              $sql2 = "UPDATE barang SET stock=(stock-'$jumlah') WHERE idbarang='$idbarang'";
              $result2=mysqli_query($conn,$sql2);
              // echo "<p class='info'>Berhasil Dikirim</p>";
              echo "<script type='text/javascript'>location='shopping-list.php';</script>";
          }
          else
          {
              echo "<script type='text/javascript'>alert('Gagal memasukan kedalam chart');window.history.back();</script>";
          }
    }
    else{
        
        echo "<script type='text/javascript'>alert('Barang telah terdapat pada Shopping-list');window.history.back();</script>";
    }
            
      
    
  }
  else
  {
      echo 'gak masuk';
  }
  

  
?>