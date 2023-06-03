<?= $this->extend('admin/layout/index.php') ?>

<?= $this->section('title') ?>
  Edit Rute
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
  <h1 class="text-2xl font-bold text-secondary mb-8">Edit Rute</h1>
  <div class="box-shadow-1 p-8">
  <?php $validation = session('validation') ?>
    <form action="/admin/rute/update/<?= $data['id'] ?>" method="post" id="form">
      <?= csrf_field() ?>
      <div class="form-control w-full mb-4">
        <label class="label" for="origin">
          <span class="label-text text-black">Asal</span>
        </label>
        <input name="origin" id="origin" type="text" placeholder="Masukkan asal" value="<?= $data['origin'] ?>" class="input input-bordered w-full <?= (isset($validation['origin'])) ? "input-error" : ""?>" autocomplete="off" />
        <?php if (isset($validation['origin'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['origin'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="destination">
          <span class="label-text text-black">Tujuan</span>
        </label>
        <input name="destination" id="destination" type="text" placeholder="Masukkan tujuan" value="<?= $data['destination'] ?>" class="input input-bordered w-full <?= (isset($validation['destination'])) ? "input-error" : ""?>"  autocomplete="off"/>
        <?php if (isset($validation['destination'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['destination'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="distance">
          <span class="label-text text-black">Jarak</span>
        </label>
        <input name="distance" id="distance" type="number" placeholder="Masukkan jarak" value="<?= $data['distance'] ?>" class="input input-bordered w-full <?= (isset($validation['distance'])) ? "input-error" : ""?>"  autocomplete="off"/>
        <?php if (isset($validation['distance'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['distance'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <input type="hidden" name="message" value="Data berhasil diedit">
      <input type="hidden" name="id" value="<?= $data['id'] ?>">
    </form>
    <div class="flex justify-end mt-8">
      <button onclick="confirmSubmit()" class="btn btn-primary text-white">Simpan</button>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
  function confirmSubmit() {
    Swal.fire({
      text: 'Anda yakin ingin mengedit data?',
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