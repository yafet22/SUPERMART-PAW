<?php

	include('koneksi.php');

	
    $id = $_GET['id'];
    $jumlah = $_GET['jumlah'];
    $idbarang = $_GET['idbarang'];


	$cek = "SELECT idtransaksi FROM transaksi WHERE idtransaksi='$id'";
    $result=mysqli_query($conn,$cek);

	if(mysqli_num_rows($result) == 0){
        echo "<script type='text/javascript'>location='shopping-list.php';alert('Berhasil update chart');</script>";

	}else{
        $sql2 = "UPDATE barang SET stock=(stock+'$jumlah') WHERE idbarang='$idbarang'";
        $result2=mysqli_query($conn,$sql2);
       
		$del = "DELETE FROM transaksi WHERE idtransaksi='$id'";
        $result3=mysqli_query($conn,$del);
        
        echo "<script type='text/javascript'>location='shopping-list.php';alert('Berhasil update chart');</script>";
	}
   
?>
