<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">FAQ List</h1>
    
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url('faq/add') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($faq as $row): ?>
            <tr>
                <td>
                    <?php echo $row->title ?>
                </td>
                <td class="small">
                  <?php echo substr($row->content, 0, 120) ?>
                </td>
                <td>
                  <a href="<?php echo base_url('faq/edit/'.$row->id) ?>"
                  class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                  <a onclick="deleteConfirm('<?php echo base_url('faq/delete/'.$row->id) ?>')"
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