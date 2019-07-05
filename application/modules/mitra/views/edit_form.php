<div class="container-fluid">

<?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
  </div>
<?php endif; ?>

  <div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo site_url('mitra') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

      <form action="<?php base_url('mitra/edit') ?>" method="post" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?php echo $mitra->id?>" />
        <input type="hidden" name="created_at" value="<?php echo $mitra->created_at?>" />

        <div class="form-group">
            <label for="name">Nama Mitra*</label>
            <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
            type="text" name="name" value="<?php echo $mitra->name ?>" placeholder="Nama Mitra" />
            <div class="invalid-feedback">
            <?php echo form_error('name') ?>
          </div>
        </div>

        <div class="form-group">
        <label for="category">Kategori*</label>
            <input class="form-control <?php echo form_error('category') ? 'is-invalid':'' ?>"
            type="text" name="category" value="<?php echo $mitra->category ?>" placeholder="Kategori" />
            <div class="invalid-feedback">
            <?php echo form_error('category') ?>
          </div>
        </div>

        <div class="form-group">
            <label for="image">Image*</label>
            <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
            type="file" name="image" />
            <input type="hidden" name="old_image" value="<?php echo $mitra->image ?>" />
            <div class="invalid-feedback">
            <?php echo form_error('image') ?>
          </div>
        </div>

        <div class="form-group">
        <label for="url">Url*</label>
            <input class="form-control <?php echo form_error('url') ? 'is-invalid':'' ?>"
            type="text" name="url" value="<?php echo $mitra->url ?>" placeholder="Url" />
            <div class="invalid-feedback">
            <?php echo form_error('url') ?>
          </div>
        </div>

        <input class="btn btn-success" type="submit" name="btn" value="Save" />
      </form>

    </div>

    <div class="card-footer small text-muted">
      * required fields
    </div>


</div>