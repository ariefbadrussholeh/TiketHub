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
  <title>Admin | <?= $this->renderSection('title') ?></title>
</head>
<body>
  <?= view('\App\Views\layout\_message_block') ?>
  
  <div class="grid admin-template-areas h-screen">
    <!-- Navbar -->
    <div class="area-navbar navbar bg-primary text-white box-shadow-2">
      <div class="flex-1">
        <img class="h-10 ml-6" src="<?= base_url() ?>img/logo-2.png" alt="" class="logo">
      </div>
      <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
          <li>
          <details>
            <summary>
              Hi! <?= user()->username ?>
            </summary>
            <ul class="p-2 bg-base-100 text-black">
              <li><a href="<?= base_url('logout') ?>">Logout</a></li>
            </ul>
          </li>
          </details>
        </ul>
      </div>
    </div>
    <!-- Sidebar -->
    <aside class="area-sidebar bg-primary text-white p-4">
      <a class="flex hover:bg-secondary p-4 rounded-xl mb-4 items-center" href="<?= base_url('admin/') ?>">
        <img class="w-6 mr-2" src="<?= base_url() ?>img/dashboard.svg" alt="">
        Dashboard
      </a>
      <a class="flex hover:bg-secondary p-4 rounded-xl mb-4 items-center" href="<?= base_url('admin/transportasi') ?>">
        <img class="w-6 mr-2" src="<?= base_url() ?>img/transport.svg" alt="">
        Kelola Transportasi
      </a>
      <a class="flex hover:bg-secondary p-4 rounded-xl mb-4 items-center" href="<?= base_url('admin/rute') ?>">
        <img class="w-6 mr-2" src="<?= base_url() ?>img/route.svg" alt="">
        Kelola Rute
      </a>
      <a class="flex hover:bg-secondary p-4 rounded-xl mb-4 items-center" href="<?= base_url('admin/jadwal') ?>">
        <img class="w-6 mr-2" src="<?= base_url() ?>img/schedule.svg" alt="">
        Kelola Jadwal
      </a>
      <a class="flex hover:bg-secondary p-4 rounded-xl mb-4 items-center" href="<?= base_url('admin/tiket') ?>">
        <img class="w-6 mr-2" src="<?= base_url() ?>img/ticket.svg" alt="">
        Kelola Tiket
      </a>
    </aside>
    
    <main class="area-main p-8">
      <?= $this->renderSection('content') ?>
    </main>
  </div>
</body>
</html>