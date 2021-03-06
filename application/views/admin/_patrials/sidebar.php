
 <!-- Page Wrapper -->
 <div id="wrapper">
     
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Suryani <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('admin')?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        
        
<!-- surat masuk -->
        <span>Surat Masuk</span>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data:</h6>
            
            <a class="collapse-item" href="<?php echo site_url('admin/masuk/add') ?>">Input Surat Masuk </a>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/masuk/">List Surat Masuk
            </a>
        </div>
    </div>
</li>

    
<!--  Surat Keluar -->
<li class="nav-item">

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
<i class="fas fa-fw fa-wrench"></i>
        
<span>Surat Keluar</span></a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data:</h6>
            <a class="collapse-item" href="<?php echo site_url('admin/keluar/add') ?>">Input Surat Keluar</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/keluar/">List Surat Keluar</a>
        </div>
    </div>
</li>


<!-- Disposisi -->
<hr class="sidebar-divider">

<!-- Disposisi -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Disposisi</span>
    </a>


    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data:</h6>
            <a class="collapse-item" href="<?php echo site_url('admin/disposisi/add')?>">Input Disposisi</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/disposisi/">List Disposisi</a>

        </div>
    </div>
</li>

<!-- Laporan -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Laporan</span></a>
</li>

<!-- Logout -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('admin/Login/logout')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Logout</span></a>

</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) 
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div -->

</ul>
<!-- End of Sidebar -->