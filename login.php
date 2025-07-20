<div class="page-header">
    <h1>Login | Masuk</h1>
    <h1>SISPAK KELAPA SAWIT</h1>
    <p>Silahkan memasukan untuk proses login anda</p>
</div>
<div class="row">
    <div class="col-md-4">
        <?php if ($_POST) include 'aksi.php'; ?>
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" name="user" autofocus />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>
            </div>
        </form>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&display=swap');

    body {
        background: linear-gradient(135deg, #3a8dde 0%, #7f53ac 100%);
        background-image: url('assets/images/kelapa_sawit.jpg'), linear-gradient(135deg, #3a8dde 0%, #7f53ac 100%);
        background-blend-mode: overlay;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 1200px auto, cover;
        background-attachment: fixed;
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

    .page-header {
        text-align: center;
        margin-top: 48px;
        margin-bottom: 32px;
        position: relative;
        z-index: 1;
    }

    .page-header h1 {
        font-size: 3rem;
        font-weight: 900;
        letter-spacing: 2.5px;
        color: #fff;
        text-shadow: 0 2px 16px rgba(0, 0, 0, 0.3);
    }

    .row {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 60vh;
        position: relative;
        z-index: 1;
    }

    .col-md-4 {
        background: rgba(255, 255, 255, 0.13);
        border-radius: 24px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
        border: 1.5px solid rgba(255, 255, 255, 0.22);
        padding: 48px 40px 36px 40px;
        color: #fff;
        font-weight: 700;
        backdrop-filter: blur(8px);
        min-width: 360px;
        max-width: 440px;
        width: 100%;
        margin: 0 auto;
        animation: fadeInUp 1s cubic-bezier(.39, .575, .565, 1) both;
        font-size: 1.18rem;
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

    .form-group label {
        font-size: 1.25rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 6px;
        letter-spacing: 0.5px;
    }

    .form-control {
        border-radius: 12px;
        border: none;
        padding: 16px 18px;
        font-size: 1.18rem;
        margin-bottom: 18px;
        background: rgba(255, 255, 255, 0.18);
        color: #222;
        font-weight: 700;
        box-shadow: 0 2px 8px rgba(60, 60, 120, 0.08);
        transition: background 0.2s, color 0.2s;
    }

    .form-control:focus {
        background: #fff;
        color: #3a8dde;
        outline: none;
    }

    .btn-primary {
        background: linear-gradient(90deg, #3a8dde 60%, #7f53ac 100%);
        border: none;
        border-radius: 12px;
        padding: 16px 0;
        font-size: 1.25rem;
        font-weight: 900;
        color: #fff;
        width: 100%;
        box-shadow: 0 4px 16px rgba(60, 60, 120, 0.18);
        transition: background 0.2s, transform 0.2s;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #7f53ac 60%, #3a8dde 100%);
        transform: translateY(-2px) scale(1.03);
    }
</style>