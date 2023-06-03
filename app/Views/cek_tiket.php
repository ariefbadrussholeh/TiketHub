<?= $this->extend('layout/index.php') ?>

<?= $this->section('title') ?>
  Cek Tiket
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="py-8 px-16">
    <div class=" min-h-screen box-shadow-1 rounded-2xl p-8">
        <h1 class="text-2xl font-bold text-secondary mb-8">Riwayat Tiket</h1>
        <?php foreach ($data as $row): ?>
        <div class="rounded-xl shadow-xl flex justify-between items-center p-4 bg-container mb-4">
            <div class="w-2/4">
                <h2 class="card-title"><?= $row['operator'] ?>
                    <?php if ($row['payment_status'] == 'Completed'): ?>
                        <div class="badge badge-success"><?= $row['payment_status'] ?></div>
                    <?php elseif ($row['payment_status'] == 'Canceled'): ?>
                        <div class="badge badge-error"><?= $row['payment_status'] ?></div>
                    <?php else: ?>
                        <div class="badge badge-warning"><?= $row['payment_status'] ?></div>
                    <?php endif; ?>
                </h2>
                <p class="text-neutral-500"><?= $row['booking_date'] ?></p>
                <p><?= $row['full_name'] ?></p>
            </div>
            <a href="/cek-tiket/<?= $row['id'] ?>/detail" class="btn btn-primary w-fit">Detail</a>
        </div>
        <?php endforeach ?>
    </div>

</section>

<?= $this->endSection() ?>