<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <style>
    .ck-editor__editable {
      min-height: 200px!important;
    }
  </style>
</head>

<body id="page-top">

  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar --> 
        <?php $this->load->view("admin/_partials/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- this is page content, edit this -->
          <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
          <?php endif; ?>

          <div class="card mb-3">
            <div class="card-header">
              <a href="<?php echo site_url('admin/post/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">

              <form action="<?php base_url('admin/post/add') ?>" method="post" enctype="multipart/form-data" >
  
                <input type="hidden" name="id" value="<?php echo $post->id?>" />

                <div class="form-group">
                  <label for="title">Post Title*</label>
                  <input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
                  type="text" name="title" value="<?php echo $post->title ?>" placeholder="Post title" />
                  <div class="invalid-feedback">
                    <?php echo form_error('title') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="banner">Banner Image*</label>
                  <input class="form-control-file <?php echo form_error('banner') ? 'is-invalid':'' ?>"
                  type="file" name="banner" />
                  <input type="hidden" name="old_image" value="<?php echo $post->banner ?>" />
                  <div class="invalid-feedback">
                    <?php echo form_error('banner') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="content">Post Content*</label>
                  <textarea id="editor" class="ckeditor form-group <?php echo form_error('content') ? 'is-invalid':'' ?>" placeholder="Enter text ..." 
                  name="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;">
                  <?php echo $post->content ?>
                  </textarea>
                  <div class="invalid-feedback">
                    <?php echo form_error('content') ?>
                  </div>
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />
              </form>

            </div>

            <div class="card-footer small text-muted">
              * required fields
            </div>
        <!-- end of page content -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>

	<!-- /#wrapper -->

	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>
  <script src="<?php echo base_url('assets/admin/')?>vendor/ckeditor5/ckeditor.js"></script>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>

</body>

</html>
