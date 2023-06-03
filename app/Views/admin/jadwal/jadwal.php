<?= $this->extend('admin/layout/index.php') ?>

<?= $this->section('title') ?>
  Jadwal
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
  <h1 class="text-2xl font-bold text-secondary mb-8">Kelola Jadwal</h1>

  <div class="flex w-full justify-between mb-4">
    <a class="btn" href="jadwal/tambah">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
      Tambah
    </a>  

    <div class="form-control">
      <form action="" method="get" id="search-form">
        <input name="keyword" type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" id="search-input" autocomplete="off" />
      </form>
    </div>
  </div>
  <div class="overflow-x-auto">
    <table class="table table-zebra">
      <thead>
        <tr>
          <th class="bg-container text-secondary text-center">Timestamp</th>
          <th class="bg-container text-secondary text-center">Operator</th>
          <th class="bg-container text-secondary text-center">Rute</th>
          <th class="bg-container text-secondary text-center">Waktu</th>
          <th class="bg-container text-secondary text-center">Tanggal</th>
          <th class="bg-container text-secondary text-center">Harga</th>
          <th class="bg-container text-secondary text-center">Durasi</th>
          <th class="bg-container text-secondary text-center">Penumpang</th>
          <th class="bg-container text-secondary text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data as $row): ?>
        <tr class="hover">
          <td class="text-center"><?= $row['updated_at'] ?></td>
          <td><?= $row['operator'] ?></td>
          <td><?= $row['origin_destination'] ?></td>
          <td class="text-center"><?= $row['date'] ?></td>
          <td class="text-center"><?= $row['time'] ?></td>
          <td class="text-center"><?= $row['price'] ?></td>
          <td class="text-center"><?= $row['duration_trip'] ?></td>
          <td class="text-center"><?= $row['passenger'] ?></td>
          <td class="text-center flex justify-around">
            <a href="jadwal/edit/<?= $row['id'] ?>" class="link link-primary">Edit</a>
            <form action="/admin/jadwal/<?= $row['id'] ?>" id="form" method="post" class="action-form">
              <?=csrf_field() ?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="button" onclick="confirmSubmit()" class="link link-error">Delete</button>  
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
  function confirmSubmit() {
    Swal.fire({
      text: 'Anda yakin ingin menghapus data?',
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
<?php if (session()->getFlashdata('success')) : ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    Swal.fire({
      text: '<?= session()->getFlashdata('success') ?>',
      icon: 'success',
    })
</script>
<?php endif ?>
<script>
  const searchInput = document.getElementById('search-input');
  const form = document.getElementById('search-form');

  searchInput.addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
      event.preventDefault(); // Prevent the default form submission
      form.submit(); // Submit the form programmatically
    }
  });
</script>
<?= $this->endSection() ?>