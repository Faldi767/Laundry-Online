<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laundry</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bootstrap/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">FAL</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">FALDI LAUNDRY</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
		<?php include("pages/sidebar.php"); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <?php 
		  if(!isset($_GET['pages']))
		  {
		  }
		  elseif($_GET['pages'] == 'login') 
		  {
			  include('pages/login.php'); 
		  }
		  elseif($_GET['pages'] == 'karyawan')
		  {
			  include('pages/karyawan.php');
		  }
		  elseif($_GET['pages'] == 'konsumen')
		  {
			  include('pages/konsumen.php');
		  }
		  elseif($_GET['pages'] == 'supplier')
		  {
			  include('pages/supplier.php');
		  }
		  elseif($_GET['pages'] == 'barang')
		  {
			  include('pages/barang.php');
		  }
		  elseif($_GET['pages'] == 'tarif')
		  {
			  include('pages/tarif.php');
		  }
		  elseif($_GET['pages'] == 'jenis')
		  {
			  include('pages/jenis.php');
		  }
		  elseif($_GET['pages'] == 'pembelian')
		  {
			  include('pages/pembelian.php');
		  }
		  elseif($_GET['pages'] == 'transaksi')
		  {
			  include('pages/transaksi.php');
		  }
		  elseif($_GET['pages'] == 'rincianpembelian')
		  {
			  include('pages/rincianpembelian.php');
		  }
		  elseif($_GET['pages'] == 'rinciantransaksi')
		  {
			  include('pages/rinciantransaksi.php');
		  }
		  elseif($_GET['pages'] == 'pemakaian')
		  {
			  include('pages/pemakaian.php');
		  }
		  elseif($_GET['pages'] == 'tambahkaryawan')
		  {
			  include('pages/tambahkaryawan.php');
		  }
		  elseif($_GET['pages'] == 'hapuskaryawan')
		  {
			  include('pages/pilihhapuskaryawan.php');
		  }
		  elseif($_GET['pages'] == 'updatekaryawan')
		  {
			  include('pages/pilihupdatekaryawan.php');
		  }
		  elseif($_GET['pages'] == 'formupdatekaryawan')
		  {
			  include('pages/formupdatekaryawan.php');
		  }
		  elseif($_GET['pages'] == 'tambahsupplier')
		  {
			  include('pages/tambahsupplier.php');
		  }
		  elseif($_GET['pages'] == 'formupdatesupplier')
		  {
			  include('pages/formupdatesupplier.php');
		  }
		  elseif($_GET['pages'] == 'updatesupplier')
		  {
			  include('pages/pilihupdatesupplier.php');
		  }
		  elseif($_GET['pages'] == 'hapussupplier')
		  {
			  include('pages/pilihhapussupplier.php');
		  }
		  elseif($_GET['pages'] == 'tambahkonsumen')
		  {
			  include('pages/tambahkonsumen.php');
		  }
		  elseif($_GET['pages'] == 'formupdatekonsumen')
		  {
			  include('pages/formupdatekonsumen.php');
		  }
		  elseif($_GET['pages'] == 'updatekonsumen')
		  {
			  include('pages/pilihupdatekonsumen.php');
		  }
		  elseif($_GET['pages'] == 'hapuskonsumen')
		  {
			  include('pages/pilihhapuskonsumen.php');
		  }
		  elseif($_GET['pages'] == 'tambahtarif')
		  {
		  include('pages/tambahtarif.php');
		  }
		  elseif($_GET['pages'] == 'formupdatetarif')
		  {
			  include('pages/formupdatetarif.php');
		  }
		  elseif($_GET['pages'] == 'updatetarif')
		  {
			  include('pages/pilihupdatetarif.php');
		  }
		  elseif($_GET['pages'] == 'hapustarif')
		  {
			  include('pages/pilihhapustarif.php');
		  }
		  elseif($_GET['pages'] == 'tambahjenis')
		  {
		  include('pages/tambahjenis.php');
		  }
		  elseif($_GET['pages'] == 'formupdatejenis')
		  {
			  include('pages/formupdatejenis.php');
		  }
		  elseif($_GET['pages'] == 'updatejenis')
		  {
			  include('pages/pilihupdatejenis.php');
		  }
		  elseif($_GET['pages'] == 'hapusjenis')
		  {
			  include('pages/pilihhapusjenis.php');
		  }
		  ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.0.1
        </div>
        <strong>Copyright &copy; <?php echo date("Y"); ?> Muhammad Rifaldi Akbar.</strong> All rights reserved.
      </footer>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>
