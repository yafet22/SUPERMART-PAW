<?php

	include('koneksi.php');
    
    session_start();
    for($i=1;$i<=$_SESSION['max'];$i++)
    {
        $id = $_SESSION['idtransaksi'][$i];
        $idbarang = $_SESSION['idbarang'][$i];
        $jumlah = $_SESSION['jumlahbarang'][$i];

        $del = "DELETE FROM transaksi WHERE idtransaksi='$id'";
        $result=mysqli_query($conn,$del);

        $sql2 = "UPDATE barang SET stock=(stock+'$jumlah') WHERE idbarang='$idbarang'";
        $result2=mysqli_query($conn,$sql2);
        if($result && $result2)
        {
            echo "<script type='text/javascript'>alert('Berhasil update chart');location='shopping-list.php';</script>";
        }

    }      
   
?>