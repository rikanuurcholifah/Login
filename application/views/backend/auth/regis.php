<div class="register-box">
    <div class="register-logo">
        <h1 class="text-info"><b>Rika</b><b class="text-white">Nuurcholifah</b></h1>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Isi untuk register</p>

            <form action="../../index.html" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user text-info"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope text-info"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock text-info"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock text-info"></span>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-block">Register</button>
            </form>
            <p class="mt-3">
                <a href="<?= base_url('backend/auth/login') ?>" class="text-center text-info">Sudah memiliki akun</a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->