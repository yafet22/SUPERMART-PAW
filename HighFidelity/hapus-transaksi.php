<?php

    include('koneksi.php');
    session_start();

	
    $id = $_GET['id'];
    $jumlah = $_GET['jumlah'];
    $idbarang = $_GET['idbarang'];


	$cek = "SELECT * FROM transaksi WHERE idtransaksi='$id'";
    $result=mysqli_query($conn,$cek);
    $data=mysqli_fetch_assoc($result);
    $iduser=$data['idpembeli'];
    $totalharga=$data['totalharga'];

	if(mysqli_num_rows($result) == 0){
        echo "<script type='text/javascript'>location='shopping-list.php';alert('Berhasil update chart');</script>";

	}else{
        $sql2 = "UPDATE barang SET stock=(stock+'$jumlah') WHERE idbarang='$idbarang'";
        $result2=mysqli_query($conn,$sql2);
       
        $sql3 = "UPDATE user SET saldo=saldo+('$totalharga') WHERE id='$iduser'";
        $result4=mysqli_query($conn,$sql3);
        $_SESSION['saldo']= $_SESSION['saldo']+$totalharga;
        
		$del = "DELETE FROM transaksi WHERE idtransaksi='$id'";
        $result3=mysqli_query($conn,$del);
        
        echo "<script type='text/javascript'>alert('Berhasil hapus transaksi');location='shopping-list.php';</script>";
	}
   
?>
