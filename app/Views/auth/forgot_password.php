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
                                    <h1 class="h4 text-gray-900 mb-2">Lupa Password?</h1>
                                    <p class="mb-4">Link ganti password akan dikirimkan melalui email Anda</p>
                                </div>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email Anda...">
                                </div>

                                <!-- button type="submit" -->
                                <a href="login.html" class="btn btn-primary btn-block">
                                    <Strong>Kirimkan</Strong>
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('/register') ?>">Buat Akun</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('/login') ?>">Login disini</a>
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