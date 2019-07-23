<!-- Begin Page Content -->
<div class="container-fluid">

<!-- this is page content, edit this -->
<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
  <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<div id="infoMessage"><?php echo $message;?></div>

<div class="card mb-3">
  <div class="card-header">
    <a href="<?php echo base_url('auth') ?>"><i class="fas fa-arrow-left"></i> Back</a>
  </div>
  <div class="card-body">

    <form action="<?php uri_string() ?>" method="post" enctype="multipart/form-data" >
      <div class="form-group">
        <?php echo lang('edit_user_fname_label', 'first_name');?>
        <?php echo form_input($first_name);?>
      </div>

      <div class="form-group">
        <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
        <?php echo form_input($last_name);?>
      </div>

      <div class="form-group">
        <?php echo lang('edit_user_company_label', 'company');?> <br />
        <?php echo form_input($company);?>
      </div>

      <div class="form-group">
        <?php echo lang('edit_user_phone_label', 'phone');?> <br />
        <?php echo form_input($phone);?>
      </div>

      <div class="form-group">
        <?php echo lang('edit_user_password_label', 'password');?> <br />
        <?php echo form_input($password);?>
      </div>

      <div class="form-group">
        <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
        <?php echo form_input($password_confirm);?>
      </div>

      <div class="form-group">
      <?php if ($this->ion_auth->is_admin()): ?>
      <?php foreach ($groups as $group):?>
          <label class="checkbox">
          <?php
              $gID=$group['id'];
              $checked = null;
              $item = null;
              foreach($currentGroups as $grp) {
                  if ($gID == $grp->id) {
                      $checked= ' checked="checked"';
                  break;
                  }
              }
          ?>
          <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
          <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
          </label>
      <?php endforeach?>

      <?php endif ?>

      </div>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
      <input class="btn btn-success" type="submit" name="btn" value="Save" />
    </form>

  </div>

  <div class="card-footer small text-muted">
    * required fields
  </div>
<!-- end of page content -->

</div>
