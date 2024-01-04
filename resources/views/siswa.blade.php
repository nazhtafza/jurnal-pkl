<?php include('../includes/header.php') ?>
<?php include('../includes/navbar.php') ?>
<title>Siswa Bimbingan</title>
<!-- body -->
<!-- Kegiatan siswa -->
<div class="atas">
    <!-- kegiatan -->
    <div class="kegiatan">
        <h2>Kegiatan Siswa</h2>
        <div class="pilihan">
            <a href="#">
                <h4 class="jurnal">Jurnal Harian Siswa</h4>
            </a>
            <a href="laporan_siswa.blade.php">
                <h4 class="laporan">Laporan Akhir</h4>
            </a>
        </div>
    </div>
    <a href="profil_guru.blade.php">
        <button>
            <p>Profil</p>
        </button></a>
</div>
<h1>Daftar Siswa Bimbingan</h1>

<!-- card -->
<div id="cardContainer"></div>
<script>
    // Data yang akan digunakan untuk membuat card (contoh)
    const cardData = [{
            title: 'NAZHAT AFZA ZAIN',
            nip: '00745',
            kelas: '11 RPL 1',
            link: 'detail_siswa.blade.php'
        },
        {
            title: 'SAM COOKE',
            nip: '00747',
            kelas: '11 RPL 1',
            link: 'detail_siswa.blade.php'
        },
        {

            title: 'ELLEANOR FITZGERALD',
            nip: '00748',
            kelas: '11 RPL 1',
            link: 'detail_siswa.blade.php'
        },
    ];

    // Fungsi untuk membuat card dan menambahkannya ke dalam container
    function createCard(title, nip, kelas, link) {
        const cardContainer = document.getElementById('cardContainer');

        // Membuat elemen card
        const cardElement = document.createElement('a');
        cardElement.classList.add('card');
        cardElement.href = link;

        // Menambahkan konten ke dalam card
        cardElement.innerHTML = `
                <h3>${title}</h3>
                <p>${nip}</p>
                <P>${kelas}</P>
            `;

        // Menambahkan card ke dalam container
        cardContainer.appendChild(cardElement);
    }

    // Looping untuk membuat card menggunakan data yang diberikan
    for (let i = 0; i < cardData.length; i++) {
        createCard(cardData[i].title, cardData[i].nip, cardData[i].kelas, cardData[i].link);
    }
</script>
<?php include('../includes/footer.php') ?>