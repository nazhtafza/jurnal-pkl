<?php include('../includes/header.php') ?>
<?php include('../includes/navbar.php') ?>
<title>Laporan Akhir Siswa</title>
<!-- Body -->
<!-- Kegiatan siswa -->
<div class="atas">
    <!-- kegiatan -->
    <div class="kegiatan">
        <h2>Kegiatan Siswa</h2>
        <div class="pilihan">
            <a href="siswa.blade.php">
                <h4 class="jurnal1">Jurnal Harian Siswa</h4>
            </a>
            <a href="#">
                <h4 class="laporan1">Laporan Akhir</h4>
            </a>
        </div>
    </div>
    <a href="profil_guru.blade.php">
        <button>
            <p>Profil</p>
        </button>
    </a>
</div>
<!-- sorry -->
<div class="sorry">
    <img src="../assets/sorry.png" alt="sorry">
    <h1>Laporan Akhir Siswa Belum Tersedia</h1>
    <p>Masa PKL belum berakhir, males banget jir garap iki</p>
</div>
<?php include('../includes/footer.php') ?>