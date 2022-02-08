<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?php echo base_url(); ?>/annex/assets/images/favicon.ico">

    <link href="<?php echo base_url(); ?>/annex/assets/plugins/morris/morris.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>/annex/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/annex/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/annex/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="<?php echo base_url(); ?>/annex/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/annex/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url(); ?>/annex/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <title><?= $title ?></title>

</head>


<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Navigation Bar-->
    <?= $this->include('template/navbar'); ?>
    <!-- End Navigation Bar-->


    <!-- isinya -->
    <?= $this->renderSection('content'); ?>


    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    ©<?= date('Y'); ?> Bagian Program dan Hubungan Masyarakat.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- jQuery  -->
    <script src="<?php echo base_url(); ?>/annex/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/js/modernizr.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/js/waves.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/js/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/js/jquery.scrollTo.min.js"></script>

    <script src="<?php echo base_url(); ?>/annex/assets/plugins/skycons/skycons.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/morris/morris.min.js"></script>

    <script src="<?php echo base_url(); ?>/annex/assets/pages/dashborad.js"></script>



    <!-- Required datatable js -->
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/annex/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="<?php echo base_url(); ?>/annex/assets/pages/datatables.init.js"></script>




    <!-- App js -->
    <script src="<?php echo base_url(); ?>/annex/assets/js/app.js"></script>
    <script>
        // scroll

        $(document).ready(function() {

            $("#boxscroll").niceScroll({
                cursorborder: "",
                cursorcolor: "#cecece",
                boxzoom: true
            });
            $("#boxscroll2").niceScroll({
                cursorborder: "",
                cursorcolor: "#cecece",
                boxzoom: true
            });
            $('#datatable2').DataTable();

        });
    </script>



</body>

</html>