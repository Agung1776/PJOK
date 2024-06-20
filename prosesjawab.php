<?php
session_start();
$benar = $_POST["benar"];
$jawaban= $_POST["jawaban"];
if($benar == $jawaban){
    echo'<script>alert("Benar");location.href="soal1.php"</script>';
    $_SESSION['nilai'] += 100;
    $_SESSION['nomor'] += 1;
}
else{
    echo'<script>alert("Salah");location.href="soal1.php"</script>';
    $_SESSION['nomor'] += 1;
}

?>