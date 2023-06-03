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
  <title>TiketHub | Login</title>
</head>
<body>
  <div class="grid grid-template-areas h-screen">
    <div class="area-left p-8 bg-white">
      <img class="h-10" src="<?= base_url(); ?>img/logo-1.png" alt="logo" id="logo">
      
      <header class="mt-16 mb-8">
        <h1 class="text-4xl font-bold text-primary text-center">Login ke Akun Anda</h1>
        <p class="text-center">Masuk ke Aplikasi dengan Mudah dan Aman</p>
      </header>
      
      <?= view('\App\Views\layout\_message_block') ?>
      
      <form action="<?= url_to('login') ?>" class="join-item mx-auto w-2/4" method="POST">
        <?= csrf_field() ?>
        
        <div class="form-control w-full mb-4">
          <label class="label" for="login">
            <span class="label-text">Email atau Username</span>
          </label>
          <input type="text" id="login" name="login" placeholder="Masukkan email atau username" class="input input-bordered  w-full" required autocomplete="off"/>
          <!-- <label class="label">
            <span class="label-text-alt">Bottom Left label</span>
          </label> -->
        </div>
        <div class="form-control w-full mb-4">
          <label class="label" for="password">
            <span class="label-text">Password</span>
          </label>
          <input type="password" id="password" name="password" placeholder="Masukkan password" class="input input-bordered  w-full" required autocomplete="off"/>
          <!-- <label class="label">
            <span class="label-text-alt">Bottom Left label</span>
          </label> -->
        </div>
        <?php if ($config->allowRemembering): ?>
        <div class="form-control">
          <label class="label cursor-pointer block" for="remember">
            <input type="checkbox" name="remember" id="remember" class="checkbox checkbox-primary mr-2" />
            <span class="label-text">Remember me</span> 
          </label>
        </div>
        <?php endif; ?>
        <button class="btn btn-primary btn-block mt-8" type="submit">Login</button>
      </form>
    </div>
    <div class="circle-1 absolute top-80px -left-200px"></div>
    <div class="area-right p-8 gradient-1 flex justify-center items-center">
      <div class="flex flex-col space-y-4 h-fit text-center text-white items-center">
        <h2 class="text-2xl font-bold">Belum Punya Akun?</h2>
        <p>Silahkan daftarkan diri anda terlebih dahulu</p>
        <?php if ($config->allowRegistration) : ?>
        <a href="/register" class="btn btn-primary w-fit glass">Daftar</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>