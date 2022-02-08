<?= $this->extend('template/template_auth'); ?>

<?= $this->section('content'); ?>

<!-- <script>
    $(document).ready(function() {
        $("#faculty").hide();
        $("#major").hide();
        $("#institution").hide();
        $("#level").on('change', function() {
            var jenis = $(this).val();
            if (jenis == "pegawai") {
                $("#username").attr("placeholder", "Username (gunakan NIP)");
                $("#faculty").show();
                $("#major").show();
                $("#institution").hide();
            } else if (jenis == "umum") {
                $("#username").attr("placeholder", "Username (gunakan NIK)");
                $("#faculty").hide();
                $("#major").hide();
                $("#institution").show();
            }

        });
        // faculty change
        $('#faculty').change(function() {
            var faculty = $(this).val();
            // AJAX request
            $.ajax({
                url: '<?= base_url('auth/getMajor') ?>',
                method: 'post',
                data: {
                    faculty: faculty
                },
                dataType: 'json',
                success: function(response) {
                    // Remove options
                    $('#major').find('option').not(':first').remove();
                    // Add options
                    $.each(response, function(index, data) {
                        $('#major').append('<option value="' + data['major_id'] + '">' + data['major_name'] + '</option>');
                    });
                }
            });
        });

    });
</script> -->


<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
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
                            <h1 class="h4 text-gray-900 mb-4">Halaman Pendaftaran</h1>
                        </div>
                    </div>

                    <form accept-charset="UTF-8" class="user" action="<?= base_url('/auth/saveRegister') ?>" method="POST">
                        <?= csrf_field(); ?>

                        <!-- TODO dependent select will be here -->
                        <!-- <?= $this->include('template/dependent_select'); ?>


                        <!-- Fullname -->
                        <div class="form-group">
                            <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?>" id="fullname" name="fullname" value="<?= set_value('fullname') ?>" placeholder="Nama Lengkap">
                            <div class="invalid-feedback">
                                <?= $validation->getError('fullname'); ?>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <select class="custom-select <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>" name="gender" id="gender" value="<?= set_value('gender') ?>" autofocus>
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option id="Pria" name="Pria" value="Pria">Pria</option>
                                <option id="Wanita" name="Wanita" value="Wanita">Wanita</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('gender'); ?>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Alamat Email">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="form-group">
                            <input type="number" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= set_value('password') ?>" placeholder="Password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control <?= ($validation->hasError('repeatPassword')) ? 'is-invalid' : ''; ?>" id="repeatPassword" name="repeatPassword" value="<?= set_value('repeatPassword') ?>" placeholder="Ulangi Password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('repeatPassword'); ?>
                                </div>
                            </div>
                        </div>


                        <!-- button type="submit" -->
                        <button type="submit" class="btn btn-primary btn-block">
                            <Strong>Daftarkan Akun</Strong>
                        </button>

                    </form>

                    <hr>

                    <div class="text-center">
                        <a class="small" href="<?= base_url('/login') ?>">Sudah punya akun? Login disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection(); ?>