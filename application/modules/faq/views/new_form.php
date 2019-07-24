<div class="container-fluid">

<?php if($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<div class="card mb-3">
    <div class="card-header">
        <a href="<?php echo base_url('faq') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

      <form action="<?php base_url('faq/add') ?>" method="post" enctype="multipart/form-data" >

        <div class="form-group">
            <label for="title">Judul*</label>
            <input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
            type="text" name="title" placeholder="Judul FAQ" />
            <div class="invalid-feedback">
            <?php echo form_error('title') ?>
            </div>
        </div>

        <div class="form-group">
          <label for="editor">Isi*</label>
          <textarea id="editor" class="ckeditor form-group <?php echo form_error('content') ? 'is-invalid':'' ?>" placeholder="Enter text ..." 
          name="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;"></textarea>
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

    </div>

</div>