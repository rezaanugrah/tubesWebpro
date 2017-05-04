<!DOCTYPE html>
<?php if ($this->session->statusMurid){ ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Homeschooling 101 | Tentang</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('files/css/tentang.css') ?>">
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
          <li style="float:right"><a class="logout" href="<?php echo base_url('index.php/tentang/aksi_logout') ?>">Logout</a></li>
        </ul>
      </navbar>
      <kiri>
        <a href="login"><img src="<?php echo base_url('files/img/tentang.png') ?>" alt=""></a>
      </kiri>
      <kanan>
        <h1>HOMESCHOOLING 101</h1><br>
        <hr><br>
        <p>Homeschooling 101 adalah sebuah sistem informasi yang memudahkan layanan homeschooling. Pada sistem homeschooling
          tradisional, pengajar atau guru diharuskan untuk datang ke rumah murid yang akan diajarnya.
          Menurut kami, sistem homeschooling tradisional dapat ditingkatkan ke level yang lebih modern yaitu dengan menggunakan alat komunikasi smartphone atau komputer yang sudah umum dimiliki.
        </p><br>
        <h4>LOKASI</h4><br>
        <ul>
          <li>Jl. Telekomunikasi No. 01, Terusan Buah Batu, Sukapura, Dayeuhkolot, Bandung, Jawa Barat 40257</li>
        </ul><br>
        <h4>KONTAK</h4><br>
        <ul>
          <li><b>Telepon</b> (021) 66012341</li>
          <li><b>Ponsel</b> 08116000316 | 08131231474</li>
          <li><b>Email</b> cs@homeschooling101.com</li>
        </ul>
        <footer>
          &copy; 2017 Homeschooling 101 <br>
          <a href="divatec.org">Divatec</a>
        </footer>
      </kanan>
    </div>
  </body>
</html>
<?php } else { redirect(base_url('')); }?>
