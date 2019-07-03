<div class="container-fluid">

  <!-- this is page content, edit this -->
  <?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
  </div>
  <?php endif; ?>

  <div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo base_url('admin/agenda/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

      <form action="<?php base_url('admin/agenda/edit') ?>" method="post" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?php echo $agenda->id?>" />
        <input type="hidden" name="created_at" value="<?php echo $agenda->created_at?>" />

        <div class="form-group">
          <label for="title">Agenda Title*</label>
          <input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
          type="text" name="title" value="<?php echo $agenda->title ?>" placeholder="Agenda title" />
          <div class="invalid-feedback">
            <?php echo form_error('title') ?>
          </div>
        </div>

        
        <div class="form-group">
          <label for="date">Tanggal Agenda*</label>
          <input class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>"
          type="date" value="<?php echo $agenda->date ?>"  name="date" placeholder="Tanggal Agenda" />
          <div class="invalid-feedback">
            <?php echo form_error('date') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="start_time">Waktu Mulai Agenda*</label>
          <input class="form-control <?php echo form_error('start_time') ? 'is-invalid':'' ?>"
          type="time" name="start_time" value="<?php echo $agenda->start_time ?>" placeholder="Waktu Mulai Agenda" />
          <div class="invalid-feedback">
            <?php echo form_error('start_time') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="end_time">Waktu Selesai Agenda*</label>
          <input class="form-control <?php echo form_error('end_time') ? 'is-invalid':'' ?>"
          type="time" name="end_time" value="<?php echo $agenda->end_time ?>"  placeholder="Waktu Selesai Agenda" />
          <div class="invalid-feedback">
            <?php echo form_error('end_time') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="category">Kategori Agenda*</label>
          <input class="form-control <?php echo form_error('category') ? 'is-invalid':'' ?>"
          type="text" name="category" value="<?php echo $agenda->category ?>" placeholder="Kategori Agenda" />
          <div class="invalid-feedback">
            <?php echo form_error('category') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="venue">Lokasi Agenda*</label>
          <input class="form-control <?php echo form_error('venue') ? 'is-invalid':'' ?>"
          type="text" name="venue" value="<?php echo $agenda->venue ?>" placeholder="Lokasi Agenda" />
          <div class="invalid-feedback">
            <?php echo form_error('venue') ?>
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
