<div class="container-fluid">

  <!-- this is page content, edit this -->
  <?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
  </div>
  <?php endif; ?>

  <div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo site_url('news') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

      <form action="<?php base_url('news/edit') ?>" method="post" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?php echo $news->id?>" />
        <input type="hidden" name="created_at" value="<?php echo $news->created_at?>" />

        <div class="form-group">
          <label for="title">Artikel Title*</label>
          <input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
          type="text" name="title" value="<?php echo $news->title ?>" placeholder="Post title" />
          <div class="invalid-feedback">
            <?php echo form_error('title') ?>
          </div>
        </div>
        
        <div class="form-group">
          <label for="cat_id">Kategori Artikel*</label>
          <select required id="cat_id" name="cat_id" class="form-control" onchange="hideShow()">
            <option disabled selected value>-- PILIH KATEGORI ARTIKEL --</option>
            <?php foreach ($category as $row): ?>
            <option value="<?php echo $row->id ?>"><?php echo $row->cat_title ?></option>
            <?php endforeach; ?>
            
          </select>
          <div class="invalid-feedback">
            <?php echo form_error('cat_id') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="banner">Banner Image*</label>
          <input class="form-control-file <?php echo form_error('banner') ? 'is-invalid':'' ?>"
          type="file" name="banner" />
          <input type="hidden" name="old_image" value="<?php echo $news->banner ?>" />
          <div class="invalid-feedback">
            <?php echo form_error('banner') ?>
          </div>
        </div>

        <div class="form-group">
          <label for="content">Post Content*</label>
          <textarea id="editor" class="ckeditor form-group <?php echo form_error('content') ? 'is-invalid':'' ?>" placeholder="Enter text ..." 
          name="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;">
          <?php echo $news->content ?>
          </textarea>
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
<!-- end of page content -->

</div>