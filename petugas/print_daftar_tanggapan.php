<?php
include 'konek.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">



<!-- row content -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header border-bottom-primary text-gray">
         <h3>Daftar Tanggapan</h3>
      </div>
      <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Tanggapan</th>
                    <th>Petugas</th>
</tr>
    <?php
        $no = 0;
        $daftar_tanggapan = mysqli_query($konek,"SELECT * FROM tanggapan INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas ORDER BY id_tanggapan ASC");
        while ($data = mysqli_fetch_array($daftar_tanggapan)) {         
            $no++;
    ?>
                <tr>
                    <th><?php echo $no;?></th>
                    <th><?php echo $data['tgl_tanggapan'];?></th>
                    <th><?php echo $data['tanggapan'];?></th>
                    <th><?php echo $data['nama_petugas'];?></th>
                </tr>
    <?php
        }
    ?>
            </table>
      </div>
    </div>
  </div>
</div>

  <script>window.print();</script>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>