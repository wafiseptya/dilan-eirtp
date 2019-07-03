<div class="container-fluid">

  <!-- this is page content, edit this -->
  <?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
  </div>
  <?php endif; ?>

  <div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo base_url('header') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

      <form action="<?php base_url('header/edit') ?>" method="post" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?php echo $header->id?>" />
        <input type="hidden" name="created_at" value="<?php echo $header->created_at?>" />

        <div class="form-group">
          <label for="description">Image Description*</label>
          <input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
          type="text" name="description" value="<?php echo $header->description ?>" placeholder="Image Description" />
          <div class="invalid-feedback">
            <?php echo form_error('description') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="image">Header Image*</label>
          <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
          type="file" name="image" />
          <input type="hidden" name="old_image" value="<?php echo $header->image ?>" />
          <div class="invalid-feedback">
            <?php echo form_error('image') ?>
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