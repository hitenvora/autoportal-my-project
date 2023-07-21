

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
                <th scope="col">cityname</th>
            
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($shwcity as $row)
              {
              ?>
              <tr>
                <td><?php echo $row["city_id"];?></td>
                <td><?php echo $row["city_name"];?></td>

             
                <td><a href="<?php echo $mainurl;?>admin-managecategory?citydelete=<?php echo $row["city_id"];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a> | <a href="<?php echo $mainurl;?>admin-updatecity?cupd=<?php echo $row["city_id"];?>" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a></td>
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
