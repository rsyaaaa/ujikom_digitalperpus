<?php
include "../../koneksi.php";

$id = $_GET['id'];
$hapus =mysqli_query($conn, "DELETE FROM kategori_buku WHERE id_kategori ='$id'");
if($hapus){
    echo '<script>alert("Kategori Buku Berhasil Dihapus!"); location.href="../kategori.php";</script>';
}else {
    echo '<script>alert("Kategori kategori gagal dihapus."); location.href="../kategori.php";</script>';
}




?>