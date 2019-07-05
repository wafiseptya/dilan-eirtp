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

      <form action="<?php base_url('header/add') ?>" method="post" enctype="multipart/form-data" >
        <div class="form-group">
          <label for="description">Image Description*</label>
          <input class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
          type="text" name="description" placeholder="Image Desc / Daftar Pelatihan / Daftar NIB / Daftar IRTP" />
          <div class="invalid-feedback">
            <?php echo form_error('description') ?>
          </div>
          <div class="feedback" id="alertLatihan" style="display:none;">
            Untuk banner petunjuk, isi deskripsi sesuai Nama Kategori.
          </div>
        </div>

        <div class="form-group">
          <label for="image">Header Image*</label>
          <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
          type="file" name="image" />
          <div class="invalid-feedback">
            <?php echo form_error('image') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="">Kategori Banner*</label>
          <select required id="category" name="category" class="form-control" onchange="hideShow()">
            <option disabled selected value>-- PILIH KATEGORI BANNER --</option>
            <option value="1">HEADER</option>
            <option value="2">MAIN</option>
            <option value="3">PETUNJUK PENDAFTARAN</option>
          </select>
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

<script>
function hideShow() {
  var selectOpt = document.getElementById("category");
  var alertPelatihan = document.getElementById("alertLatihan");
  var strUser = selectOpt.options[selectOpt.selectedIndex].value;

  if (strUser == 3) {
    alertPelatihan.style.display = "block";
  } else {
    alertPelatihan.style.display = "none";
  }
}

</script>