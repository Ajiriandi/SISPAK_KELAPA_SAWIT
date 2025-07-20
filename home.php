<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&display=swap');

    body {
        background: linear-gradient(135deg, #3a8dde 0%, #7f53ac 100%);
        background-image: url('assets/images/kelapa_sawit.jpg'), linear-gradient(135deg, #3a8dde 0%, #7f53ac 100%);
        background-blend-mode: overlay;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 1200px auto, cover;
        font-family: 'Montserrat', Arial, sans-serif;
        min-height: 100vh;
        margin: 0;
        color: #fff;
        overflow-x: hidden;
    }

    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(30, 30, 50, 0.65);
        z-index: 0;
        backdrop-filter: blur(4px);
    }

    .teks {
        max-width: 850px;
        margin: 48px auto;
        background: rgba(255, 255, 255, 0.13);
        border-radius: 32px;
        box-shadow: 0 12px 40px 0 rgba(60, 60, 120, 0.25);
        border: 1.5px solid rgba(255, 255, 255, 0.22);
        padding: 48px 36px;
        position: relative;
        z-index: 1;
        color: #fff;
        font-weight: 700;
        backdrop-filter: blur(10px);
        animation: fadeInUp 1s cubic-bezier(.39, .575, .565, 1) both;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .page-header .entry-title {
        font-size: 2.8rem;
        font-weight: 900;
        letter-spacing: 2.5px;
        color: #fff;
        text-shadow: 0 4px 24px rgba(60, 60, 120, 0.25);
        margin-bottom: 18px;
        transition: color 0.3s;
    }

    .page-header .entry-title:hover {
        color: #7f53ac;
    }

    .enrty-body h2,
    .enrty-body h3 {
        color: rgb(236, 236, 236);
        font-weight: 900;
        margin-top: 28px;
        margin-bottom: 14px;
        text-shadow: 0 2px 12px rgba(60, 60, 120, 0.18);
        letter-spacing: 1px;
    }

    .enrty-body p {
        color: #f8f8ff;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 0 1px 8px rgba(60, 60, 120, 0.13);
        font-size: 1.08rem;
    }

    .container-lg {
        margin-bottom: 36px;
    }

    .card {
        background: linear-gradient(120deg, #3a8dde 80%, #7f53ac 100%);
        border: none;
        border-radius: 22px;
        box-shadow: 0 6px 32px rgba(60, 60, 120, 0.18);
        transition: transform 0.25s, box-shadow 0.25s;
        font-weight: 900;
        overflow: hidden;
        position: relative;
    }

    .card::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.07);
        pointer-events: none;
    }

    .card:hover {
        transform: translateY(-8px) scale(1.04);
        box-shadow: 0 12px 40px rgba(60, 60, 120, 0.25);
    }

    .card h1 {
        font-size: 2.6rem;
        font-weight: 900;
        color: #fff;
        margin-bottom: 0;
        text-shadow: 0 2px 12px rgba(60, 60, 120, 0.18);
    }

    .card-body>div {
        font-size: 1.18rem;
        font-weight: 700;
        color: #fff;
        margin-top: 10px;
        letter-spacing: 0.5px;
    }

    .row {
        display: flex;
        gap: 32px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .col-sm-6 {
        flex: 1 1 320px;
        max-width: 400px;
        min-width: 260px;
    }

    @media (max-width: 900px) {
        .teks {
            max-width: 98vw;
            padding: 24px 8px;
        }

        .page-header .entry-title {
            font-size: 1.7rem;
        }

        .card h1 {
            font-size: 1.5rem;
        }

        .row {
            gap: 18px;
        }
    }
</style>
<div class="teks">
    <div class="page-header text-center">

        <h4 class="entry-title" style="color: aliceblue;"> Selamat Datang di</h4>
        <h1 class="entry-title">SISPAK KELAPA SAWIT</h1>
    </div>
    <div class="enrty-body flex-grow-1 px-3">
        <h2 class="text-center">
            Diagnosa Awal Pada Gangguan Tanaman Kelapa Sawit Anda
        </h2>
        <p class="text-center">
            Di sini, kami bertujuan untuk meningkatkan perlindungan kepada tanaman kelapa sawit dan Mendiagnosa Awal Gangguan Penyakit Pada Tanaman Sawit.
        </p>
        <div class="container-lg">
            <h3>
                Dapatkan prediksi akurat berdasarkan data gejala penyakit pada tanaman kelapa sawit
            </h3>
            <p>
                Sistem akan memberi Anda prediksi tentang potensi maupun resiko pada masa pertumbuhan kelapa sawit yang akurat dengan melacak lebih dari tanda-tanda pada tanaman kelapa sawit dengan data yang telah kami simpan.
            </p>
            <h3>
                Temukan pola dan gejala unik pada tanaman kelapa sawit Anda
            </h3>
            <p>
                Pahami gejala unik pada tanaman kelapa sawit Anda , lalu ketahui apakah kondisi tanaman yang Anda alami normal.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-6 text-center">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <?php
                        $q = esc_field(_get('q'));
                        $rows = $db->get_results("SELECT * FROM tb_gejala WHERE nama_gejala LIKE '%$q%' ORDER BY kode_gejala");
                        $jumlah_gejala = count($rows);
                        ?>
                        <h1><?php echo $jumlah_gejala; ?></h1>
                        <div>Data Gejala</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 text-center">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <?php
                        $q = esc_field(_get('q'));
                        $rows = $db->get_results("SELECT * FROM tb_diagnosa WHERE nama_diagnosa LIKE '%$q%' ORDER BY kode_diagnosa");
                        $jumlah_penyakit = count($rows);
                        ?>
                        <h1><?php echo $jumlah_penyakit; ?></h1>
                        <div>Data Penyakit</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>