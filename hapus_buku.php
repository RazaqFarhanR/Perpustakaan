<?php
    if($_GET['id_buku']) {
        include "koneksi.php";
        $qry_hapus=mysqli_query($koneksi,"delete from buku where id_buku='".$_GET['id_buku']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus Buku');location.href='tampil_buku.php';</script>";
        }else {
            echo "<script>alert('Gagal hapus Buku');location.href='tampil_buku.php';</script>";
        }
    }
?>    