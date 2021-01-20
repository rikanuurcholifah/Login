<div class="login-box">
    <div class="login-logo">
        <h1 class="text-info"><b>Rika</b><b class="text-white">Nuurcholifah</b></h1>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="../../index3.html" method="post">
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

                <button type="submit" class="btn btn-info btn-block">Login</button>

            </form>
            <p class="mt-3">
                <a href="<?= base_url('backend/auth/register') ?>" class="text-center text-info">Belum memiliki akun</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->