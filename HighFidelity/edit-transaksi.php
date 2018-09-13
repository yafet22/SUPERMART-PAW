<?php
include('koneksi.php');
  if(isset($_POST['simpan']))
   {
  
    $id = $_POST['id'];
    $jumlah = $_POST['jumlahbarang'];


    $sql4="SELECT * FROM transaksi WHERE idtransaksi='$id'";
    $result4=mysqli_query($conn,$sql4);
    $data2 = mysqli_fetch_assoc($result4);
    $jumlahold = $data2['jumlahbarang'];
    $idbarang = $data2['idbarang'];

    $sql2 = "UPDATE barang SET stock=(stock+'$jumlahold') WHERE idbarang='$idbarang'";
    $result2=mysqli_query($conn,$sql2);

    $sql = "SELECT * FROM barang WHERE idbarang='$idbarang'";
    $result = mysqli_query($conn,$sql);
    $databarang = mysqli_fetch_assoc($result);
    $harga = $databarang['harga'];

    $sql3 = "UPDATE transaksi SET jumlahbarang='$jumlah',totalharga='$jumlah'*'$harga' WHERE idtransaksi='$id'";
    $result3=mysqli_query($conn,$sql3);

    $sql5 = "UPDATE barang SET stock=(stock-'$jumlah') WHERE idbarang='$idbarang'";
    $result5=mysqli_query($conn,$sql5);

    if ($result4 && $result2 && $result3 && $result5 && $result)
    {
        echo "<script type='text/javascript'>location='shopping-list.php';alert('Berhasil Mengupdate Transaksi');</script>";
    }
    else
    {
      echo "<script type='text/javascript'>location='shopping-list.php';alert('Gagal Mengupdate Transaksi');</script>";
      echo "Error updating record: " . mysqli_error($conn);
    }
   
  }

 ?>