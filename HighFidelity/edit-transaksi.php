<?php
include('koneksi.php');
  if(isset($_POST['simpan']))
   {
    session_start();
    $id = $_POST['id'];
    $jumlah = $_POST['jumlahbarang'];


    $sql4="SELECT * FROM transaksi WHERE idtransaksi='$id'";
    $result4=mysqli_query($conn,$sql4);
    $data2 = mysqli_fetch_assoc($result4);
    $jumlahold = $data2['jumlahbarang'];
    $idbarang = $data2['idbarang'];
    $iduser = $data2['idpembeli'];
    $totalharga = $data2['totalharga'];

    $sql6 = "UPDATE user SET saldo=saldo+'$totalharga' WHERE id='$iduser'";
    $result6=mysqli_query($conn,$sql6);
    $_SESSION['saldo']=$_SESSION['saldo']+$totalharga;

    $sql2 = "UPDATE barang SET stock=(stock+'$jumlahold') WHERE idbarang='$idbarang'";
    $result2=mysqli_query($conn,$sql2);

    $sql = "SELECT * FROM barang WHERE idbarang='$idbarang'";
    $result = mysqli_query($conn,$sql);
    $databarang = mysqli_fetch_assoc($result);
    $harga = $databarang['harga'];

    if($_SESSION['saldo']>$jumlah*$harga)
    {
      $sql3 = "UPDATE transaksi SET jumlahbarang='$jumlah',totalharga='$jumlah'*'$harga' WHERE idtransaksi='$id'";
      $result3=mysqli_query($conn,$sql3);
  
      $sql5 = "UPDATE barang SET stock=(stock-'$jumlah') WHERE idbarang='$idbarang'";
      $result5=mysqli_query($conn,$sql5);
  
      $sql7 = "UPDATE user SET saldo=saldo-('$jumlah'*'$harga') WHERE id='$iduser'";
      $result7=mysqli_query($conn,$sql7);
      $_SESSION['saldo']=$_SESSION['saldo']-($jumlah*$harga);
  
  
      if ($result4 && $result2 && $result3 && $result5 && $result)
      {
          echo "<script type='text/javascript'>alert('Berhasil Mengupdate Transaksi');location='shopping-list.php';</script>";
      }
      else
      {
        echo "<script type='text/javascript'>alert('Gagal Mengupdate Transaksi');location='shopping-list.php';</script>";
        echo "Error updating record: " . mysqli_error($conn);
      }
    }
    else{
      $sql8 = "UPDATE user SET saldo=saldo-'$totalharga' WHERE id='$iduser'";
      $result8=mysqli_query($conn,$sql8);
      $_SESSION['saldo']=$_SESSION['saldo']-$totalharga;
  
      $sql9 = "UPDATE barang SET stock=(stock-'$jumlahold') WHERE idbarang='$idbarang'";
      $result9=mysqli_query($conn,$sql9);
      echo "<script type='text/javascript'>alert('Saldo anda tidak cukup');location='shopping-list.php';</script>";
    }

    
   
  }

 ?>