<?php
if (isset($_POST['submit'])) {
    $tanggal= $_POST['tanggal'];
    $isi_laporan= $_POST['isi_laporan'];
    $foto= $_FILES['foto'];
    $nama_foto= $foto['name'];
    $nik = $_POST['nik'];
    $status = $_POST['status'];
    
    if ($tanggal == "" || $isi_laporan == "" || $nama_foto == "") {
        echo"<script>alert('jangan konsongkan form input silahkan login ulang');</script>";
    }else {
        $tambah = mysqli_query($konek," INSERT INTO pengaduan (id_pengaduan, tgl_pengaduan, nik, isi_laporan, fotO, status, verifikasi) VALUES ('', '$tanggal', '$nik', '$isi_laporan', '$nama_foto', '$status', '')");
        move_uploaded_file($foto['tmp_name'], '../img/'.$nama_foto);
        echo"<script>alert('tambah data'); document.location = '?page=pengaduan';</script>";
    }

}
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Pengaduan</h1>
</div>
<form method="post" enctype="multipart/form-data">
    <div class="from-group">
        <label>tanggal</label>
        <input type="date" name="tanggal" class="form-control">
    </div>
    <div class="from-group">
        <label>isi laporan</label>
        <textarea name="isi_laporan"class="form-control"></textarea>
    </div>
    <div class="from-group">
        <label>foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="from-group">
        <input type="hidden" name="nik" class="form-control" value="<?php echo $_SESSION['masyarakat']['nik'];?>">
        <input type="hidden" name="status" class="form-control" value="proses">
    </div>
        <br>
        <input type="submit" name="submit" class="btn btn-success btn-user btn-block" value="tambah">
</form>
