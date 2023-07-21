<script>
// jquery bvalidator validation
$(document).ready(function(){
  $("#frm1").bValidator();
})
</script>

<!-- tiny text -->



<main id="main" class="main">
<div class="pagetitle">
  <h1>Admin Add Course</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
      <li class="breadcrumb-item">Add Courses</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-9">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Courses</h5>

          <!-- Horizontal Form -->
          <form method="post" id="frm1" enctype="multipart/form-data">
          <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Select Course Category*</label>
              <div class="col-sm-9">
                <select  class="form-control" name="carcetegory" id="inputText" data-bvalidator="required">
                 <!-- <option value="">-select Category-</option> -->
                 <?php
                 foreach($shwbrnad as  $shw1)
                 { 
                   if($brandupdate[0]["car_id"]==$shw1["car_id"])
                   {
                 ?>
                 <option value="<?php echo $brandupdate[0]["car_id"];?>"selected='selected'><?php echo $carupdate[0]["car_name"];?></option>
                 <?php 
                 }
                 else
                 {
                  ?>
                  <option value="<?php echo $shw1["car_id"];?>"><?php echo $shw1["car_name"];?></option>
                  <?php
                 }
                }
                 ?>
               </select> 
              </div>
              
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Select Course Category*</label>
              <div class="col-sm-9">
                <select  class="form-control" name="modelcetegory" id="inputText" data-bvalidator="required">
                 <!-- <option value="">-select Category-</option> -->
                 <?php
                 foreach($shwmodel as  $shwmodel1)
                 { 
                   if($modelupdate[0]["model_id"]==$shwmodel1["model_id"])
                   {
                 ?>
                 <option value="<?php echo $modelupdate[0]["model_id"];?>"selected='selected'><?php echo $modelupdate[0]["model_name"];?></option>
                 <?php 
                 }
                 else
                 {
                  ?>
                  <option value="<?php echo  $shwmodel1["model_id"];?>"><?php echo  $shwmodel1["model_name"];?></option>
                  <?php
                 }
                }
                 ?>
               </select> 
              </div>
            </div>



            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Select Course Category*</label>
              <div class="col-sm-9">
                <select  class="form-control" name="citycetegory" id="inputText" data-bvalidator="required">
                 <!-- <option value="">-select Category-</option> -->
                 <?php
                 foreach($shwcity as  $shwmodel1)
                 { 
                   if($carupdate[0]["city_id"]==$shwmodel1["city_id"])
                   {
                 ?>
                 <option value="<?php echo $carupdate[0]["city_id"];?>"selected='selected'><?php echo $carupdate[0]["city_name"];?></option>
                 <?php 
                 }
                 else
                 {
                  ?>
                  <option value="<?php echo  $shwmodel1["city_id"];?>"><?php echo  $shwmodel1["city_name"];?></option>
                  <?php
                 }
                }
                 ?>
               </select> 
              </div>
              
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Course Name *</label>
              <div class="col-sm-9">
              <input type="radio" class="btn-check1" name="selector" id="success-outlined" autocomplete="off"  required value="PETROL">
        
                          <label class="btn btn-outline-success" for="success-outlined">PETROL</label>
                          
                          <input type="radio" class="btn-check2" name="selector" id="primary-outlined" autocomplete="off" required value="DIESEL">
                          <label class="btn btn-outline-primary" for="primary-outlined">DIESEL</label>
                          
                          <input type="radio" class="btn-check3" name="selector" id="secondary-outlined" autocomplete="off" value="CNG" required>
<label class="btn btn-outline-secondary" for="secondary-outlined">CNG</label>

<input type="radio" class="btn-check4" name="selector" id="info-outlined" autocomplete="off" value="LPG"  required>
<label class="btn btn-outline-info" for="info-outlined">LPG</label>

<input type="radio" class="btn-check5" name="selector" id="dark-outlined" autocomplete="off" value="ELECTRIC" required>
<label class="btn btn-outline-dark" for="dark-outlined">ELECTRIC</label>
              
              </div>
            </div>

            </div>

            

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Course Image *</label>
              <div class="col-sm-9">
                
              
              <chekbox >
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="trasmission" value="AUTOMATIC" required>
                            <label>
                              AUTOMATIC
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="trasmission" value="MANUAL" required>
                              MANUAL
                            </label>
                          </div>
              </div>
            </div>
       
                
         


            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Km drvien *</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value=<?php echo $carupdate[0]["km_driven"];?> name="kmdriven" id="inputText" data-bvalidator="required,alpha">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">owners  *</label>
              <div class="col-sm-9">
              <div class="form1">
                            <input class="form-check-input" type="radio" name="owners"  value="1st" required>
                            <label>
                              1st
                            </label>
                          </div>
                          <div class="form2">
                            <input class="form-check-input" type="radio" name="owners" value="2st" required>
                            <label>
                              2st
                            </label>
                          </div>
                          <div class="form3">
                            <input class="form-check-input" type="radio" name="owners" value="3st" required>
                            <label>
                              3st
                            </label>
                          </div>
                          <div class="form4">
                            <input class="form-check-input" type="radio" name="owners" value="4st" required>
                            <label>
                              4st
                            </label>
                          </div>
              </div>

            </div>

          

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Year *</label>
              <div class="col-sm-9">
                <input type="month" class="form-control" value=<?php echo $carupdate[0]["year"];?> name="year" id="inputText" data-bvalidator="required,alpha">
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Descrption *</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value=<?php echo $carupdate[0]["descrption"];?> name="descrption" id="inputText" data-bvalidator="required,alpha">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Price *</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value=<?php echo $carupdate[0]["price"];?> name="price" id="inputText" data-bvalidator="required,alpha">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Image *</label>
              <div class="col-sm-9">
                <img src="value=<?php echo $carupdate[0]["images"];?>" name="img" id="inputText" data-bvalidator="required,alpha">
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Mobile No. *</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value=<?php echo $carupdate[0]["mobile_no"];?> name="mob" id="inputText" data-bvalidator="required,alpha">
              </div>
            </div>


       
           
            <div class="text-center">
              <button type="submit" name="carupd" class="btn btn-primary">Add Course</button>
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












