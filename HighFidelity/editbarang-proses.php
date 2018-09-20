<?php
  include('koneksi.php');
    if(isset($_POST['simpan']))
    {
      $id = $_POST['id'];
      $nama = $_POST['nbarang'];
      $kategori = $_POST['kbarang'];
      $harga = $_POST['hbarang'];
      $stock = $_POST['sbarang'];
      $deskripsi = $_POST['desc'];
      $fileName = $_FILES['picture']['name']; //get the file name
      $fileSize = $_FILES['picture']['size']; //get the size
      $fileError = $_FILES['picture']['error']; //get the error when upload
      if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
          $move = move_uploaded_file($_FILES['picture']['tmp_name'], 'image/'.$fileName); //save image to the folder
          if($move){
          echo "<h3>Success! </h3>";

          $sql = "UPDATE barang SET namabarang='$nama', kategori='$kategori', harga='$harga', stock='$stock', image_name='$fileName', deskripsi='$deskripsi' WHERE idbarang='$id'";
          $result=mysqli_query($conn,$sql);
          
          if ($result)
          {
              echo "<script type='text/javascript'>alert('Berhasil Mengubah Data Barang');window.history.go(-1);</script>";
              echo "Record updated successfully";
          }
          else
          {
            echo "<script type='text/javascript'>alert('Gagal Mengubah Data Barang');window.history.go(-1);</script>";
            echo "Error updating record: " . mysqli_error($conn);
          }
          }
      } 
      else{
            $sql = "UPDATE barang SET namabarang='$nama', kategori='$kategori', harga='$harga', stock='$stock', deskripsi='$deskripsi' WHERE idbarang='$id'";
            $result=mysqli_query($conn,$sql);
            
            if ($result)
            {
                echo "<script type='text/javascript'>alert('Berhasil Mengubah Data Barang');window.history.go(-1);</script>";
                echo "Record updated successfully";
            }
            else
            {
            echo "<script type='text/javascript'>alert('Gagal Mengubah Data Barang');window.history.go(-1);</script>";
            echo "Error updating record: " . mysqli_error($conn);
            }
      }
      } 
      else 
      {
          echo "Failed to Upload  ";
      }
  