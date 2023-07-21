<script>
// jquery bvalidator validation
$(document).ready(function(){
  $("#frm1").bValidator();
})
</script>

<!-- tiny text -->



<main id="main" class="main">
<div class="pagetitle">
  <h1>Admin Add Model</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
      <li class="breadcrumb-item">Add model</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-9">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add model</h5>

          <!-- Horizontal Form -->
          <form method="post" id="frm1" enctype="multipart/form-data">
          <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Select Brand Category*</label>
              <div class="col-sm-9">
                <select  class="form-control" name="Modelcategory" id="inputText" data-bvalidator="required">
                 <option value="">-select Category-</option>
                 <?php
                 foreach($shwbrnad as  $shwModel1)
                 { 
                 ?>
                 <option value="<?php echo $shwModel1["car_id"];?>"><?php echo $shwModel1["car_name"];?></option>
                 <?php 
                 }
                 ?>
               </select> 
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Model Name *</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="cname" id="inputText" data-bvalidator="required,alpha">
              </div>
            </div>

            <div class="text-center">
              <button type="submit" name="addmodel" class="btn btn-primary">Add Model</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>


    </div>


</section>

</main><!-- End #main -->

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>