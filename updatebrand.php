<script>
// jquery bvalidator validation
$(document).ready(function(){
  $("#frm1").bValidator();
})
</script>

<!-- tiny text -->



<main id="main" class="main">
<div class="pagetitle">
  <h1>Admin Add Brand</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
      <li class="breadcrumb-item">Add Brands</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-9">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Brands</h5>

          <!-- Horizontal Form -->
          <form method="post" id="frm1" enctype="multipart/form-data">
                 <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">brand name *</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value=<?php echo $brandupdate[0]["car_name"];?> name="updbrand" id="inputText" data-bvalidator="required,alpha">
              </div>
            </div>

              
            </div>

        
            

        
            </div>
       
 
            <div class="text-center">
              <button type="submit" name="brdupd" class="btn btn-primary">SUBMIT</button>
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












