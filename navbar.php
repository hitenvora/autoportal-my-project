<style>
    /* Google Font CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
</style>
  

<!-- navbar start -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo $mainurl;?>">AUTOPORTAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active ms-5" aria-current="page" href="<?php echo $mainurl;?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-5" href="<?php echo $mainurl;?>contect-us">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-5" aria-current="page" href="<?php echo $mainurl;?>about-us">About Us</a>
          </li>
          
        
<?php
if(!isset($_SESSION["login_id"]))
{
?> 
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reg">signing!</a></li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#signup">signup!</a></li>


            </ul>
          </li>
        </ul> 
        <?php
        }
        else{
          ?>
        <li class="nav-item dropdown">
                <a class="nav-link text-success dropdown-toggle" data-bs-toggle="dropdown" href="#">Welcome To :
                  <?php echo ucfirst($_SESSION["name"]);?></a>

        <ul class="dropdown-menu p-4" style="width:250px">
        <li><a href="<?php echo $mainurl;?>manage-profile">Manage Profile</a></li>
        <li><a href="<?php echo $mainurl;?>manage-notifications">Manage Notifications</a></li>
        <li><a href="<?php echo $mainurl;?>mange-car">Manage Car</a></li>
        <li><a href="<?php echo $mainurl;?>change-password">Change Password</a></li>
        <li><a href="<?php echo $mainurl;?>manage-profile?deldata=<?php echo $shwlist[0]["login_id"];?>"onclick="return confirm('Are you sure to remove Your account ?')">Delete Account</a></li>
        <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger">Logout!</a></li>
        
               </ul>
                      
              
              
               </li>

               <form class="d-flex">
          <input class="form-control me-5 " type="search" placeholder="Search" aria-label="Search" style="margin-left: 200px;">

        </form>
             
              <?php 
               }
              ?> 

            

       
      </div>
    </div>
  </nav>

</body>
</html>
