<?php

   include ('koneksi.php');

   session_start();
   $email = $_POST['email'];
   $pass = md5($_POST['pwd']);
   $sql = "SELECT * FROM user where email = '$email' and password ='$pass'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result) == 0)
   {
      echo "<script type='text/javascript'>alert('Email & Password Salah');location='index.php';</script>";
   }
   else {
      $data = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $data['username'];
      $_SESSION['email'] = $data['email'];
      $_SESSION['telp'] = $data['telp'];
      $_SESSION['id'] = $data['id'];
      $_SESSION['s'] = $data['session'];
      echo "<script type='text/javascript'>alert('Selamat Datang');location='after-login.php';</script>";
   }
?>
