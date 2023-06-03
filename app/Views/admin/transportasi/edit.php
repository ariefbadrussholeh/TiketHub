<?= $this->extend('admin/layout/index.php') ?>

<?= $this->section('title') ?>
  Edit Transportasi
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
  <h1 class="text-2xl font-bold text-secondary mb-8">Edit Transportasi</h1>
  <div class="box-shadow-1 p-8">
  <?php $validation = session('validation') ?>
    <form action="/admin/transportasi/update/<?= $data['id'] ?>" method="post" id="form">
      <?= csrf_field() ?>
      <div class="form-control w-full mb-4">
        <label class="label" for="category">
          <span class="label-text text-black">Kategori</span>
        </label>
        <select class="select select-bordered font-normal <?= (isset($validation['category'])) ? "select-error" : ""?>" name="category" id="category">
          <option disabled selected>Pilih kategori</option>
          <option <?= $data['category'] === 'Bus' ? 'selected' : ''; ?> value="Bus">Bus</option>
          <option <?= $data['category'] === 'Travel' ? 'selected' : ''; ?> value="Travel">Travel</option>
          <option <?= $data['category'] === 'Kereta' ? 'selected' : ''; ?> value="Kereta">Kereta</option>
          <option <?= $data['category'] === 'Pesawat' ? 'selected' : ''; ?> value="Pesawat">Pesawat</option>
          <option <?= $data['category'] === 'Kapal' ? 'selected' : ''; ?> value="Kapal">Kapal</option>
        </select>
        <?php if (isset($validation['category'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['category'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="operator">
          <span class="label-text text-black">Operator</span>
        </label>
        <input name="operator" id="operator" type="text" placeholder="Masukkan operator" value="<?= $data['operator'] ?>" class="input input-bordered w-full <?= (isset($validation['operator'])) ? "input-error" : ""?>" autocomplete="off" />
        <?php if (isset($validation['operator'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['operator'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="type">
          <span class="label-text text-black">Tipe</span>
        </label>
        <input name="type" id="type" type="text" placeholder="Masukkan tipe" value="<?= $data['type'] ?>" class="input input-bordered w-full <?= (isset($validation['type'])) ? "input-error" : ""?>"  autocomplete="off"/>
        <?php if (isset($validation['type'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['type'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="capacity">
          <span class="label-text text-black">Kapasitas</span>
        </label>
        <input name="capacity" id="capacity" type="number" placeholder="Masukkan kapasitas" value="<?= $data['capacity'] ?>" class="input input-bordered w-full <?= (isset($validation['capacity'])) ? "input-error" : ""?>"  autocomplete="off"/>
        <?php if (isset($validation['capacity'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['capacity'] ?></span>
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