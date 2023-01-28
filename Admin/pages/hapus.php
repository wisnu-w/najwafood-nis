<?php
include "../config/koneksi.php";
$id= $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM user where id_user ='$id'");
echo "<script>alert('Success delete data');</script>";
echo "<script>document.location.href='index.php?user';</script>";
?>