<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <!-- Print Button -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-plus-square m-r-5"></i> Tambah
                    </button>

                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-info waves-effect waves-light">
                            <i class="fa ion-android-printer m-r-5"></i> Cetak
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-sm-6 col-md-3 m-t-4">

                <!-- Modal content -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" action="<?= base_url('auth/saveKegiatan') ?>" method="POST">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div style="padding:15px" class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Tambahkan Rencana Kerja</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>

                            <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="username" class="col-md-5 col-form-label">Username</label>
                                    <div class="col-sm">
                                        <input type="number" class="form-control" id="username" disabled>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullname" class="col-md-5 col-form-label">Nama Kegiatan</label>
                                    <div class="col-sm">
                                        <input type="text" class="form-control form-control-sm" id="nama_kegiatan" name="nama_kegiatan" autocomplete="new-password" required>
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
                                        <input type="date" class="form-control form-control-sm" id="tanggal_kegiatan" name="tanggal_kegiatan" value="<?= old('tanggal_masuk') ?>" min="today" max="2040-12-31" required>
                                    </div>
                                </div>


                                <div class="form-group row mb-2">
                                    <label for="profilePicture" class="col-sm-5 col-form-label">Keterangan</label>
                                    <div class="col-sm">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Batalkan</button>
                                <button type="button" class="btn btn-success waves-effect waves-light">Simpan</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>

        <!-- Row Table-->
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body table-responsive">
                        <h5 class="header-title">Daftar Rencana Kerja</h5>
                        <div class="col-sm">
                            <div class="page-title-box">

                                <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-plus-square m-r-5"></i> Tambah
                                </button>

                            </div>
                        </div>
                        <div class="table table-hover">
                            <table id="datatable2" class="table">
                                <thead class="thead-default">
                                    <tr>
                                        <th rowspan="2">Nama Kegiatan</th>
                                        <th rowspan="2">Jumlah Anggaran</th>
                                        <th colspan="12">Bulan</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <th>Januari</th>
                                    <th>Februari</th>
                                    <th>Maret</th>
                                    <th>April</th>
                                    <!-- <th>Mei</th>
                                    <th>Juni</th>
                                    <th>Juli</th>
                                    <th>Agustus</th>
                                    -->
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <!-- <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>
                                            <button type="button" class="btn btn-warning waves-effect waves-light m-1">
                                                <i class="fa ti-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-googleplus waves-effect waves-light m-1">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <!-- <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td> -->
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <!-- <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td> -->
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <!-- <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td> -->
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <!-- <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td> -->
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->


    </div> <!-- end container -->
</div>
<!-- end wrapper -->


<?= $this->endsection(); ?>