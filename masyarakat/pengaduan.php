<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penngaduan</h1>
            <a href="?page=tambah_pengaduan" class=" btn btn-primary">+ Tambah Pengaduan</a>
</div>
<!-- row content -->
<div class="row">
  <div class="col-12">
    <span class="info">Silahkan ajukan pengaduan anda kepada kami</span>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header border-bottom-primary text-gray">
        <h5>Daftar Laporan Anda</h5>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Isi Laporan</th>
            <th>Nik</th>
            <th>Status</th>
          </tr>
          <?php
          $i = 0;
          $nik = $_SESSION['masyarakat']['nik'];
          $pengaduan = mysqli_query($konek," SELECT * FROM pengaduan  WHERE nik = '$nik' ORDER BY id_pengaduan ASC ");
          while ($data = mysqli_fetch_array($pengaduan)) {
            $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $data['tgl_pengaduan'];?></td>
            <td><?php echo $data['isi_laporan'];?></td>
            <td><?php echo $data['nik'];?></td>
            <?php
              if ($data['verifikasi']=="terima") {
                echo "<td class='text-success'>". $data['verifikasi']."</td>";
              }elseif($data['verifikasi']=="tolak"){
                echo "<td class='text-danger'>". $data['verifikasi']."</td>";
              }else{
                echo "<td class='text-primary'>". $data['status']."</td>";
              }
            ?> 
          </tr>
          <?php
           }
          ?>
        </table>
      </div>
    </div>
  </div>
</div>