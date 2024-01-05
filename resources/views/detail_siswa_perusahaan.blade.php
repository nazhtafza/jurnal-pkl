<?php include('../includes/header.php') ?>
<?php include('../includes/navbar.php') ?>
<title>Detail Siswa Magang</title>
<!-- body -->
<!-- Kegiatan siswa -->
<div class="atas">
    <!-- kegiatan -->
    <div class="kegiatan">
        <h2>Kegiatan Siswa</h2>
    </div>
    <a href="profil_perusahaan.blade.php">
        <button>
            <p>Profil</p>
        </button></a>
</div>
<!-- tabel -->
<table>
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Status Mitra</th>
            <th>Status Guru</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>01-01-2024</td>
            <td>Membuat Landing Page</td>
            <td>Pada hari ini saya membuat halaman</td>
            <td class="mitra">Approve</td>
            <td class="guru">Pending</td>
            <td>
                <button class="btn btn-detail" onclick="detailModals()">Detail</button>
                <button class="btn btn-approve" onclick="approveAction()">Approve</button>
                <button class="btn btn-decline" onclick="declineAction()">Decline</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>02-01-2024</td>
            <td>Contoh Judul</td>
            <td>Contoh Deskripsi</td>
            <td class="mitra">Approve</td>
            <td class="guru">Pending</td>
            <td>
                <button class="btn btn-detail" onclick="detailModals()">Detail</button>
                <button class="btn btn-approve" onclick="approveAction()">Approve</button>
                <button class="btn btn-decline" onclick="declineAction()">Decline</button>
            </td>
        </tr>
    </tbody>
</table>
<!-- Modal -->
<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <h2>Membuat Landing Page</h2>
        <p>Pada hari ini saya membuat halaman dengan menggunakan plugin yang terdapat pada wordpress dll</p>
        <img src="../assets/klub.jpg" alt="Foto Kegiatan" style="width: 250px; height: auto;">
    </div>
</div>

<script>
    // open modal
    function detailModals() {
        var modal = document.getElementById("myModal");
        modal.style.display = "flex";
    }
    // close modal
    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
    // close modal ketika klik di luar modal
    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function approveAction() {
        alert("Approve button clicked");
        // Tambahkan logika untuk approve action
    }

    function declineAction() {
        alert("Decline button clicked");
        // Tambahkan logika untuk decline action
    }
</script>
<?php include('../includes/footer.php') ?>