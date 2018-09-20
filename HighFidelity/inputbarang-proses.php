<?php
  include 'koneksi.php';

  if(isset($_POST['tambah']))
  {
    $nama = $_POST['nbarang'];
    $kategori = $_POST['kbarang'];
    $harga = $_POST['hbarang'];
    $stock = $_POST['sbarang'];
    $deskripsi = $_POST['desc'];
    $fileName = $_FILES['file']['name']; //get the file name
    $fileSize = $_FILES['file']['size']; //get the size
    $fileError = $_FILES['file']['error']; //get the error when upload
    if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
        $move = move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$fileName); //save image to the folder
        if($move){
        // echo "<h3>Success! </h3>";

        $sql = "INSERT into barang VALUES (NULL,'$nama','$kategori','$harga','$stock','$fileName','$deskripsi')";
        // $q = "INSERT into tb_image VALUES('','$fileName','image/$fileName')"; //insert image property to database
        // $result = mysql_query($q);
        
            if ($conn->query($sql)==TRUE) {
                echo "<script type='text/javascript'>alert('Berhasil menambah barang');window.history.go(-1);</script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('Gagal Menambag barang');>window.history.back();</script>";
            }
        }
    } 
    else{
        echo "<h3>Failed! </h3>";
    }
    } 
    else 
    {
        echo "Failed to Upload  ";
    }
  
?>