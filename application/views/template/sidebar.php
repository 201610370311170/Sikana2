

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="<?php echo site_url('dashboard2')?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>


            <!-- Link Sidebar -->
            <li class="header">KELOLA DATA</li>
            <li>
              <a href="<?php echo site_url('pegawai')?>"><i class="fa fa-user-md"></i> Data Petugas</a>
            </li>
            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a href="#"><i class="fa fa-user"></i> Data Pasien <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span></a>
            </li>
            <ul class="sub-menu collapse" id="new">
                  <br>
                  <li class="active"><a href="<?php echo site_url('ibu')?>">Data Ibu</a></li>
                  <br>
                  <li class="active"><a href="<?php echo site_url('bayi')?>">Data Bayi</a></li>
                  <br>
                  <li><a href="<?php echo site_url('ibu/#')?>">Data Balita</a></li>
                  <br>
            </ul>
            <li>
              <a href="<?php echo site_url('rumah_sakit')?>"><i class="fa fa-hospital-o"></i> Rumah Sakit</a>
            </li>

            <!-- <li class="treeview">
                <a href="<?php echo site_url('ibu')?>">
                    <i class="fa fa-user"></i> <span>Data Ibu</span>
                </a>
            </li>
            <li class="treeview">
              <a href="<?php echo site_url('ibu/#')?>">
                  <i class="fa fa-user"></i> <span>Data Bayi</span>
              </a>
            </li> -->
            <!-- <li class="treeview">
              <a href="<?php echo site_url('ibu/#')?>">
                  <i class="fa fa-user"></i> <span>Data Balita</span>
              </a>
            </li> -->


          </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
