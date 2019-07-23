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
    <a href="<?php echo base_url('news/kategori') ?>"><i class="fas fa-arrow-left"></i> Back</a>
  </div>
  <div class="card-body">

    <form action="<?php base_url('news/kategori/add') ?>" method="post" enctype="multipart/form-data" >
      
      <div class="form-group">
        <label for="cat_title">Judul Kategori*</label>
        <input class="form-control <?php echo form_error('cat_title') ? 'is-invalid':'' ?>"
        type="text" name="cat_title" placeholder="Title" />
        <div class="invalid-feedback">
          <?php echo form_error('cat_title') ?>
        </div>
      </div>
      
      <div class="form-group">
        <label for="cat_description">Deskripsi Kategori*</label>
        <input class="form-control <?php echo form_error('cat_description') ? 'is-invalid':'' ?>"
        type="text" name="cat_description" placeholder="Deskripsi kategori" />
        <div class="invalid-feedback">
          <?php echo form_error('cat_description') ?>
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