<div class="container-fluid">

  <h1 class="h3 mb-2 text-gray-800">Statistik</h1>
  
  <?php setlocale(LC_ALL, 'id_ID') ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5>Bagian Statistik</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="" width="100%" cellspacing="0">          
            <tbody>
            <tr>
              <th style="border:none">Peserta Pelatihan Penyuluhan</th>
              <td style="border:none">
                <?php echo $statistik[0]->value ?> UMKM
              </td>
              <td style="border:none">
                <a href="<?php echo base_url('statistik/edit/'.$statistik[0]->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
              </td>
            </tr>
            <tr>
              <th>Permohonan IRTP</th>
              <td>
                <?php echo $statistik[1]->value ?> UMKM
              </td>
              <td>
                <a href="<?php echo base_url('statistik/edit/'.$statistik[1]->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
              </td>
            </tr>
            <tr>
              <th>UMKM yang sudah tersertifikasi IRTP</th>
              <td>
                <?php echo $statistik[2]->value ?> UMKM
              </td>
              <td>
                <a href="<?php echo base_url('statistik/edit/'.$statistik[2]->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5>Jumlah Sertifikat P-IRT Diterbitkan</h5><a href="<?php echo base_url('statistik/addPIRT') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable2" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Bulan</th>
              <th>Jumlah</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($statistik_pirt as $stat): ?>
            <tr>
              <td>
                <?php echo substr_replace($stat->date ,"", -3) ?>
              </td>
              <td>
                <?php echo $stat->value ?>
              </td>
              <td width="250">
                <a href="<?php echo base_url('statistik/editPIRT/'.$stat->id) ?>"
                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo base_url('statistik/delete/'.$stat->id) ?>')"
                href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
              </td>
            </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5>Jumlah IRTP Diberikan Sertifikat</h5><a href="<?php echo base_url('statistik/addIRTP') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Bulan</th>
              <th>Jumlah</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($statistik_irtp as $irtp): ?>
            <tr>
              <td>
                <?php echo substr_replace($irtp->date ,"", -3) ?>
              </td>
              <td>
                <?php echo $irtp->value ?>
              </td>
              <td width="250">
                <a href="<?php echo base_url('statistik/editIRTP/'.$irtp->id) ?>"
                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo base_url('statistik/delete/'.$irtp->id) ?>')"
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