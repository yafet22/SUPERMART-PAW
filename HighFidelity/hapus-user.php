<?php

if(isset($_GET['id'])){


	include('koneksi.php');

	
	$id = $_GET['id'];


	$cek = "SELECT * FROM user WHERE id='$id'";
    $result=mysqli_query($conn,$cek);

	if(mysqli_num_rows($result) == 0){


	    echo "<script>location='index-admin-2.php'</script>";

	}else{

		$del = "DELETE FROM user WHERE id='$id'";
        $result=mysqli_query($conn,$del);
        echo "<script>location='index-admin-2.php'</script>";
		if($result){
            echo "<script>location='index-admin-2.php'</script>";
		}else{
            echo "<script type='text/javascript'>alert(Data user gagal di hapus!');location='index-admin-2.php';</script>";
		}

	}

}else{

    echo "<script>location='index-admin-2.php'</script>";

}
?>
