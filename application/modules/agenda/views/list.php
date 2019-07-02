<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Agenda List</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo site_url('agenda/add') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Judul</th>
                <th>Waktu</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($agenda as $p): ?>
            <tr>
                <td width="150">
                <?php echo $p->title ?>
                </td>
                <td>
                reserved date
                </td>
                <td>
                <?php echo $p->category ?>
                </td>
                <td>
                <?php echo $p->venue ?>
                </td>
                <td width="250">
                <a href="<?php echo site_url('agenda/edit/'.$p->id) ?>"
                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo site_url('agenda/delete/'.$p->id) ?>')"
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