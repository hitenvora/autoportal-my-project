

<main id="main" class="main">

<div class="pagetitle">
  <h1>Manage All Category</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
      <li class="breadcrumb-item active">Manage All category data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
         

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#Id</th>
                <th scope="col">Carbrand</th>
                <th scope="col">Carmodel</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($modlejoin as $row)
              {
              ?>
              <tr>
                <td><?php echo $row["model_id"];?></td>
                <td><?php echo $row["car_name"];?></td>
                <td><?php echo $row["model_name"];?></td>
                
                <td><a href="<?php echo $mainurl;?>admin-managemodel?modeldelete=<?php echo $row["model_id"];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a> | <a href="<?php echo $mainurl;?>admin-updatemodel?updmodel=<?php echo $row["model_id"];?>" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a></td>
              </tr>
              <?php 
              }
              ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
