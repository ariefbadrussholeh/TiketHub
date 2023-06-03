<?= $this->extend('layout/index.php') ?>

<?= $this->section('title') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero min-h-screen bg-base-200 w-full">
    <div class="hero-content flex justify-between w-full">
        <div class="w-full p-6 m-auto bg-white rounded-md shadow-md lg:max-w-xl">
            <h1 class="text-3xl font-semibold text-center text-purple-700">DETAIL TIKET PESANAN</h1>
            <form class="space-y-4 action = " pesan-tiket" method="post" id="form"">
                <div>
                    <label class=" label">
                <span class="text-base label-text">Transportation Details</span>
                </label>
                <p>ID JADWAL = <?=$data['id']?></p>
                <p>ID PENGGUNA = <?=$id_user?></p>
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text">Name</span>
            </label>
            <input type="text" placeholder="Name" class="w-full input input-bordered input-primary" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text">Telepon</span>
            </label>
            <input type="text" placeholder="Nomor Telepon" class="w-full input input-bordered input-primary" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text">NIK</span>
            </label>
            <input type="text" placeholder="Masukkan NIK" class="w-full input input-bordered input-primary" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text">Tanggal Lahir</span>
            </label>
            <input type="date" class="w-full input input-bordered input-primary" />
        </div>
        <div>
            <button onclick="home=>save($id_user,$data['id'])" class=" btn btn-block btn-primary" ">Pesan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>