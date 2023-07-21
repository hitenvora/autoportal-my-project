

<main id="main" class="main">

<div class="pagetitle">
  <h1>Manage All Customers </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
      <li class="breadcrumb-item active">Manage All Customers</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body" style="overflow:auto">
          <!-- Table with stripped rows -->
          <table class="table datatable" style="overflow:auto">
            <thead>
              <tr>
                <th scope="col">#Id</th>
                <th scope="col">carname</th>
                <th scope="col">modelname</th>
                <th scope="col">city</th>
                <!-- <th scope="col">login user</th> -->
                <th scope="col">year</th>
                <th scope="col">Fual</th>
                <th scope="col">transmission</th>
                <th scope="col">km driven</th>
                <th scope="col">owner no</th>
                <th scope="col">descrption</th>
                <th scope="col">Amout</th>
                <th scope="col">image</th>
                <th scope="col">mobile</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($prof as $row)
              {
              ?>
              <tr>
                <td><?php echo $row["showcar_id"];?></td>
                <td><?php echo $row["car_name"];?></td>
                <td><?php echo $row["model_name"];?></td>
                <td><?php echo $row["city_name"];?></td>
                <!-- <td><?php echo $row["login_name"];?></td> -->
                <td><?php echo $row["year"];?></td>
                <td><?php echo $row["fual"];?></td>
                <td><?php echo $row["Transmission"];?></td>
                <td><?php echo $row["km_driven"];?></td>
                <td><?php echo $row["owner_no"];?></td>
                <td><?php echo $row["descrption"];?></td>
                <td><?php echo $row["price"];?></td>
                <td><img src="../<?php echo $row["images"];?>" style="height:85px; width:85px;"></td>
                <td><?php echo $row["mobile_no"];?></td>
                
             
                 
                <td><a href="<?php echo $mainurl;?>admin-managecustomer?showid=<?php echo $row["showcar_id"];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>|<br><br> <a href="<?php echo $mainurl;?>admin-updatecar?updcar=<?php echo $row["showcar_id"];?>" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a></td> 
            
            
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
