<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiket</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Poppins', sans-serif;
      padding: 32px
    }
    header, footer {
      background-color: rgb(196, 219, 244);
      padding: 24px;
      color: rgb(0, 35, 87);
      border-top: 2px solid black;
      border-bottom: 2px solid black;
    }

    footer {
      text-align: end;
    }
    main {
      padding: 24px
    }
    .bold {
      font-weight: bold;
    }
    h3 {
      margin-bottom: 8px;
      color: rgb(0, 35, 87);
    }
    .container {
      padding: 24px;
      border-radius: 8px;
      border: 1px dashed black;
    }
    .mb-32px {
      margin-bottom: 32px;
    }
    .mb-16px {
      margin-bottom: 16px;
    }
  </style>
</head>
<body>
<body class="bg-neutral-200 p-4">
  <header>
    <h1>INVOICE</h1>
    <h2>TiketHub</h2>
  </header>
  <main>
    <h3>Detail Pemesan</h3>
    <div class="container mb-32px">
      <p><span class="bold">Nama:</span> <?= $data['full_name'] ?></p>
      <p><span class="bold">Nomor Kartu Identitas:</span> <?= $data['card_identity'] ?></p>
      <p><span class="bold">Nomor Telepon:</span> <?= $data['phone_number'] ?></p>
      <p><span class="bold">Tanggal Lahir:</span> <?= $data['birth_date'] ?></p>
    </div>
    <h3>Detail Pemesanan</h3>
    <div class="container">
      <p class="bold">Tanggal Pemesanan</p>
      <p class="mb-16px"><?= $data['booking_date'] ?></p>
      <p class="bold">Operator</p>
      <p class="mb-16px"><?= $data['operator'] ?></p>
      <p class="bold">Tipe</p>
      <p class="mb-16px"><?= $data['type'] ?></p>
      <p class="bold">Rute</p>
      <p class="mb-16px"><?= $data['origin_destination'] ?></p>
      <p class="bold">Tanggal dan Waktu</p>
      <p class="mb-16px"><?= $data['date'] ?> <?= $data['time'] ?></p>
      <p class="bold">Harga</p>
      <p>Rp<?= $data['price'] ?>,'</p>
    </div>
  </main>
  <footer>
    <h4>TiketHub</h4>
    <p>Bungurasih Sidoarjo</p>
    <p>Phone : 012-345678-9</p>
    <p>Fax : 012-987654-3</p>
  </footer>
</body>