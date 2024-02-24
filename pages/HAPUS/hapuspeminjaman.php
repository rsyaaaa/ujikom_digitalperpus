<?php
include "../../koneksi.php";
$id =$_GET['id'];
$hapus =mysqli_query($conn, "DELETE FROM peminjaman WHERE id_peminjaman='$id'");
if($hapus){
    echo '<script>alert("Peminjaman Berhasil Dihapus!"); location.href="../peminjaman.php";</script>';
}else {
    echo '<script>alert("Peminjaman Gagal Dihapus!"); location.href="../peminjaman.php";</script>';
}




?>