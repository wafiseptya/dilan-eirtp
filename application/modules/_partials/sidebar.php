
<!-- 
  // <php echo site_url('admin/products/add') ?> 
-->
<!-- <php echo $this->uri->segment(2) == '' ? 'active': '' ?> -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': 'artikel' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Artikel</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Post Tables</h6>
        <a class="dropdown-item" href="<?php echo site_url('admin/post/add') ?>">New Artikel</a>
        <a class="dropdown-item" href="<?php echo site_url('admin/post') ?>">List Artikel</a>
      </div>
    </div>
  </li>

  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': 'header' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#header" aria-expanded="true" aria-controls="header">
      <i class="fas fa-fw fa-cog"></i>
      <span>Header</span>
    </a>
    <div id="header" class="collapse" aria-labelledby="headerAgenda" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Header Tables</h6>
        <a class="dropdown-item" href="<?php echo site_url('admin/header/add') ?>">New Header</a>
        <a class="dropdown-item" href="<?php echo site_url('admin/header') ?>">List Header</a>
      </div>
    </div>
  </li>

  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': 'agenda' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#agenda" aria-expanded="true" aria-controls="agenda">
      <i class="fas fa-fw fa-cog"></i>
      <span>Agenda</span>
    </a>
    <div id="agenda" class="collapse" aria-labelledby="agendaHeading" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Agenda Tables</h6>
        <a class="dropdown-item" href="<?php echo site_url('admin/agenda/add') ?>">New Agenda</a>
        <a class="dropdown-item" href="<?php echo site_url('admin/agenda') ?>">List Agenda</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>