<div class="container-fluid">

  <h1 class="h3 mb-2 text-gray-800">Artikel List</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?php echo base_url('footer/edit/'.$footer->id) ?>"><i class="fas fa-plus"></i> Edit</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">          
            <tbody>
            <tr>
              <th>Address</th>
              <td>
                <?php echo $footer->address ?>
              </td>
            </tr>
            <tr>
              <th>Telp</th>
              <td>
                <?php echo $footer->telp ?>
              </td>
            </tr>
            <tr>
              <th>Fax</th>
              <td>
                <?php echo $footer->fax ?>
              </td>
            </tr>
            <tr>
              <th>Whatsapp</th>
              <td>
                <?php echo $footer->whatsapp ?>
              </td>
            </tr>
            <tr>
              <th>Email</th>
              <td>
                <?php echo $footer->email ?>
              </td>
            </tr>
            <tr>
              <th>Location</th>
              <td>
                <?php echo $footer->location ?>
              </td>
            </tr>
            <tr>
              <th>Link App</th>
              <td>
                <?php echo $footer->apps ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>