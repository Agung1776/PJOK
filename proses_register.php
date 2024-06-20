<?php
if($_POST){
$username=$_POST['username'];
$password=$_POST['password'];
if(empty($username)){
echo "<script>alert('Username tidak boleh kosong');location.href='register.php';</script>";
} elseif(empty($password)){
echo "<script>alert('Password tidak boleh kosong');location.href='register.php';</script>";
} else {
include "koneksi.php";
$qry_cek=mysqli_query($conn,"insert into user (username, password) values ('".$username."','".md5($password)."')");
if ($qry_cek) {
    echo "<script>alert('Berhasil, harap login kembali');location.href='login.php';</script>";
}
else {
    echo "<script>alert('Gagal');location.href='register.php';</script>";
}
}
}
?>