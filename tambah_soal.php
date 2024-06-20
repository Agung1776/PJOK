<?php
include "header.php";
?>
<h2 align="center">Tambah Soal</h2>
    <form action="proses_simpan_soal.php" method="POST">
        Nomor:
        <input type="number" required name="nomor" class="form-control"> <br>
        isi:
        <input type="text" required name="isi" class="form-control"> <br>
        jawaban a:
        <input type="text" required name="jawaban_a" class="form-control"> <br>
        jawaban b:
        <input type="text" required name="jawaban_b" class="form-control"> <br>
        jawaban c:
        <input type="text" required name="jawaban_c" class="form-control"> <br>
        jawaban d:
        <input type="text" required name="jawaban_d" class="form-control"> <br>
        benar:
        <select name="benar" id="benar">
                            <option value='a'>a</option>
                            <option value='b'>b</option>
                            <option value='c'>c</option>
                            <option value='d'>d</option>
        </select> <br>
        <input type="submit" name="simpan" value="SIMPAN">
    </form>
