<div class="container-fluid">

<?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
  </div>
<?php endif; ?>

  <div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo site_url('about') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

      <form action="<?php base_url('about/edit') ?>" method="post" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?php echo $about->id?>" />

        <div class="form-group">
            <label for="content">Content*</label>
            <textarea class="form-control <?php echo form_error('content') ? 'is-invalid':'' ?>"
            type="text" name="content" placeholder="Content About"><?php echo $about->content ?></textarea>
            <div class="invalid-feedback">
            <?php echo form_error('content') ?>
          </div>
        </div>
        
        <div class="form-group">
          <label for="image">Image*</label>
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


</div>