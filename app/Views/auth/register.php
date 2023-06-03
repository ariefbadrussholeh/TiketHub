<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Dist CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/output.css">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>TiketHub | Daftar</title>
</head>
<body class="overflow-hidden">
  <div class="grid grid-template-areas h-screen">
    <div class="area-left p-8 gradient-1 text-white">  
      <img class="h-10" src="<?= base_url() ?>img/logo-2.png" alt="logo" id="logo">
      
      <header class="mt-8 mb-8">
        <h1 class="text-4xl font-bold text-center">Daftarkan Diri Anda</h1>
        <p class="text-center">Bergabung bersama kami</p>
      </header>

      <form action="<?= url_to('register') ?>" class="join-item mx-auto w-2/4" method="post">
        <?= csrf_field() ?>
        
        <div class="form-control w-full mb-2">
          <label class="label" for="username">
            <span class="label-text text-white">Username</span>
          </label>
          <input type="text" id="username" name="username" placeholder="Masukkan username" class=" text-black input input-bordered  w-full <?php if (session('errors.username')) : ?>input-error<?php endif ?>" required autocomplete="off" value="<?= old('username') ?>"/>
          <?php if (session('errors.username')) : ?>
          <label class="label">
            <span class="label-text-alt text-error"><?= session("errors.username") ?></span>
          </label>
          <?php endif ?>
        </div>
        <div class="form-control w-full mb-2">
          <label class="label" for="email">
            <span class="label-text text-white">Email</span>
          </label>
          <input type="email" id="email" name="email" placeholder="Masukkan email" class=" text-black input input-bordered  w-full <?php if (session('errors.email')) : ?>input-error<?php endif ?>" required autocomplete="off" value="<?= old('email') ?>"/>
          <?php if (session('errors.email')) : ?>
          <label class="label">
            <span class="label-text-alt text-error"><?= session("errors.email") ?></span>
          </label>
          <?php endif ?>
        </div>
        <div class="form-control w-full mb-2">
          <label class="label" for="password">
            <span class="label-text text-white">Kata Sandi</span>
          </label>
          <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" class=" text-black input input-bordered  w-full <?php if (session('errors.password')) : ?>input-error<?php endif ?>" required autocomplete="off" value="<?= old('password') ?>"/>
          <?php if (session('errors.password')) : ?>
          <label class="label">
            <span class="label-text-alt text-error"><?= session("errors.password") ?></span>
          </label>
          <?php endif ?>
        </div>
        <div class="form-control w-full mb-2">
          <label class="label" for="pass-confirm">
            <span class="label-text text-white">Konfirmasi Kata Sandi</span>
          </label>
          <input type="password" id="pass_confirm" name="pass_confirm" placeholder="Masukkan konfirmasi kata sandi" class=" text-black input input-bordered  w-full <?php if (session('errors.pass_confirm')) : ?>input-error<?php endif ?>" required autocomplete="off" value="<?= old('pass_confirm') ?>"/>
          <?php if (session('errors.pass_confirm')) : ?>
          <label class="label">
            <span class="label-text-alt text-error"><?= session("errors.pass_confirm") ?></span>
          </label>
          <?php endif ?>
        </div>
        <button class="btn btn-white btn-block mt-8" type="submit">Register</button>
      </form>
    </div>
    <div class="circle-1 absolute top-80px -right-60"></div>
    <div class="area-right p-8 flex justify-center items-center">
      <div class="flex flex-col space-y-4 h-fit text-center text-primary items-center">
        <h2 class="text-2xl font-bold">Sudah Punya Akun?</h2>
        <p>Silahkan login terlebih dahulu</p>
        <?php if ($config->allowRegistration) : ?>
        <a href="/login" class="btn btn-primary w-fit">Login</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>