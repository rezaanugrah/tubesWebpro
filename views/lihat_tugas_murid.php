<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Homeschooling 101 | Lihat Tugas Murid</title>
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
          <li style="float:right"><a class="logout" href="<?php echo base_url('index.php/lihattugasmurid/aksi_logout') ?>">Logout</a></li>
        </ul>
      </navbar>
      <tugas>
        <table>
          <tr>
            <th>No Tugas</th>
            <th>Tanggal Keluar Tugas</th>
            <th>Judul Tugas</th>
            <th>Deskripsi Tugas</th>
            <th>Tanggal Deadline Tugas</th>
            <th>Download</th>
          </tr>
          <?php
            foreach ($data as $key) {
              echo "
              <tr>
                <td align='center'>".$key->no_tugas."</td>
                <td align='center'>".$key->tgl_keluar_tugas."</td>
                <td align='center'>".$key->judul_tugas."</td>
                <td align='center'>".$key->deskripsi_tugas."</td>
                <td align='center'>".$key->tgl_deadline_tugas."</td>
                <td align='center'><a href='".$key->url_link_tugas."'>Download</a></td>
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
