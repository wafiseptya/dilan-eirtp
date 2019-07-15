<div class="container-fluid">

<?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
  </div>
<?php endif; ?>

  <div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo site_url('footer') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

      <form action="<?php base_url('footer/edit') ?>" method="post" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?php echo $footer->id?>" />

        <div class="form-group">
            <label for="address">Address*</label>
            <input class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>"
            type="text" name="address" value="<?php echo $footer->address ?>" placeholder="Alamat" />
            <div class="invalid-feedback">
            <?php echo form_error('address') ?>
          </div>
        </div>

        <div class="form-group">
            <label for="telp">Telp*</label>
            <input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>"
            type="text" name="telp" value="<?php echo $footer->telp ?>" placeholder="Nomor Telpon" />
            <div class="invalid-feedback">
            <?php echo form_error('telp') ?>
          </div>
        </div>

        <div class="form-group">
            <label for="fax">Fax*</label>
            <input class="form-control <?php echo form_error('fax') ? 'is-invalid':'' ?>"
            type="text" name="fax" value="<?php echo $footer->fax ?>" placeholder="Nomor Fax" />
            <div class="invalid-feedback">
            <?php echo form_error('fax') ?>
          </div>
        </div>

        <div class="form-group">
            <label for="whatsapp">Whatsapp*</label>
            <input class="form-control <?php echo form_error('whatsapp') ? 'is-invalid':'' ?>"
            type="text" name="whatsapp" value="<?php echo $footer->whatsapp ?>" placeholder="Nomor WhatsApp" />
            <div class="invalid-feedback">
            <?php echo form_error('whatsapp') ?>
          </div>
        </div>

        <div class="form-group">
            <label for="email">Email*</label>
            <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
            type="text" name="email" value="<?php echo $footer->email ?>" placeholder="Email" />
            <div class="invalid-feedback">
            <?php echo form_error('email') ?>
          </div>
        </div>

        <div class="form-group">
            <label for="location">Location*</label>
            <textarea class="form-control <?php echo form_error('location') ? 'is-invalid':'' ?>"
            type="text" name="location" placeholder="Embed Lokasi"><?php echo htmlspecialchars($footer->location) ?></textarea>
            <div class="invalid-feedback">
            <?php echo form_error('location') ?>
          </div>
        </div>

        <div class="form-group">
            <label for="email">Link App*</label>
            <input class="form-control <?php echo form_error('apps') ? 'is-invalid':'' ?>"
            type="text" name="apps" value="<?php echo $footer->apps ?>" placeholder="Link Apps" />
            <div class="invalid-feedback">
            <?php echo form_error('apps') ?>
          </div>
        </div>

        <input class="btn btn-success" type="submit" name="btn" value="Save" />
      </form>

    </div>

    <div class="card-footer small text-muted">
      * required fields
    </div>


</div>