<?php 
if(!isset($_SESSION["login_id"]))
{
    echo "<script>
    window.location='login';
    </script>";
}
?>
<center>
<div class="container-fluid p-5 mt-2 ms-5">
    <div class="row"> 
     <div class="col-md-6 shadow ms-5 p-5">   
    <h2 class="text-center">Change Your Password</h2>
    <form method="post" enctype="multipart/form-data">
    
     <div class="form-group mt-3">
        <input type="password" name="opass"  placeholder="Enter old password" required class="form-control" required> 
        </div>   
        
     <div class="form-group mt-3">
        <input type="password" name="npass"  placeholder="Enter new password" required class="form-control" required> 
        </div>   

        <div class="form-group mt-3">
        <input type="password" name="cpass"  placeholder="Enter confirm password" required class="form-control" required> 
        </div>   

     <div class="form-group mt-3">
        <input type="submit"  name="changepass" value="Submit" class="btn btn-lg btn-info"> 
     
        </div>   

</div>

</form>
</div>    
</div>      

</div>      

</center>
