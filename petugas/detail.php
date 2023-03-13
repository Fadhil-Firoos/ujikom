<?php
    ini_set('date.timezone','Asia/Jakarta');
    $tgl=date("Y-m-d");
    $id = $_GET['id'];
    $pengaduan = mysqli_query($konek," SELECT * FROM pengaduan INNER JOIN masyarakat on pengaduan.nik = masyarakat.nik WHERE id_pengaduan = '$id'");
    $data = mysqli_fetch_array($pengaduan);

    if (isset($_POST['submit'])) {
        $tanggal = $_POST['tgl'];
        $tanggapan = $_POST['tanggapan'];
        $id_petugas = $_POST['id_petugas'];
        $terima = $_POST['terima'];
        $status = $_POST['status'];

        $tanggapan = mysqli_query($konek, " INSERT INTO tanggapan (id_tanggapan, id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) VALUES ('', '$id', '$tanggal', '$tanggapan', '$id_petugas')");        
        $update = mysqli_query($konek, "UPDATE pengaduan SET verifikasi = '$terima', status = '$status' WHERE id_pengaduan = '$id'");        
        echo"<script>alert('verifikasi pengaduan berhasil'); document.location = '?page=daftar_pengaduan';</script>";
}elseif (isset($_POST['tolak'])) {
        $tolak = $_POST['tolak'];
        $status = $_POST['status'];
        mysqli_query($konek, "UPDATE pengaduan SET verifikasi = '$tolak', status = '$status' WHERE id_pengaduan = '$id'");     
        echo"<script>alert('verifikasi pengaduan berhasil'); document.location = '?page=daftar_pengaduan';</script>";      

    }
    
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengaduan</h1>
</div>
<!-- row content -->
<div class="row">
  <div class="col-12">
    <div class="card">
        <div class=" mb-4 py-3 border-bottom-primary ">
            <div class="chard-header d-sm-flex justify-content-between">
                <h3>Detail Pengaduan</h3>
                



  <div class="modal fade" id="verifikasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5>Berikan Tanggapan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="post">
            <div class="modal-body">
                <input type="hidden" name="tgl" value="<?php echo $tgl; ?>">
                <input type="hidden" name="id_petugas" value="<?php echo $_SESSION['petugas']['id_petugas']; ?>">
                <textarea name="tanggapan" class="form-control"></textarea>
                <input type="hidden" name="terima" value="terima">
                <input type="hidden" name="status" value="selesai">
            </div>
            <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" name="submit" class="btn btn-success">
            </div>
        </form>
      </div>
    </div>
  </div>
  <?php
    $q = $data['verifikasi'];
    if ($q != "") {
        echo "<h5 class='text-danger'>Pengaduan Sudah Ditanggapi</h5>";
    }elseif ($q == "") {
        echo '<form method="post"><div><a class="btn btn-success" href="#" data-toggle="modal" data-target="#verifikasiModal">Terima Dan Tanggapi</a><input type="submit" name="tolak" value="Tolak" class="btn btn-danger"><input type="hidden" name="tolak" value="tolak"><input type="hidden" name="status" value="selesai"></div></form>';
    }


  ?>

            </div>
        </div>
        <div class="card-body">
                <h5><b> Nama : </b><?php echo $data['nama'];?></h5>
                <h5><b> Tanggal : </b><?php echo $data['tgl_pengaduan'];?></h5>
                <h5><b> Isi Laporan : </b><br> <?php echo $data['isi_laporan'];?></h5>
                <h5><b> Lampiran :</b></h5>
                <img src="../img/<?php echo $data['foto']?>" class="col-12">
        </div>
    </div>

