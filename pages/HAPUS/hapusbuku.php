<?php
include "../../koneksi.php";
$id =$_GET['id'];
$hapus =mysqli_query($conn, "DELETE FROM buku WHERE id_buku='$id'");
if($hapus){
    echo '<script>alert("Buku Berhasil Dihapus!"); location.href="../buku.php";</script>';
}else {
    echo '<script>alert("Buku Gagal Dihapus!"); location.href="../buku.php";</script>';
}




?>