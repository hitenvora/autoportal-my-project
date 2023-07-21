<?php

?>



<center>
<div class="col-md-6 shadow  p-5">   
    <h2 class="text-center">Manage your Profile</h2>
    <form method="post" enctype="multipart/form-data">
    <div class="form-group mt-3">
      <img src="<?php echo $shwcar[0]["images"];?>" class="img-fluid" style="width:200px; height:100px;">
      <br>
      <input type="file" name="img" value="<?php echo $shwcar[0]["images"];?>" > 
        </div>      
     
     <div class="form-group mt-3">

                <select  class="form-control" name="carcetegory" id="inputText" data-bvalidator="required">

                 <?php
                 foreach($shwcarnam as  $shwca1)
                 { 
                   if($prof[0]["car_id"]==$shwca1["car_id"])
                   {
                 ?>
                 <option value="<?php echo  $prof[0]["car_id"];?>"selected='selected'><?php echo $prof[0]["car_name"];?></option>
                 <?php 
                 }
                 else
                 {
                  ?>
                  <option value="<?php echo $shwca1["car_id"];?>"><?php echo $shwca1["car_name"];?></option>
                  <?php
                 }
                }
                 ?>
               </select> 
              </div>

              
              <div class="form-group mt-3">

<select hidden  class="form-control" name="carcetegory" id="inputText" data-bvalidator="required">

 <?php
 foreach($user as  $user1)
 { 
   if($logindetails[0]["login_id"]==$user1["login_id"])
   {
 ?>
 <option value="<?php echo  $logindetails[0]["login_id"];?>"selected='selected'><?php echo $logindetails[0]["name"];?></option>
 <?php 
 }
 else
 {
  ?>
  <option value="<?php echo $user1["login_id"];?>"><?php echo $user1["login_name"];?></option>
  <?php
 }
}
 ?>
</select> 
</div>

 
              <div class="form-group mt-3">

<select  class="form-control" name="modelcetegory" id="inputText" data-bvalidator="required">

 <?php
 foreach($model as  $shwmo1)
 { 
   if($prof[0]["model_id"]==$shwmo1["model_id"])
   {
 ?>
 <option value="<?php echo  $prof[0]["model_id"];?>"selected='selected'><?php echo $prof[0]["model_name"];?></option>
 <?php 
 }
 else
 {
  ?>
  <option value="<?php echo $shwmo1["model_id"];?>"><?php echo $shwmo1["model_name"];?></option>
  <?php
 }
}
 ?>
</select> 
</div>
    
 
<div class="form-group mt-3">

<select  class="form-control" name="citycetegory" id="inputText" data-bvalidator="required">

 <?php
 foreach($shwcity as  $shwcity1)
 { 
   if($prof[0]["city_id"]==$shwcity1["city_id"])
   {
 ?>
 <option value="<?php echo  $prof[0]["city_id"];?>"selected='selected'><?php echo $prof[0]["city_name"];?></option>
 <?php 
 }
 else
 {
  ?>
  <option value="<?php echo $shwcity1["city_id"];?>"><?php echo $shwcity1["city_name"];?></option>
  <?php
 }
}
 ?>
</select> 





</div>
        <div class="form-group mt-3">
        <input type="month" name="year" value="<?php echo $shwcar[0]["year"];?>" placeholder="Enter year" required class="form-control" required> 
        </div> 
            <div class="form-group mt-3">
        <input type="text" name="fual" value="<?php echo $shwcar[0]["fual"];?>" placeholder="Enter fual" required class="form-control" required> 
        </div> 
            <div class="form-group mt-3">
        <input type="text" name="tra" value="<?php echo $shwcar[0]["Transmission"];?>" placeholder="Enter Transmission" required class="form-control" required> 
        </div>
             <div class="form-group mt-3">
        <input type="number" name="kmdrving" value="<?php echo $shwcar[0]["km_driven"];?>" placeholder="Enter kmdriven" required class="form-control" required> 
        </div>
             <div class="form-group mt-3">
        <input type="text" name="ownernum" value="<?php echo $shwcar[0]["owner_no"];?>" placeholder="Enter owner" required class="form-control" required> 
        </div> 
            <div class="form-group mt-3">
            <input type="text" name="des" value="<?php echo $shwcar[0]["descrption"];?>" placeholder="Enter descrption" required class="form-control" required> 
        </div>
             <div class="form-group mt-3">
        <input type="number" name="price" value="<?php echo $shwcar[0]["price"];?>" placeholder="Enter price" required class="form-control" required> 
        </div>      
       
        
             <div class="form-group mt-3">
        <input type="number" name="mobile" value="<?php echo $shwcar[0]["mobile_no"];?>" placeholder="Enter mobile" required class="form-control" required> 
        </div>         
     
     <div class="form-group mt-3">
        <input type="submit"  name="userupdcar" value="Update car profile" class="btn btn-lg btn-info"> 
     
        </div>   


        <div class="form-group mt-3">
        <li><a href="<?php echo $mainurl;?>manage-car?usercardelete=<?php echo $shwcar[0]["showcar_id"];?>"onclick="return confirm('Are you sure to remove Your car ?')">Delete car</a></li>
     
        </div>   

</div>

</form>
</div> 
    </center>