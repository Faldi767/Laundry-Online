	  <?php
		include('pages/processlogin.php');
	  ?>
	  <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php if(isset($_SESSION['username'])) {echo strtoupper($_SESSION['username']);}else{echo strtoupper('Guest');} ?></p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
		  <?php
		  if(!isset($_SESSION['username']))
		  {
		  echo '<li><a href="?pages=login"><i class="fa fa-user"></i> <span>Login</span></a></li>';
		  }
		  else
		  {
		  echo '<li><a href="pages/logout.php"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>';
		  }
		  ?>
            <li class="header">MENU</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Master</span>
				<i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
			  <?php
			  if(isset($_SESSION['username']))
			  {
                echo '<li><a href="?pages=karyawan"><i class="fa fa-circle-o"></i> Karyawan</a></li>';
                echo '<li><a href="?pages=konsumen"><i class="fa fa-circle-o"></i> Konsumen</a></li>';
                echo '<li><a href="?pages=supplier"><i class="fa fa-circle-o"></i> Supplier</a></li>';
			  }
				?>
				<li><a href="?pages=tarif"><i class="fa fa-circle-o"></i> Tarif</a></li>
				<li><a href="?pages=jenis"><i class="fa fa-circle-o"></i> Jenis Laundry</a></li>
              </ul>
            </li>
			<?php
			if(isset($_SESSION['username']))
			{
			?>
			<li><a href="?pages=barang"><i class="fa fa-table"></i> <span>Barang</span></a></li>
			<li><a href="?pages=pemakaian"><i class="fa fa-cubes"></i> <span>Pemakaian Barang</span></a></li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Transaksi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?pages=pembelian"><i class="fa fa-circle-o"></i> Pembelian Barang</a></li>
                <li><a href="?pages=transaksi"><i class="fa fa-circle-o"></i> Transaksi Laundry</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-sticky-note-o"></i>
                <span>Rincian</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?pages=rincianpembelian"><i class="fa fa-circle-o"></i> Pembelian</a></li>
                <li><a href="?pages=rinciantransaksi"><i class="fa fa-circle-o"></i> Transaksi</a></li>
              </ul>
            </li>
			<?php
			}
			?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>