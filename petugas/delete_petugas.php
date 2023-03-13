<?php
$id = $_GET['id'];
    mysqli_query($konek," DELETE FROM petugas WHERE id_petugas = '$id'");
    echo"<script>alert('delete petugas berhasil'); document.location = '?page=daftar_petugas';</script>";
?>