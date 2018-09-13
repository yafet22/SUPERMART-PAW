<?php

if(isset($_GET['id'])){


	include('koneksi.php');

	
	$id = $_GET['id'];


	$cek = "SELECT idbarang FROM barang WHERE idbarang='$id'";
    $result=mysqli_query($conn,$cek);

	if(mysqli_num_rows($result) == 0){


	    echo '<script>window.history.back()</script>';

	}else{

		$del = "DELETE FROM barang WHERE idbarang='$id'";
        $result=mysqli_query($conn,$del);
		if($result){
            echo "<script type='text/javascript'>alert(Data barang berhasil di hapus!');location='index-admin.php';</script>";
		}else{
            echo "<script type='text/javascript'>alert(Data barang gagal di hapus!');location='index-admin.php';</script>";
		}

	}

}else{

	echo '<script>window.history.back()</script>';

}
?>
