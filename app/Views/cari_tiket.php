<?= $this->extend('layout/index.php') ?>

<?= $this->section('content') ?>
<section class="flex flex-jc-center flex-ai-center">
  <div class="flex flex-ai-center flex-jc-sb" style="width: 70%;">
    <div class="container">
      <h1>Satu Aplikasi,</h1>
      <h1>Semua Tiket,</h1>
      <p>Perjalanan anda mudah dan cepat</p>
      <a href="" class="link-button">Cari Tiket ></a>
    </div>
    <img src="<?= base_url() ?>img/plane ticket.svg" alt="">
  </div>
</section>
<?= $this->endSection() ?>