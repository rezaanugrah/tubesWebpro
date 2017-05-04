<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Homeschooling 101 | Upload Tugas Murid</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('files/css/upload_tugas_murid.css') ?>">
    <link rel="icon" href="<?php echo base_url('files/img/fav_ic.png') ?>" type="image/png" sizes="16x16 32x32">
  </head>
  <body>
    <div class="container">
      <navbar>
        <ul>
          <li><a href="<?php echo base_url('index.php/berandamurid') ?>">Homeschooling 101</a></li>
          <li><a href="<?php echo base_url('index.php/tentang') ?>">Tentang</a></li>
          <li><a href="<?php echo base_url('index.php/lihattugasmurid') ?>">Lihat Tugas</a></li>
          <li><a href="<?php echo base_url('index.php/uploadtugasmurid') ?>">Upload Tugas</a></li>
          <li><a href="<?php echo base_url('index.php/lihatnilaimurid') ?>">Lihat Nilai Tugas</a></li>
          <li style="float:right"><a class="logout" href="<?php echo base_url('index.php/uploadtugasmurid/aksi_logout') ?>">Logout</a></li>
        </ul>
      </navbar>
      <upload align="center">
        <form method="post" action="<?php echo base_url('index.php/uploadtugasmurid/upload_jawaban') ?>" enctype="multipart/form-data">
          <input type="number" name="no_tugas" placeholder="*nomor tugas" required><br>
          <input type="text" name="pesan" placeholder="Isi pesan bila ada"><br>
          <input type="file" name="jawaban" required>
          <input type="submit" name="upload" value="upload tugas">
        </form>
        <footer align="center">
          &copy; 2017 Homeschooling 101 <br>
          <a href="divatec.org">Divatec</a>
        </footer>
      </upload>
    </div>
  </body>
</html>
