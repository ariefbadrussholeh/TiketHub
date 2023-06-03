<?= $this->extend('layout/index.php') ?>

<?= $this->section('title') ?>
Pesan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="py-8 px-16">
    <div class=" min-h-screen box-shadow-1 rounded-2xl w-3/5 p-8 mx-auto">
        <div class="mb-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-secondary">Detail Tiket</h1>
            <?php if ($data['payment_status'] == 'Completed'): ?>
            <a href="/cek-tiket/<?= $data['id'] ?>/cetak" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                Print
            </a>
            <?php endif ?>
        </div>    
        <div class="mb-4">
            <div class="flex gap-4 items-center mb-2">
                <p class="text-secondary">Status Pemesanan: </p>  
                <?php if ($data['payment_status'] == 'Completed'): ?>
                <div class="badge badge-success"><?= $data['payment_status'] ?></div>
                <p class="italic text-gray-500 text-sm"> silahkan cetak tiket anda</p>
                <?php elseif ($data['payment_status'] == 'Canceled'): ?>
                <div class="badge badge-error"><?= $data['payment_status'] ?></div>
                <p class="italic text-gray-500 text-sm"> pembayaran tidak terkonfirmasi, pemesanan dibatalkan</p>
                <?php else: ?>
                <div class="badge badge-warning"><?= $data['payment_status'] ?></div>
                <p class="italic text-gray-500 text-sm"> harap segera lakukan pembayaran anda</p>
                <?php endif; ?>
            </div>
            <p class="mb-2 text-secondary">Detail Pemesan:</p>
            <div class="rounded-md border-2 border-secondary px-4 py-4 mb-4">
                <p class="font-bold">Nama Pemesan</p>
                <p class="mb-2"><?= $data['full_name'] ?></p>
                <p class="font-bold">Nomor Kartu Identitas</p>
                <p class="mb-2"><?= $data['card_identity'] ?></p>
                <p class="font-bold">Nomor Telepon</p>
                <p class="mb-2"><?= $data['phone_number'] ?></p>
                <p class="font-bold">Tanggal Lahir</p>
                <p><?= $data['birth_date'] ?></p>
            </div>
            <p class="mb-2 text-secondary">Detail Pemesanan:</p>
            <div class="rounded-md border-2 border-secondary px-4 py-4">
                <p class="font-bold">Tanggal Pemesanan</p>
                <p class="mb-2"><?= $data['booking_date'] ?></p>
                <p class="font-bold">Operator</p>
                <p class="mb-2"><?= $data['operator'] ?></p>
                <p class="font-bold">Tipe</p>
                <p class="mb-2"><?= $data['type'] ?></p>
                <p class="font-bold">Rute</p>
                <p class="mb-2"><?= $data['origin_destination'] ?></p>
                <p class="font-bold">Tanggal dan Waktu</p>
                <p class="mb-2"><?= $data['date'] ?> <?= $data['time'] ?></p>
                <p class="font-bold">Harga</p>
                <p>Rp<?= $data['price'] ?>,'</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>