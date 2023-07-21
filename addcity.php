<script>
// jquery bvalidator validation
$(document).ready(function(){
  $("#frm").bValidator();
})
</script>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Admin Add City</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">AddCity</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add City</h5>

              <!-- Horizontal Form -->
              <form method="post" id="frm">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">City Name *</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="citname" id="inputText" data-bvalidator="required,alpha">
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit" name="addcity" class="btn btn-primary">Add City</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>


        </div>

    
    </section>

  </main><!-- End #main -->