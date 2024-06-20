<?php
if($_POST){
    $nomor=$_POST['nomor'];
    $isi=$_POST['isi'];
    $jawaban_a=$_POST['jawaban_a'];
    $jawaban_b=$_POST['jawaban_b'];
    $jawaban_c=$_POST['jawaban_c'];
    $jawaban_d=$_POST['jawaban_d'];
    $benar=$_POST['benar'];
        include "koneksi.php";
        $simpan=mysqli_query($conn, "insert into pertanyaan value('$nomor', '$isi', '$jawaban_a','$jawaban_b','$jawaban_c','$jawaban_d','$benar')");
        mysqli_error($conn);
        if($simpan){
             echo'<script>alert("Sukses");location.href="tambah_soal.php"</script>';
        }
        else{
             echo '<script>alert("Gagal");location.href="tambah_soal.php"</script>';
}
}
?>