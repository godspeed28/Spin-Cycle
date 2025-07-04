<?= $this->extend('layout-login/template'); ?>

<?= $this->section('content'); ?>
<hr>
<div class="bg-home d-flex justify-content-center">
    <!-- Login Card -->
    <div class="card shadow-sm border-0 rounded-1 p-4 mb-4 mb-5 me-md-3" style="width: 100%; max-width: 400px;">
        <h4 class="mb-4 text-start fw-bold"><?= esc($title2) ?></h4>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="/Login/auth" method="post">
            <?= csrf_field() ?>

            <div class="mb-3 text-start">
                <div class="input-group">
                    <span class="input-group-text rounded-0 bg-light">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <input type="text" id="username" name="nohp/username/email" class="rounded-0 form-control" placeholder="No. Handphone/Username/Email" required>
                </div>
            </div>

            <div class="mb-3 text-start">
                <div class="input-group">
                    <span class="input-group-text rounded-0 bg-light">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" id="password" name="password" class="rounded-0 form-control" placeholder="Password" required>
                </div>
            </div>

            <div class="form-check d-flex mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label justify-content-start text-muted" for="remember">&nbsp;
                    Ingat saya
                </label>
            </div>

            <button type="submit" class="btn btn-info rounded-0 text-white w-100">Login</button>
        </form>

        <p class="text-center mt-3">Belum punya akun? <a href="/Daftar/">Daftar</a></p>
    </div>
</div>
<?= $this->endSection(); ?>