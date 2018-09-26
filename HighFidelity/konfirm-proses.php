<?php
include('koneksi.php');

  if(isset($_POST['simpan']))
   {
    session_start();
    $id=$_POST['id'];
    $saldo=$_POST['topup'];
  

    $sql3 = "SELECT * FROM topup WHERE idtopup='$id'";
    $result3=mysqli_query($conn,$sql3);
    $data=mysqli_fetch_assoc($result3);
    $iduser=$data['idpembeli'];
        
    $sql = "UPDATE topup SET verifikasi='CONFIRMED' WHERE idtopup='$id'";
    $result=mysqli_query($conn,$sql);

    $sql2 = "UPDATE user SET saldo=saldo+$saldo WHERE id='$iduser'";
    $result2 = mysqli_query($conn,$sql2);

    if ($result && $result2)
    {
        echo "<script type='text/javascript'>alert('Saldo Berhasil ditopup');location='index-admin-4.php';</script>";
        echo "Record updated successfully";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Terjadi Kesalahan');location='index-admin-4.php';</script>";
      echo "Error updating record: " . mysqli_error($conn);
    }
        
      
   
  }

 ?>