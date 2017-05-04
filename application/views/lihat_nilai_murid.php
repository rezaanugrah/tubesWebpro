<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Homeschooling 101 | Lihat Nilai Murid</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('files/css/lihat_tugas_murid.css') ?>">
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
          <li style="float:right"><a class="logout" href="<?php echo base_url('index.php/lihatnilaimurid/aksi_logout') ?>">Logout</a></li>
        </ul>
      </navbar>
      <tugas>
        <table border="2">
          <tr>
            <th>Judul Tugas</th>
            <th>Nilai Tugas</th>
          </tr>
          <?php
            foreach ($data as $no) {
              echo "
              <tr>
                <td align='center'>".$no[0]->judul_tugas."</td>
                <td align='center'>".$no[0]->nilai_tugas."</td>
              </tr>
              ";
            }
          ?>
        </table>
        <footer>
          &copy; 2017 Homeschooling 101 <br>
          <a href="divatec.org">Divatec</a>
        </footer>
      </tugas>
    </div>
  </body>
</html>
