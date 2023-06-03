<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Dist CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/output.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal@4/minimal.css" rel="stylesheet">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Sweet Alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>TiketHub | <?= $this->renderSection('title') ?></title>
</head>
<body>
<?= view('\App\Views\layout\_message_block') ?>

  <div class="navbar bg-primary text-white">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="/">Home</a></li>
          <li><a href="/cari-tiket">Cari Tiket</a></li>
          <li><a href="/cek-tiket">Cek Tiket</a></li>
        </ul>
      </div>
      <img class="h-10 ml-6" src="<?= base_url() ?>img/logo-2.png" alt="" class="logo">
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a href="/">Home</a></li>
        <li><a href="/cari-tiket">Cari Tiket</a></li>
        <li><a href="/cek-tiket">Cek Tiket</a></li>
      </ul>
    </div>
    <div class="navbar-end">
    <?php if (logged_in()) : ?>
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar online">
          <div class="w-10 rounded-full">
            <img src="<?= base_url(); ?>img/photo-1534528741775-53994a69daeb.jpg" />
          </div>
        </label>
        <ul tabindex="0" class="mt-3 p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52 text-black">
          <li><a href="<?= base_url('logout') ?>">Logout</a></li>
        </ul>
      </div>
    <?php else : ?>
      <ul class="menu menu-horizontal px-1">
        <li><a href="<?= base_url('login') ?>">Login</a></li>
      </ul>
    <?php endif; ?>
    </div>
  </div>
  
  <?= $this->renderSection('content') ?>
  <footer class="footer footer-center p-4 bg-primary text-white">
  <div>
    <p>Copyright © 2023 - All right reserved by TiketHub.</p>
  </div>
</footer>
</body>
</html>