<?= $this->extend('layout/index.php') ?>

<?= $this->section('content') ?>
<section class="py-8 px-16">
  <div class=" min-h-screen box-shadow-1 rounded-2xl w-full p-8">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-2xl font-bold text-secondary">Cari Tiket</h1>
      <form action="" method="get">
      <div class="join box-shadow-3 h-fit">
          <div>
            <div>
              <input class="input join-item" placeholder="Cari..." name="keyword" autocomplete="off"/>
            </div>
          </div>
          <div class="indicator">
            <button type="submit" class="btn btn-primary join-item">Cari</button>
          </div>
        </div>
      </form>
    </div>
    <div class="w-full flex flex-wrap gap-8 justify-between"> 
      <?php foreach ($data as $row): ?>
      <div class="card card-compact w-96 bg-base-100 shadow-xl">
        <figure><img src="<?= base_url() ?>img/<?= $row['category'] ?>.png" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title"><?= $row['operator'] ?>
            <div class="badge badge-secondary"><?= $row['category'] ?></div>
          </h2>
          <p class="-mt-3 text-neutral-500"><?= $row['type'] ?></p>
          <ul>
            <li class="mb-1 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#002357}</style><path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
              <span class="ml-2"><?= $row['origin_destination'] ?></span>
            </li>
            <li class="mb-1 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#002357}</style><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/></svg>
              <span class="ml-2"><?= $row['date'] ?>  <?= $row['time'] ?></span>
            </li>
            <li class="mb-1 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#002357}</style><path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
              <span class="ml-2">Rp<?= $row['price'] ?>,-</span>
            </li>
            <li class="mb-1 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#002357}</style><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
              <span class="ml-2"><?= $row['duration_trip'] ?></span>
            </li>
          </ul>
          <div class="card-actions justify-end">
            <form action="">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <input type="hidden" name="user_id" value="<?= user_id() ?>">
              <button class="btn btn-primary">Pesan</button>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?= $this->endSection() ?>