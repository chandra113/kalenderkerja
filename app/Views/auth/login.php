<?= $this->extend('template/template_auth'); ?>

<?= $this->section('content'); ?>



<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">


                    <div class="col-lg">
                        <div class="p-5">
                            <div class="card-img-top">
                                <img src="/kemenkumham.png" alt="logo_kemenkumham" style="width:128px;height:128px;">
                            </div>
                            <div class="p-3">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                </div>
                            </div>

                            <?php if (session()->getFlashdata('msg') == TRUE) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('msg') ?>
                                </div>
                            <?php endif; ?>

                            <?php if (session()->getFlashdata('errlog') == TRUE) : ?>
                                <!-- <div class="alert alert-danger" role="alert"> -->
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('errlog') ?>
                                </div>
                            <?php endif; ?>

                            <form accept-charset="UTF-8" class="user" method="POST" action="<?= base_url('/auth/loginCheck') ?>">
                                <!-- <?= csrf_field(); ?> -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>

                                <!-- button type="submit" -->
                                <button type="submit" class="btn btn-primary btn-block">
                                    <Strong>Login</Strong>
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('/forgotpassword') ?>">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('/register') ?>">Buat Akun</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<?= $this->endSection(); ?>