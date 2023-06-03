<?= $this->extend('layout/index.php') ?>

<?= $this->section('title') ?>
  Beranda
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero min-h-screen bg-base-200 w-full">
  <div class="hero-content flex justify-between w-full">
    <div>
      <h1 class="text-5xl font-bold mb-4">Satu Aplikasi,</h1>
      <h1 class="text-5xl font-bold">Semua Tiket,</h1>
      <p class="py-6">Perjalanan anda mudah dan cepat</p>
      <a href="cari-tiket" class="btn btn-primary">Cari Tiket</a>
    </div>
    <img src="<?= base_url() ?>img/plane ticket.svg" class="max-w-sm" />
  </div>
</div>
<?= $this->endSection() ?>