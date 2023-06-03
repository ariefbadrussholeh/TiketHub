<?= $this->extend('admin/layout/index.php') ?>

<?= $this->section('title') ?>
  Edit Jadwal
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
  <h1 class="text-2xl font-bold text-secondary mb-8">Edit Jadwal</h1>
  <div class="box-shadow-1 p-8">
  <?php $validation = session('validation') ?>
    <form action="/admin/jadwal/update/<?= $data['id'] ?>" method="post" id="form">
      <?= csrf_field() ?>
      <div class="form-control w-full mb-4">
        <label class="label" for="route_id">
          <span class="label-text text-black">Rute</span>
        </label>
        <select class="select select-bordered font-normal <?= (isset($validation['route_id'])) ? "select-error" : ""?>" name="route_id" id="route_id">
          <option disabled selected>Pilih rute</option>
          <?php foreach ($routes as $route): ?>
          <option <?= $data['route_id'] === $route['id'] ? 'selected' : ''; ?> value="<?= $route['id'] ?>"><?= $route['origin_destination'] ?></option>
          <?php endforeach; ?>
        </select>        
        <?php if (isset($validation['route_id'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['route_id'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="transportation_id">
          <span class="label-text text-black">Transportasi</span>
        </label>
        <select class="select select-bordered font-normal <?= (isset($validation['transportation_id'])) ? "select-error" : ""?>" name="transportation_id" id="transportation_id">
          <option disabled selected>Pilih transportasi</option>
          <?php foreach ($transportations as $transportation): ?>
          <option <?= $data['transportation_id'] === $transportation['id'] ? 'selected' : ''; ?> value="<?= $transportation['id'] ?>"><?= $transportation['operator'] ?></option>
          <?php endforeach; ?>
        </select>        
        <?php if (isset($validation['transportation_id'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['transportation_id'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="time">
          <span class="label-text text-black">Waktu</span>
        </label>
        <input name="time" id="time" type="time" placeholder="Masukkan waktu" value="<?= $data['time'] ?>" class="input input-bordered w-full <?= (isset($validation['time'])) ? "input-error" : ""?>"  autocomplete="off"/>
        <?php if (isset($validation['time'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['time'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="date">
          <span class="label-text text-black">Tanggal</span>
        </label>
        <input name="date" id="date" type="date" placeholder="Masukkan tanggal" value="<?= $data['date'] ?>" class="input input-bordered w-full <?= (isset($validation['date'])) ? "input-error" : ""?>"  autocomplete="off"/>
        <?php if (isset($validation['date'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['date'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="price">
          <span class="label-text text-black">Harga</span>
        </label>
        <input name="price" id="price" type="number" placeholder="Masukkan harga" value="<?= $data['price'] ?>" class="input input-bordered w-full <?= (isset($validation['price'])) ? "input-error" : ""?>"  autocomplete="off"/>
        <?php if (isset($validation['price'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['price'] ?></span>
        </label>
        <?php endif ?>
      </div>
      <div class="form-control w-full mb-4">
        <label class="label" for="duration_trip">
          <span class="label-text text-black">Durasi perjalanan</span>
        </label>
        <input name="duration_trip" id="duration_trip" type="text" placeholder="Masukkan durasi perjalanan" value="<?= $data['duration_trip'] ?>" class="input input-bordered w-full <?= (isset($validation['duration_trip'])) ? "input-error" : ""?>"  autocomplete="off"/>
        <?php if (isset($validation['duration_trip'])): ?>
        <label class="label">
          <span class="label-text-alt text-error"><?= $validation['duration_trip'] ?></span>
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