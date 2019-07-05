<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Mitra List</h1>
    
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url('mitra/add') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Nama Mitra</th>
                <th>Kategori</th>
                <th>Image</th>
                <th>Url</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($mitra as $m): ?>
            <tr>
                <td width="150">
                    <?php echo $m->name ?>
                </td>
                <td>
                    <?php echo $m->category ?>
                </td>
                <td>
                    <img src="<?php echo base_url('upload/mitra/'.$m->image) ?>" width="64"/>
                </td>
                <td>
                <?php echo $m->url ?>
                </td>
                <td width="250">
                <a href="<?php echo base_url('mitra/edit/'.$m->id) ?>"
                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo base_url('mitra/delete/'.$m->id) ?>')"
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