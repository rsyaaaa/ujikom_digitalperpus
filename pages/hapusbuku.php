<?php
include "../koneksi.php";
$hapus =mysqli_query($conn, "DELETE FROM buku WHERE id_buku");
if($hapus){
    echo '<script>alert("Buku Berhasil Dihapus!"); location.href="buku.php";</script>';
}else {
    echo '<script>alert("Buku Gagal Dihapus!"); location.href="buku.php";</script>';
}




?>