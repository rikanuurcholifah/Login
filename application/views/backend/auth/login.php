<div class="login-box">
    <div class="login-logo">
        <h1 class="text-info text-auth "><b>Ini</b><b class="text-white">Website</b></h1>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <h1 class="text-center text-drak text-title">Login</h1>

            <form action="<?= base_url('login'); ?>" method="post">
                <div class="input-group">
                    <input type="text" name="username" id="username" class="form-control <?= form_error('username') ? 'is-invalid' : null; ?>" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope text-info"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('username') ?>
                <div class="input-group mt-3">
                    <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : null; ?>" name="password" id="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <a class="fas fa-eye text-info" id="click-password"></a>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock text-info"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password') ?>
                <button type="submit" class="btn btn-info btn-block mt-3">Login</button>

            </form>
            <p class="mt-3">
                <a href="<?= base_url('register') ?>" class="text-center text-info">Belum memiliki akun</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->