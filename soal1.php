<?php
include "header.php";
?>
<h2 align="center">Soal</h2>
<div class="row" align="center">
    <?php
    include "koneksi.php";
    $qry_barang=mysqli_query($conn, "select * from pertanyaan where nomor ='".$_SESSION['nomor']."'");
    if(mysqli_num_rows($qry_barang)>0){
    $dt_barang=mysqli_fetch_array($qry_barang)
        ?>
        <div class="col-md-12">
            <div class="card" >
                <h3><?=$dt_barang['isi']?></h3>
                <div class="card-body">
                    <h5 class="card-title">a.<?=$dt_barang['jawaban_a']?></h5>
                    <h5 class="card-text">b.<?=$dt_barang['jawaban_b']?></h5>
                    <h5 class="card-text">c.<?=$dt_barang['jawaban_c']?></h5>
                    <h5 class="card-text">d.<?=$dt_barang['jawaban_d']?></h5>

                    <form align="center" action="prosesjawab.php" method="POST">
                    <input type="hidden" name="benar" value="<?=$dt_barang["benar"]?>">
                        Jawaban:
                        <select name="jawaban" id="jawaban">
                            <option value='a'>a</option>
                            <option value='b'>b</option>
                            <option value='c'>c</option>
                            <option value='d'>d</option>
                        </select> <br>
                        <input type="submit" name="simpan" value="Lanjut">
                    </form>
                </div>
            </div>
        </div>
</div>
<?php
    }else{
?>
<h1>Anda sudah menyelesaikan semua soal. Silahkan logout untuk melihat nilai.</h1>
<?php
        };
?>