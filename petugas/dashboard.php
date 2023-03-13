
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat Datang</h1>
</div>
<!-- row content -->
<div class="row">
  <div class="col-12">
  <?php
  if (isset($_SESSION['admin'])) {
    echo "<h4>".$_SESSION['admin']['nama_petugas']."</h4>";
  }elseif (isset($_SESSION['petugas'])) {
    echo "<h4>".$_SESSION['petugas']['nama_petugas']."</h4>";
  }
  ?>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header border-bottom-primary text-gray">
        <h5>Daftar Pengaduan Masyarakat</h5>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Isi Laporan</th>
            <th>Nik</th>
            <th>Tanggal</th>
          </tr>
          <?php
          $i = 0;
          $pengaduan = mysqli_query($konek," SELECT * FROM pengaduan INNER JOIN masyarakat on pengaduan.nik = masyarakat.nik ORDER BY id_pengaduan ASC ");
          while ($data = mysqli_fetch_array($pengaduan)) {
            $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['isi_laporan'];?></td>
            <td><?php echo $data['nik'];?></td>
            <td><?php echo $data['tgl_pengaduan'];?></td>
          </tr>
          <?php
           }
          ?>
        </table>
      </div>
    </div>
  </div>
</div>