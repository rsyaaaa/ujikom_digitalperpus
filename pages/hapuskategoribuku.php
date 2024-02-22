<?php
include "../koneksi.php";
$hapus =mysqli_query($conn, "DELETE FROM kategori_buku WHERE id_kategori");
if($hapus){
    echo '<script>alert("Kategori Buku Berhasil Dihapus!"); location.href="kategori.php";</script>';
}else {
    echo '<script>alert("Kategori tidak akan bisa dihapus apabila masih ada buku yang menggunakan kategori tersebut."); location.href="kategori.php";</script>';
}




?>