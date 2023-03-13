
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat Datang</h1>
</div>
<!-- row content -->
<div class="row">
  <div class="col-12">
    <h4><?php echo $_SESSION['masyarakat']['nama']; ?></h4>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header border-bottom-primary text-gray">
        <h5>Hasil Laporan Anda</h5>
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
            <td><?php echo $i;?></td>
            <td><?php echo $data['tgl_pengaduan'];?></td>
            <td><?php echo $data['isi_laporan'];?></td>
            <td><?php echo $data['nik'];?></td>
            <?php
              if ($data['status']=="selesai") {
                echo "<td class='text-success'>". $data['status']."</td>";
              }elseif($data['status']=="proses"){
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
