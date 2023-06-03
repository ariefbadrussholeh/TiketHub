<?= $this->extend('layout/index.php') ?>

<?= $this->section('title') ?>
Pesan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="py-8 px-16">
    <div class=" min-h-screen box-shadow-1 rounded-2xl w-2/4 p-8 mx-auto">
        <div>
            <h1 class="text-2xl font-bold text-secondary">
                <?= $data['operator'] ?>
                <div class="badge badge-secondary"><?= $data['category'] ?></div>
            </h1>
            <p class= "text-neutral-500 mb-4"><?= $data['type'] ?></p>
            <ul class="mb-8">
                <li class="mb-2 flex items-center">
                    <span><?= $data['origin_destination'] ?></span>
                </li>
                <li class="mb-2 flex items-center">
                    <span><?= $data['date'] ?> <?= $data['time'] ?></span>
                </li>
                <li class="mb-2 flex items-center">
                    <span>Rp<?= $data['price'] ?>,-</span>
                </li>
                <li class="mb-2 flex items-center">
                    <span><?= $data['duration_trip'] ?></span>
                </li>
            </ul>
            <?php $validation = session('validation') ?>
            <form action="" method="post" id="form">
                <?= csrf_field() ?>
                <div class="form-control w-full mb-4">
                    <label class="label" for="route_id">
                        <span class="label-text text-black">Nama lengkap</span>
                    </label>
                    <input name="full_name" id="full_name" type="text" placeholder="Masukkan nama lengkap" value="<?= old('full_name') ?>" class="input input-bordered w-full <?= (isset($validation['full_name'])) ? "input-error" : ""?>"  autocomplete="off"/>
                    <?php if (isset($validation['full_name'])): ?>
                    <label class="label">
                        <span class="label-text-alt text-error"><?= $validation['full_name'] ?></span>
                    </label>
                    <?php endif ?>
                </div>
                <div class="form-control w-full mb-4">
                    <label class="label" for="route_id">
                        <span class="label-text text-black">Nomor Kartu Identitas</span>
                    </label>
                    <input name="card_identity" id="card_identity" type="number" placeholder="Masukkan nomor kartu identitas" value="<?= old('card_identity') ?>" class="input input-bordered w-full <?= (isset($validation['card_identity'])) ? "input-error" : ""?>"  autocomplete="off"/>
                    <?php if (isset($validation['card_identity'])): ?>
                    <label class="label">
                        <span class="label-text-alt text-error"><?= $validation['card_identity'] ?></span>
                    </label>
                    <?php endif ?>
                </div>
                <div class="form-control w-full mb-4">
                    <label class="label" for="route_id">
                        <span class="label-text text-black">Nomor telepon</span>
                    </label>
                    <input name="phone_number" id="phone_number" type="number" placeholder="Masukkan nomor telepon" value="<?= old('phone_number') ?>" class="input input-bordered w-full <?= (isset($validation['phone_number'])) ? "input-error" : ""?>"  autocomplete="off"/>
                    <?php if (isset($validation['phone_number'])): ?>
                    <label class="label">
                        <span class="label-text-alt text-error"><?= $validation['phone_number'] ?></span>
                    </label>
                    <?php endif ?>
                </div>
                <div class="form-control w-full mb-4">
                    <label class="label" for="route_id">
                        <span class="label-text text-black">Tanggal lahir</span>
                    </label>
                    <input name="birth_date" id="birth_date" type="date" placeholder="Masukkan tanggal lahir" value="<?= old('birth_date') ?>" class="input input-bordered w-full <?= (isset($validation['birth_date'])) ? "input-error" : ""?>"  autocomplete="off"/>
                    <?php if (isset($validation['birth_date'])): ?>
                    <label class="label">
                        <span class="label-text-alt text-error"><?= $validation['birth_date'] ?></span>
                    </label>
                    <?php endif ?>
                    <input type="hidden" value="<?= $data['id'] ?>" name="schedule_id">
                </div>
            </form>
            <div class="flex justify-end mt-8 text-white">
                <button onclick="confirmSubmit()" class="btn btn-primary">Pesan</button>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
  function confirmSubmit() {
    Swal.fire({
      text: 'Anda yakin ingin memesan?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
    }).then((result) => {
      if (result.isConfirmed) {
        // If user clicks "Yes, submit!" button
        document.getElementById('form').submit(); // Submit the form
      }
    });
  }
</script>
<?= $this->endSection() ?>