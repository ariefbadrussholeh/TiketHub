<?= $this->extend('admin/layout/index.php') ?>

<?= $this->section('title') ?>
  Tiket
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section>
  <h1 class="text-2xl font-bold text-secondary mb-8">Kelola Tiket</h1>

  <div class="flex w-full justify-end mb-4">
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
          <th class="bg-container text-secondary text-center">Nama</th>
          <th class="bg-container text-secondary text-center">Telepon</th>
          <th class="bg-container text-secondary text-center">Nomor Identitas</th>
          <th class="bg-container text-secondary text-center">Tanggal Lahir</th>
          <th class="bg-container text-secondary text-center">ID User</th>
          <th class="bg-container text-secondary text-center">ID Jadwal</th>
          <th class="bg-container text-secondary text-center">Status Pembayaran</th>
          <th class="bg-container text-secondary text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data as $row): ?>
        <tr class="hover">
          <td class="text-center"><?= $row['booking_date'] ?></td>
          <td><?= $row['full_name'] ?></td>
          <td><?= $row['phone_number'] ?></td>
          <td><?= $row['card_identity'] ?></td>
          <td class="text-center"><?= $row['birth_date'] ?></td>
          <td class="text-center"><?= $row['user_id'] ?></td>
          <td class="text-center"><?= $row['schedule_id'] ?></td>
          <td class="text-center"><?= $row['payment_status'] ?></td>
          <td class="text-center flex justify-around">
            <form action="" id="completed" method="post" class="action-form">
              <?=csrf_field() ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <input type="hidden" name="payment_status" value="Completed">
              <input type="hidden" name="message" value="Data berhasil dikonfirmasi">
              <?php if ($row['payment_status'] != "Completed"): ?>
              <button type="button" onclick="complete()" class="btn btn-circle btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>              
              </button>
              <?php endif ?>
            </form>
            <form action="" id="canceled" method="post" class="action-form">
              <?=csrf_field() ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <input type="hidden" name="payment_status" value="Canceled">
              <input type="hidden" name="message" value="Data berhasil dibatalkan">
              <?php if ($row['payment_status'] != "Canceled"): ?>
              <button type="button" onclick="cancel()" class="btn btn-circle btn-error">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>             
              </button> 
              <?php endif ?> 
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
  function complete() {
    Swal.fire({
      text: 'Anda yakin ingin konfirmasi pemesanan?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
    }).then((result) => {
      if (result.isConfirmed) {
        // If user clicks "Yes, submit!" button
        document.getElementById('completed').submit(); // Submit the form
      }
    });
  }
  function cancel() {
    Swal.fire({
      text: 'Anda yakin ingin batalkan pemesanan?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
    }).then((result) => {
      if (result.isConfirmed) {
        // If user clicks "Yes, submit!" button
        document.getElementById('canceled').submit(); // Submit the form
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