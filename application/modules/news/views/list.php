<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Artikel List</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?php echo base_url('news/add') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Banner</th>
              <th>Konten</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($news as $p): ?>
            <tr>
              <td>
                <?php echo $p->title ?>
              </td>
              <td>
                <?php echo $p->cat_title ?>
              </td>
              <td>
                <img src="<?php echo base_url('upload/news/'.$p->banner) ?>" width="64" />
              </td>
              <td class="small">
                <?php echo substr($p->content, 0, 120) ?></td>
              <td>
                <a href="<?php echo base_url('news/edit/'.$p->id) ?>"
                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo base_url('news/delete/'.$p->id) ?>')"
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