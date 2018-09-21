<?php
  include 'koneksi.php';
  include 'mail.php';
  require 'encrypt-decrypt.php';


  if(isset($_POST['tambah']))
  {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = encryptIt($_POST['pwd']);
    $kode   = md5(uniqid(rand()));
    $mail = new Mail();
    $user='user';

    // cek apakah email sudah terdaftar
    $query = "SELECT email FROM user WHERE email='$email'";
    $find = mysqli_query($conn,$query);

    if ($find && mysqli_num_rows($find) > 0) {
      echo "<script type='text/javascript'>alert('Email sudah digunakan sebelumnya');location='regis.php';</script>";
    }
    else
    {
          $fileName = $_FILES['file']['name']; //get the file name
          $fileSize = $_FILES['file']['size']; //get the size
          $fileError = $_FILES['file']['error']; //get the error when upload
          if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
              $move = move_uploaded_file($_FILES['file']['tmp_name'], 'image/profile/'.$fileName); //save image to the folder
              if($move){
              // echo "<h3>Success! </h3>";

              // $q = "INSERT into tb_image VALUES('','$fileName','image/$fileName')"; //insert image property to database
              // $result = mysql_query($q);
              $sql = "INSERT into user VALUES (NULL,'$nama','$user','$phone','$email','$pwd','$kode','T',0,'$fileName')";
          
      
              if($conn->query($sql)==TRUE)
              {
                  // echo "<p class='info'>Berhasil Dikirim</p>";
                  $mail->sendEmail($email, $kode);
                  echo "<script type='text/javascript'>alert('Berhasil membuat akun');location='logreg.php';</script>";
              }
              else
              {
                  echo "<script type='text/javascript'>alert('Gagal membuat akun');location='profile.php';</script>";
              }
              
             }
          } 
          else{
            $sql = "INSERT into user VALUES (NULL,'$nama','$user','$phone','$email','$pwd','$kode','T',0,'default-pp.jpg')";
          
    
            if($conn->query($sql)==TRUE)
            {
                // echo "<p class='info'>Berhasil Dikirim</p>";
                $mail->sendEmail($email, $kode);
                echo "<script type='text/javascript'>alert('Berhasil membuat akun');location='logreg.php';</script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('Gagal membuat akun');location='profile.php';</script>";
            }
          }
    }
 

    // if ($conn->query($sql)==TRUE) {
    //   echo "<script type='text/javascript'>alert('Berhasil membuat akun');location='logreg.php';</script>";
    // }
    // else
    // {
    //   echo "<script type='text/javascript'>alert('Gagal Membuat Akun');location='regis.php';</script>";
    // }
  }
?>