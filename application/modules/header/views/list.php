<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Header List</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?php echo base_url('header/add') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Deskripsi</th>
              <th>Konten</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($header as $p): ?>
            <tr>
              <td width="150">
                <?php echo $p->description ?>
              </td>
              <td>
                <img src="<?php echo base_url('upload/header/'.$p->image) ?>" width="64" />
              </td>
              <td width="250">
                <a href="<?php echo base_url('header/edit/'.$p->id) ?>"
                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo base_url('header/delete/'.$p->id) ?>')"
                href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
              </td>
            </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>