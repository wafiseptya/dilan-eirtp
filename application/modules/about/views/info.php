<div class="container-fluid">

  <h1 class="h3 mb-2 text-gray-800">Artikel List</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?php echo base_url('about/edit/'.$about->id) ?>"><i class="fas fa-plus"></i> Edit</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">          
            <tbody>
            <tr>
              <th>Content</th>
            </tr>
            <tr>
              <td>
                <?php echo $about->content ?>
              </td>
            </tr>
            <tr>
              <th>Image</th>
              
            </tr>
            <tr>
              <td>
                <img src="<?php echo base_url('upload/about/'.$about->image) ?>" width="256" />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>