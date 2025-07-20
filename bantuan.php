<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&display=swap');

    body {
        background: linear-gradient(135deg, #3a8dde 0%, rgb(173, 163, 182) 100%);
        background-image: url('assets/images/kelapa_sawit.jpg'), linear-gradient(135deg, #3a8dde 0%, #7f53ac 100%);
        background-blend-mode: overlay;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 1800px auto, cover;
        /* Ubah ukuran gambar jadi lebih besar */
        background-attachment: fixed;
        font-family: 'Montserrat', Arial, sans-serif;
        min-height: 200vh;
        margin: 0;
        color: #fff;
        overflow-x: hidden;
    }

    .page-header {
        text-align: center;
        margin-top: 48px;
        margin-bottom: 32px;
    }

    .page-header h1 {
        font-size: 3.2rem;
        /* diperbesar */
        font-weight: 900;
        letter-spacing: 2.5px;
        color: #fff;
        background: linear-gradient(90deg, rgb(255, 255, 255) 30%, rgb(255, 255, 255) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 6px 32px rgba(60, 60, 120, 0.18);
        transition: letter-spacing 0.3s;
    }

    .page-header h1:hover {
        letter-spacing: 6px;
    }

    h4 {
        background: #fff;
        border-radius: 28px;
        box-shadow: 0 8px 32px 0 rgba(122, 144, 255, 0.18), 0 2px 8px 0 #ff6a8840;
        border: 1.5px solid #e3e8ff;
        padding: 40px 44px 30px 44px;
        /* diperbesar */
        margin: 32px auto;
        max-width: 900px;
        font-size: 1.35rem;
        /* diperbesar */
        font-weight: 700;
        color: #3a8dde;
        position: relative;
        overflow: hidden;
        transition: box-shadow 0.3s, transform 0.3s;
    }

    h4:hover {
        box-shadow: 0 16px 48px 0 #ff6a8890, 0 4px 16px 0 #3a8dde40;
        transform: translateY(-4px) scale(1.02);
    }

    h4 b {
        color: #ff6a88;
        letter-spacing: 1px;
        font-weight: 900;
        font-size: 1.18em;
        /* diperbesar */
    }

    h4 p {
        color: #222;
        font-weight: 600;
        margin-bottom: 14px;
        font-size: 1.13em;
        /* diperbesar */
    }

    .text-center {
        text-align: center;
    }

    img.mb-5 {
        width: 90%;
        max-width: 700px;
        border-radius: 32px;
        box-shadow: 0 8px 32px rgba(60, 60, 120, 0.18), 0 2px 8px #ff6a8840;
        margin: 36px 0;
        border: 4px solid #fff;
        transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
        background: #fff;
    }

    img.mb-5:hover {
        transform: scale(1.04) rotate(-2deg);
        box-shadow: 0 20px 64px rgba(60, 60, 120, 0.28), 0 8px 32px #3a8dde40;
        border-color: #ff6a88;
    }

    @media (max-width: 900px) {
        h4 {
            padding: 18px 8px 10px 8px;
            font-size: 1.08rem;
        }

        .page-header h1 {
            font-size: 1.7rem;
        }

        img.mb-5 {
            max-width: 98vw;
        }
    }

    .footer {
        margin-top: 48px;
    }
</style>
<div class="page-header">
    <h1>Tentang Sistem Diagnosa Penyakit Kelapa Sawit</h1>
</div>
<h4>
    Sistem diagnosa penyakit kelapa sawit adalah aplikasi berbasis AI yang membantu petani dan praktisi pertanian dalam mendeteksi serta menganalisis penyakit pada tanaman kelapa sawit berdasarkan gejala yang teridentifikasi di lapangan.
</h4>
<div class="text-center">
    <img class="mb-5" style="width: 700px" src="assets/images/main.png" alt="Kelapa Sawit">
</div>
<h4>
    <p><b>Memudahkan Anda mengontrol kesehatan tanaman kelapa sawit</b></p>
    <p>Kami mendukung petani dan pengguna dalam mengidentifikasi masalah pada kelapa sawit dengan prediksi berdasarkan gejala yang dipersonalisasi, asisten virtual, serta wawasan tentang kesehatan tanaman.</p>
</h4>
<h4>
    <p><b>Memberikan informasi ahli untuk semua</b></p>
    <p>Informasi berbasis bukti dan pengalaman lapangan tersedia untuk semua pengguna. Kami bekerja sama dengan para ahli pertanian dan organisasi terkait untuk menyediakan informasi yang dapat dipercaya.</p>
</h4>
<h4>
    <p><b>Menjaga informasi pribadi tetap aman</b></p>
    <p>Privasi Anda adalah prioritas kami. Sistem ini menyediakan platform yang aman untuk semua pengguna.</p>
</h4>