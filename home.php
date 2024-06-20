<?php
include "header.php";
?>
<h2>Selamat datang <?=$_SESSION['username']?> di tes psikologi.</h2>
<?php
if($_SESSION['role'] == 'user'){
?>
<button><a href="soal1.php">mulai</a></button>
<?php
}else{
}
?>