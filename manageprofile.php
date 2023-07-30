<?php
if(!isset($_SESSION["login_id"]))
{
    echo "<script>
    window.location='login';
    </script>";
}



?>
<center>
<div class="col-md-6 shadow  p-5">   
    <h2 class="text-center">Manage your Profile</h2>
    <form method="post" enctype="multipart/form-data">
  
     
     <div class="form-group mt-3">
        <input type="text" name="name" value="<?php echo $shwlist[0]["name"];?>" placeholder="Enter name" required class="form-control" required> 
        </div>   


   <div class="form-group mt-3">
      <input type="email" name="email" value="<?php echo $shwlist[0]["email"];?>" placeholder="Enter email*" required class="form-control"> 
      </div> 
      <div class="form-group mt-3">
        <input type="number" name="num" value="<?php echo $shwlist[0]["mobile"];?>" placeholder="Enter mobile" required class="form-control" required> 
        </div>   
 
     <div class="form-group mt-3">
        <input type="submit"  name="upd" value="Update Profile" class="btn btn-lg btn-info"> 
     
        </div>   

</div>

</form>
</div> 
    </center>