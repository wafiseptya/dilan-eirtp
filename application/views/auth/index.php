<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Users List</h1>
  <div id="infoMessage"><?php echo $message;?></div>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?php echo base_url('auth/create_user') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th><?php echo lang('index_fname_th');?></th>
              <th><?php echo lang('index_lname_th');?></th>
              <th><?php echo lang('index_email_th');?></th>
              <th><?php echo lang('index_status_th');?></th>
              <th><?php echo lang('index_action_th');?></th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($users as $user):?>
            <tr>
              <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
              <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
              <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
              <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
              <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
            </tr>
          <?php endforeach;?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>