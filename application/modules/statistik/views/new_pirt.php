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
    <a href="<?php echo base_url('statistik') ?>"><i class="fas fa-arrow-left"></i> Back</a>
  </div>
  <div class="card-body">

    <form action="<?php base_url('statistik/addPIRT') ?>" method="post" enctype="multipart/form-data" >
      <input type="hidden" name="category" value='1' />
      <div class="form-group">
        <label for="date">Bulan*</label>
        <input class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>"
        type="month" name="date" placeholder="Bulan & Tahun" />
        <div class="invalid-feedback">
          <?php echo form_error('date') ?>
        </div>
      </div>

      <div class="form-group">
        <label for="value">Jumlah*</label>
        <input class="form-control <?php echo form_error('value') ? 'is-invalid':'' ?>"
        type="number" name="value" placeholder="Jumlah" />
        <div class="invalid-feedback">
          <?php echo form_error('value') ?>
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