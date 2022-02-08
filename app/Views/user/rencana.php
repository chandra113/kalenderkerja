<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>



<!-- Begin Page Content -->
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Rencana Kerja</h1>
        </div>



        <div class="row">

            <div class="col-sm">

                <!-- Basic Card Example -->
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Rencana Kerja</h6>

                    </div>

                    <div class="card-body">
                        <form action="/user/saveKegiatan" method="POST">
                            <?= csrf_field(); ?>

                            <div class="row mb-3">
                                <label for="nama_kegiatan" class="col-md-5 col-form-label">Nama Kegiatan</label>
                                <div class="col-sm">
                                    <input type="text" class="form-control form-control-sm" id="nama_kegiatan" name="nama_kegiatan" autocomplete="new-password" autofocus required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="anggaran" class="col-sm-5 col-form-label">Jumlah Anggaran</label>
                                <div class="col-sm">
                                    <input type="number" class="form-control form-control-sm" id="anggaran" name="anggaran" placeholder="Dalam Satuan Rupiah" autocomplete="new-password" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="tanggal_kegiatan" class="col-sm-5 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm">
                                    <input type="date" class="form-control form-control-sm" id="tanggal_kegiatan" name="tanggal_kegiatan" value="<?= old('tanggal_kegiatan') ?>" min="today" max="2040-12-31" required>
                                </div>
                            </div>

                            <!-- button type="submit" -->
                            <button type="submit" class="btn btn-info">Submit</button>

                        </form>

                    </div>
                </div>

            </div>


        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /.container-wrapper -->


<?= $this->endSection(); ?>