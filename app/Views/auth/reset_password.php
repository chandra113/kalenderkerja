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
                                    <h1 class="h4 text-gray-900 mb-2">Ubah Password</h1>
                                    <p class="mb-2">Silakan masukkan password baru Anda</p>
                                </div>
                            </div>

                            <!-- Password -->
                            <form accept-charset="UTF-8" class="user" action="<?= base_url('auth/saveRegister') ?>" method="POST">
                                <div class="form-group">
                                    <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= old('password') ?>" placeholder="Masukkan Password Baru">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control <?= ($validation->hasError('repeatPassword')) ? 'is-invalid' : ''; ?>" id="repeatPassword" name="repeatPassword" value="<?= old('repeatPassword') ?>" placeholder="Ulangi Password">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('repeatPassword'); ?>
                                    </div>
                                </div>

                                <!-- button type="submit" -->
                                <a href="login.html" class="btn btn-primary btn-block">
                                    <Strong>Submit</Strong>
                                </a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<?= $this->endSection(); ?>