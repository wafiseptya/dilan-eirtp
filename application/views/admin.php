<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo "DILAN E-IRTP | ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/admin/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/admin/')?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin/')?>css/sb-admin-2.min.css" rel="stylesheet">
    <style>
      .ck-editor__editable {
        min-height: 200px;
      }
    </style>
</head>

<body id="page-top">

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <!-- <div class="sidebar-brand-icon rotate-n-15">
            <img src="<?php echo base_url('assets/img/image/logo-dilan-1x.png')?>">

            </div> -->
            <div class="sidebar-brand-text mx-3">DILAN E-IRTP</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php echo $this->uri->segment(1) == 'admin' ? 'active': '' ?>">
            <a class="nav-link" href="<?php echo base_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item <?php echo $this->uri->segment(1) == 'about' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#about" aria-expanded="true" aria-controls="about">
            <i class="fas fa-fw fa-cog"></i>
            <span>About</span>
            </a>
            <div id="about" class="collapse" aria-labelledby="aboutHeading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">About Tables</h6>
                <a class="dropdown-item" href="<?php echo base_url('about') ?>">About</a>
            </div>
            </div>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(1) == 'news' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Artikel</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Artikel Tables</h6>
                  <a class="dropdown-item" href="<?php echo base_url('news/add') ?>">New Artikel</a>
                  <a class="dropdown-item" href="<?php echo base_url('news') ?>">List Artikel</a>
                  <a class="dropdown-item" href="<?php echo base_url('news/kategori') ?>">List Kategori</a>
              </div>
            </div>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(1) == 'agenda' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#agenda" aria-expanded="true" aria-controls="agenda">
              <i class="fas fa-fw fa-cog"></i>
              <span>Agenda</span>
            </a>
            <div id="agenda" class="collapse" aria-labelledby="headingAgenda" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Agenda Tables</h6>
                  <a class="dropdown-item" href="<?php echo base_url('agenda/add') ?>">New Agenda</a>
                  <a class="dropdown-item" href="<?php echo base_url('agenda') ?>">List Agenda</a>
              </div>
            </div>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(1) == 'header' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#header" aria-expanded="true" aria-controls="header">
            <i class="fas fa-fw fa-cog"></i>
            <span>Header</span>
            </a>
            <div id="header" class="collapse" aria-labelledby="headerAgenda" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Header Tables</h6>
                <a class="dropdown-item" href="<?php echo base_url('header/add') ?>">New Header</a>
                <a class="dropdown-item" href="<?php echo base_url('header') ?>">List Header</a>
            </div>
            </div>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(1) == 'footer' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#footer" aria-expanded="true" aria-controls="footer">
            <i class="fas fa-fw fa-cog"></i>
            <span>Footer</span>
            </a>
            <div id="footer" class="collapse" aria-labelledby="footerHeading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Footer Tables</h6>
                <a class="dropdown-item" href="<?php echo base_url('footer') ?>">Footer</a>
            </div>
            </div>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(1) == 'mitra' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mitra" aria-expanded="true" aria-controls="mitra">
            <i class="fas fa-fw fa-cog"></i>
            <span>Mitra</span>
            </a>
            <div id="mitra" class="collapse" aria-labelledby="mitraHeading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Mitra Tables</h6>
                <a class="dropdown-item" href="<?php echo base_url('mitra/add') ?>">New Mitra</a>
                <a class="dropdown-item" href="<?php echo base_url('mitra') ?>">List Mitra</a>
            </div>
            </div>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(1) == 'advantage' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#advantage" aria-expanded="true" aria-controls="advantage">
            <i class="fas fa-fw fa-cog"></i>
            <span>Keunggulan</span>
            </a>
            <div id="advantage" class="collapse" aria-labelledby="advantageHeading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Keunggulan Tables</h6>
                <a class="dropdown-item" href="<?php echo base_url('advantage') ?>">List Keunggulan</a>
            </div>
            </div>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(1) == 'statistik' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#statistik" aria-expanded="true" aria-controls="statistik">
            <i class="fas fa-fw fa-cog"></i>
            <span>Statistik</span>
            </a>
            <div id="statistik" class="collapse" aria-labelledby="statistikHeading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Statistik Tables</h6>
                <a class="dropdown-item" href="<?php echo base_url('statistik') ?>">List Statistik</a>
            </div>
            </div>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(1) == 'faqadmin' ? 'active': '' ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#faq" aria-expanded="true" aria-controls="faq">
            <i class="fas fa-fw fa-cog"></i>
            <span>FAQ</span>
            </a>
            <div id="faq" class="collapse" aria-labelledby="faqHeading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">FAQ Tables</h6>
                <a class="dropdown-item" href="<?php echo base_url('faqadmin') ?>">List FAQ</a>
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
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar --> 
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                        </div>
                    </div>
                    </form>
                </div>
                </li>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                    <img class="img-profile rounded-circle" src="<?php echo base_url('assets/admin/')?>img/photo-people.png">
                  </a>
                <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="<?php echo base_url('auth') ?>">
                        <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                        Setting
                      </a>
                      <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                      </a>
                  </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?php
            if (isset($content)) {
                $this->load->view($content);
            }
        ?>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; 2019 IRTP Online - Dinas Kesehatan Kota Yogyakarta | All Rights Reserved</span>
                </div>
            </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>

	<!-- /#wrapper -->
  <!-- logout modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Logout Delete Confirmation-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/admin/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/admin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/admin/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('assets/admin/')?>vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url('assets/admin/')?>vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url('assets/admin/')?>vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/admin/')?>js/sb-admin-2.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('assets/admin/')?>js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url('assets/admin/')?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url('assets/admin/')?>vendor/ckeditor5/ckeditor.js"></script>

  <script>
    function deleteConfirm(url){
      $('#btn-delete').attr('href', url);
      $('#deleteModal').modal();
    }
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );

  </script>

</body>

</html>
