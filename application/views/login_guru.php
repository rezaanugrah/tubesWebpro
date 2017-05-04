<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Homeschooling 101 | Login Guru</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('files/css/login_guru.css') ?>">
    <link rel="icon" href="<?php echo base_url('files/img/fav_ic.png') ?>" type="image/png" sizes="16x16 32x32">
  </head>
  <body>
    <div class="container">
      <h1>LOGIN GURU</h1>
      <form_login>
        <form method="post" action="<?php echo base_url('index.php/loginguru/aksi_login') ?>">
          <input type="text" name="username_guru" placeholder="username" required><br>
          <input type="password" name="password_guru" placeholder="password" required><br>
          <input type="submit" name="login" value="login">
          <input type="reset" name="reset" value="reset">
        </form>
      </form_login>
      <footer>
        &copy; 2017 Homeschooling 101 <br>
        <a href="divatec.org">Divatec</a>
      </footer>
    </div>
  </body>
</html>
