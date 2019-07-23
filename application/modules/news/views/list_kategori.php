<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">List Kategori Artikel</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?php echo base_url('news/kategori/add') ?>"><i class="fas fa-plus"></i> Tambah Kategori</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($category as $row): ?>
            <tr>
              <td width="150">
                <?php echo $row->title ?>
              </td>
              <td>
                <?php echo $row->description ?></td>
              <td width="250">
                <a href="<?php echo base_url('news/kategori/edit/'.$row->id) ?>"
                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo base_url('news/kategori/delete/'.$row->id) ?>')"
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