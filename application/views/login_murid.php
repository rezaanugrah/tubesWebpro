<!DOCTYPE html>
<?php if (!$this->session->statusMurid){ ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Homeschooling 101 | Login Murid</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('files/css/login.css') ?>">
    <link rel="icon" href="<?php echo base_url('files/img/fav_ic.png') ?>" type="image/png" sizes="16x16 32x32">
  </head>
  <body>
    <div class="container">
      <kiri>
        <img src="<?php echo base_url('files/img/login_murid.jpg') ?>" alt="">
      </kiri>
      <kanan>
        <h1>LOGIN MURID</h1>
        <form_login>
          <form method="post" action="<?php echo base_url('index.php/login/aksi_login') ?>">
            <input type="text" name="username_murid" placeholder="username" required><br>
            <input type="password" name="password_murid" placeholder="password" required><br>
            <input type="submit" name="login" value="login">
            <a href="<?php echo base_url('index.php/loginorangtua') ?>"><input type="button" value="login sebagai orang tua"></a>
          </form>
        </form_login>
        <footer>
          &copy; 2017 Homeschooling 101 <br>
          <a href="divatec.org">Divatec</a>
        </footer>
      </kanan>
    </div>
  </body>
</html>
<?php } else { redirect('berandamurid'); }?>
