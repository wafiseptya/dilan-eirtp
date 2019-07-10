<div class="container-fluid">

<?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
  </div>
<?php endif; ?>

  <div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo site_url('advantage') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

      <form action="<?php base_url('advantage/edit') ?>" method="post" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?php echo $advantage->id?>" />

        <div class="form-group">
            <label for="title">Judul*</label>
            <input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
            type="text" name="title" value="<?php echo $advantage->title ?>" placeholder="Judul" />
            <div class="invalid-feedback">
            <?php echo form_error('title') ?>
          </div>
        </div>

        <div class="form-group">
            <label for="image">Image*</label>
            <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
            type="file" name="image" />
            <input type="hidden" name="old_image" value="<?php echo $advantage->image ?>" />
            <div class="invalid-feedback">
            <?php echo form_error('image') ?>
          </div>
        </div>

        <div class="form-group">
        <label for="description">Description*</label>
            <input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
            type="text" name="description" value="<?php echo $advantage->description ?>" placeholder="Url" />
            <div class="invalid-feedback">
            <?php echo form_error('description') ?>
          </div>
        </div>

        <input class="btn btn-success" type="submit" name="btn" value="Save" />
      </form>

    </div>

    <div class="card-footer small text-muted">
      * required fields
    </div>


</div>