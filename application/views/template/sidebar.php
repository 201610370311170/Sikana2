
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <ul class="sidebar-menu">
            <br>
            <li class="treeview">
                <a href="<?php echo base_url('admin/Dashboard')?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>


            <!-- Link Sidebar -->

            <li class="header">KELOLA DATA</li>
            <li>
              <a href="<?php echo site_url('admin/pegawai')?>"><i class="fa fa-user-md"></i> Data Pegawai</a>
            </li>
            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a href="#"><i class="fa fa-user"></i> Data Pasien <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span></a>
            </li>
            <ul class="sub-menu collapse" id="new">
                  <br>
                  <li class="active"><a href="<?php echo site_url('admin/ibu')?>">Data Ibu</a></li>
                  <br>
                  <li class="active"><a href="<?php echo site_url('admin/bayi')?>">Data Anak</a></li>
                  <br>
            </ul>

            <li class="header">DATA RUJUKAN</li>
            <li>
              <a href="<?php echo site_url('admin/rumah_sakit')?>"><i class="fa fa-hospital-o"></i> Rumah Sakit</a>
            </li>
            <li class="header">Keluar</li>
            <li>
              <a href="" data-toggle="modal" data-target="#logout"><i class="fa fa-power-off"></i> Keluar</a>
            </li>
          </ul>

          




    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
