<div class="container-fluid">

<?php if($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<div class="card mb-3">
    <div class="card-header">
        <a href="<?php echo base_url('mitra') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

        <form action="<?php base_url('mitra/add') ?>" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="name">Nama Mitra*</label>
            <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
            type="text" name="name" placeholder="Nama Mitra" />
            <div class="invalid-feedback">
            <?php echo form_error('name') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori</label>
            <select class="form-control" <?php echo form_error('category') ? 'is-invalid':'' ?> id="exampleFormControlSelect1" name="category">
                <option>Marketplace</option>
                <option>Sertifikasi</option>
            </select>
            <div class="invalid-feedback">
            <?php echo form_error('category') ?>            
        </div>

        <div class="form-group">
            <label for="image">Image*</label>
            <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
            type="file" name="image" />
            <div class="invalid-feedback">
            <?php echo form_error('image') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="url">Url*</label>
            <input class="form-control-file <?php echo form_error('url') ? 'is-invalid':'' ?>"
            type="text" name="url" placeholder="URL" />
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

</div>