<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$email = $_GET['email'];

$sql = "UPDATE user SET aktif = 'Y' WHERE kode = '".$kode."'";
$result=mysqli_query($conn,$sql);
if($result) {
    echo "Member dengan email <strong>".$email."</strong> telah diaktifkan";
} else {
    echo "Gagal diaktifkan";
}

// $email = Input::get('email');
// $token = Input::get('token');


// $user = new User();

// if ($email && $token) {
//     $status = $user->statusActivated($email, $token);
//     header('Location: index.php');    
// }

?>