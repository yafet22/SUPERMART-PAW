<?php
  include 'koneksi.php';
  include 'mail.php';
  require 'encrypt-decrypt.php';
  session_start();


  if(isset($_POST['tambah']))
  {
    $idpembeli = $_SESSION['id'];
    $bank = $_POST['optradio'];
    $topup = $_POST['saldo'];
   
    $sql = "INSERT into topup VALUES (NULL,'$idpembeli','$topup','$bank',NULL,'N')";
          
      
    if($conn->query($sql)==TRUE)
    {             
        echo "<script type='text/javascript'>alert('Silahkan lakukan konfirmasi pembayaran dengan menyertakan bukti transfer');location='topup.php';</script>";
    }
    else
    { 
        echo "<script type='text/javascript'>alert('Gagal melakukan top up');location='topup.php';</script>";
    }
            
  }
?>