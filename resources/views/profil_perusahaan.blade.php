<?php include('../includes/header.php') ?>
<?php include('../includes/navbar.php') ?>
<title>Profil Perusahaan</title>
<!-- body -->
<!-- body -->
<div class="wrapped">
    <div class="sidebar">
        <div class="profile">
            <img src="../assets/dummyprofile.png" alt="profile">
            <div class="identitas">
                <h4>PT Google Indonesia</h4>
                <p>(0291)000-1111-2222</p>
            </div>
        </div>
        <!-- Menus -->
        <div class="menus">
            <!-- Siswa Bimbingan -->
            <div class="siswa">
                <img src="../assets/siswa.png" alt="Logo Siswa">
                <a href="siswa_perusahaan.blade.php">
                    <h4>Siswa Bimbingan</h4>
                </a>
            </div>
        </div>
    </div>

    <!-- Detil Profil -->
    <div class="detail">
        <h1>Profil Perusahaan</h1>
        <!-- nama -->
        <div class="nama">
            <h4>Nama Perusahaan</h4>
            <p>PT Google Indonesia</p>
        </div>
        <!-- Alamat -->
        <div class="alamat">
            <h4>Alamat</h4>
            <p>Jakarta Selatan, Lantai 5</p>
        </div>
        <!-- Nomor Telepon -->
        <div class="telepon">
            <h4>Nomor Telepon</h4>
            <p>081234567890</p>
        </div>
        <!-- pengawas -->
        <div class="pengawas">
            <h4>Nama Pengawas</h4>
            <p>Barry White</p>
        </div>
    </div>
</div>
<?php include('../includes/footer.php') ?>