<?php
    session_start();
    include "koneksi.php";
    $qry_barang=mysqli_query($conn, "select * from pertanyaan");
    $jmlsoal= mysqli_num_rows($qry_barang);
    $nilai = $_SESSION['nilai'] / $jmlsoal;
                    $input = mysqli_query($conn, "UPDATE user SET nilai='".$nilai."' where id_user='".$_SESSION['id_user']."'");
                    mysqli_error($conn);
                    if ($input) {
                        echo "<script>alert('".$nilai."');location.href='login.php';</script>";
                        session_destroy();
                    }
                    else {
                        echo "<script>alert('Gagal');location.href='prosesjawab.php';</script>";
                    }
?>