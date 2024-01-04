<?php include('../includes/header.php') ?>
<?php include('../includes/navbar.php') ?>
<title>Profil Guru</title>
<!-- body -->
<div class="wrapped">
    <div class="sidebar">
        <div class="profile">
            <img src="../assets/dummyprofile.png" alt="profile">
            <div class="identitas">
                <h4>JOHN TRAVOLTA</h4>
                <p>5100-20040926-110</p>
                <p>11 RPL 2</p>
            </div>
        </div>
        <!-- Menus -->
        <div class="menus">
            <!-- Siswa Bimbingan -->
            <div class="siswa">
                <img src="../assets/siswa.png" alt="Logo Siswa">
                <a href="siswa.blade.php">
                    <h4>Siswa Bimbingan</h4>
                </a>
            </div>
            <!-- Laporan Akhir -->
            <div class="laporan">
                <img src="../assets/laporan.png" alt="logo laporan">
                <a href="#">
                    <h4>Laporan Akhir</h4>
                </a>
            </div>
        </div>
    </div>

    <!-- Detil Profil -->
    <div class="detail">
        <h1>Profil Guru Pembimbing</h1>
        <!-- nama -->
        <div class="nama">
            <h4>Nama</h4>
            <p>John Travolta</p>
        </div>
        <!-- nip -->
        <div class="nip">
            <h4>NIP</h4>
            <p>5100-20040926-110</p>
        </div>
        <!-- Alamat -->
        <div class="alamat">
            <h4>Alamat</h4>
            <p>Jl. Raya Kudus</p>
        </div>
        <!-- Nomor Telepon -->
        <div class="telepon">
            <h4>Nomor Telepon</h4>
            <p>081234567890</p>
        </div>
    </div>
</div>
<?php include('../includes/footer.php') ?>