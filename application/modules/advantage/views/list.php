<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Agenda List</h1>
    
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url('advantage/add') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Judul</th>
                <th>Image</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($advantage as $advantage): ?>
            <tr>
                <td width="150">
                    <?php echo $advantage->title ?>
                </td>
                <td>
                <img src="<?php echo base_url('upload/advantage/'.$advantage->image) ?>" width="64"/>
                </td>
                <td>
                    <?php echo $advantage->description ?>
                </td>
                <td width="250">
                <a href="<?php echo base_url('advantage/edit/'.$advantage->id) ?>"
                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo base_url('advantage/delete/'.$advantage->id) ?>')"
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