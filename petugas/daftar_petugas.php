
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">petugas</h1>
</div>
<!-- row content -->
<div class="row">
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
            <th>Username</th>
            <th>Telp</th>
            <th>Aksi</th>
          </tr>
          <?php
          $i = 0;
          $pengaduan = mysqli_query($konek," SELECT * FROM petugas WHERE level = 'petugas' ORDER BY id_petugas ASC ");
          while ($data = mysqli_fetch_array($pengaduan)) {
            $i++;
          ?>
          <tr>
            <td><?php echo $i?></td>
            <td><?php echo $data['nama_petugas'];?></td>
            <td><?php echo $data['username'];?></td>
            <td><?php echo $data['telp'];?></td>
            <td><a href="?page=delete_petugas&&id=<?php echo $data['id_petugas']?>" class="btn btn-danger">Delete</a></td>
          </tr>
          <?php
           }
          ?>
        </table>
      </div>
    </div>
  </div>
</div>