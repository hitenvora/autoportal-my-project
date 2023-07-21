

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
                <th scope="col">Firstname</th>
                <th scope="col">Email</th>
                
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($shwcontact as $row)
              {
              ?>
              <tr>
                <td><?php echo $row["login_id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                
             
                <td colspan="2">
                <div style="width:85px">    
                <a href="<?php echo $mainurl;?>admin-managecustomer?userid=<?php echo $row["login_id"];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a> 
            
              </div>
            </td>
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
