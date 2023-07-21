    <?php 
    require_once("model/adminmodel.php");   
    error_reporting(0);      
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    class AdminController extends AdminModel
    {
        public function __construct()
        {
            //logic : WAP to print your name take input from users
            parent:: __construct(); 

            // show or manage all contacts in admin
            $shwcontact=$this->showalldata('login_details'); 
            $shwcity=$this->showalldata('city_name'); 
            $shwcar=$this->showalldata('show_car');
            $shwmodel=$this->showalldata('car_model');
            $shwbrnad=$this->showalldata('car_brand');
            $shwfual=$this->showalldata('fual');

            // count total contact in admin dashboard


            $totalcustomer=$this->countdata('login_details','login_id'); 
            // admin login here 
            if(isset($_POST["adminlogin"]))
            {
                $em=$_POST["email"];
                $pass=$_POST["password"];
                $log=$this->adminlogin('admin',$em,$pass);
                if($log)
                {
                    echo "<script>
                    alert('You are successfully Logged In!')
                    window.location='admin-dashboard';
                    </script>"; 
                } 
                else 
                {

                    echo "<script>
                    alert('Your email and password incorrect try again!')
                    window.location='./';
                    </script>"; 
                }
            }

            // add course list  in admin 
            if(isset($_POST["addcat"]))
            {
                $catnm=$_POST["brandname"];
           
                $data=array("car_name"=>$catnm);
                $chk=$this->insertalladata($data,'car_brand');
                if($chk)
                {
                    echo "<script>
                    alert('Your Course List  addedd successfully!')
                    window.location='admin-addbrand';
                    </script>"; 
                }
            }
 // add modellist  in admin 
 if(isset($_POST["addmodel"]))
 {
     $catnm=$_POST["Modelcategory"];
     $cname=$_POST["cname"];


     $data=array("car_id"=>$catnm,"model_name"=>$cname);
     $chk=$this->insertalladata($data,'car_model');
     if($chk)
     {
         echo "<script>
         alert('Your Course List  addedd successfully!')
         window.location='admin-addmodel';
         </script>"; 
     }
 }


 // delete a brand
 if(isset($_GET["branddelete"]))
 {
     $delid=$_GET["branddelete"];
     $id=array("car_id"=>$delid);
     $chk=$this->deletedata('car_brand',$id);
     if($chk)
     {
        
         echo "<script>
         alert('Your brand deleted successfully')
         window.location='admin-mangebrand';
         </script>";

     }
 }

  // delete a user
  if(isset($_GET["userid"]))
  {
      $delid=$_GET["userid"];
      $id=array("login_id"=>$delid);
      $chk=$this->deletedata('login_details',$id);
      if($chk)
      {
         
          echo "<script>
          alert('Your brand deleted successfully')
          window.location='admin-managecustomer';
          </script>";
 
      }
  }






  // delete a city
  if(isset($_GET["citydelete"]))
  {
      $delid=$_GET["citydelete"];
      $id=array("city_id"=>$delid);
      $chk=$this->deletedata('city_name',$id);
      if($chk)
      {
         
          echo "<script>
          alert('Your brand deleted successfully')
          window.location='admin-mangecity';
          </script>";
 
      }
  }
 


  // delete a model
  if(isset($_GET["modeldelete"]))
  {
      $delid=$_GET["modeldelete"];
      $id=array("model_id"=>$delid);
      $chk=$this->deletedata('car_model',$id);
      if($chk)
      {
         
          echo "<script>
          alert('Your brand deleted successfully')
          window.location='admin-mangemodel';
          </script>";
 
      }
  }



    // delete a showcar
    if(isset($_GET["showid"]))
    {
        $delid=$_GET["showid"];
        $id=array("showcar_id"=>$delid);
        $chk=$this->deletedata('show_car',$id);
        if($chk)
        {
           
            echo "<script>
            alert('Your brand deleted successfully')
            window.location='admin-showcar';
            </script>";
   
        }
    }

              // add city in admin list
              
              if(isset($_POST["addcity"]))
              {
                  $citynm=$_POST["citname"];
             
                  $data=array("city_name"=>$citynm);
                  $chk=$this->insertalladata($data,'city_name');
                  if($chk)
                  {
                      echo "<script>
                      alert('Your Course List  addedd successfully!')
                      window.location='admin-addcity';
                      </script>"; 
                  }
              }


//show for update
  //select course category of products 
//   if(isset($_SESSION["id"])) 
//   {
//       $id=$_SESSION["id"];
//       $shwupdate=$this->loginselect('show_car','showcar_id',$id);

//   }

//select brand show update

 
    $id=$_GET["upb"];
    $brandupdate=$this->loginselect('car_brand','car_id',$id);

    // select city show update
    $id=$_GET["cupd"];
    $cityupdate=$this->loginselect('city_name','city_id',$id);
  //select model show update

  $id=$_GET["updmodel"];
    $modelupdate=$this->loginselect('car_model','model_id',$id);

//select showcar show update
    $id=$_GET["updcar"];
    $carupdate=$this->loginselect('show_car','showcar_id',$id);


//select brand update 
if(isset($_POST["brdupd"]))
{
$id=$_GET["upb"];
$nm=$_POST["updbrand"];
$chk=$this->updatebrand('car_brand',$nm,'car_id',$id);
if($chk){
    echo "<script>
    alert('Your brand updated succesfully')
    window.location='admin-mangebrand';
    </script>";
}
}

  
//select city update 
if(isset($_POST["cityupd"]))
{
$id=$_GET["cupd"];
$cu=$_POST["updcity"];
$chk=$this->updatecity('city_name',$cu,'city_id',$id);
if($chk){
    echo "<script>
    alert('Your city updated succesfully')
    window.location='admin-mangecity';
    </script>";
}
}

//select model update 
if(isset($_POST["modelupd"]))
{
$id=$_GET["updmodel"];
$mu=$_POST["updmodels"];
$chk=$this->updatemodel('car_model',$mu,'model_id',$id);
if($chk){
    echo "<script>
    alert('Your brand updated succesfully')
    window.location='admin-mangemodel';
    </script>";
}
}


// update data
if(isset($_POST["carupd"]))
{
    $id=$_GET["updcar"];
    $carname=$_POST["carcetegory"];
    $model=$_POST["modelcetegory"];
    $city=$_POST["citycetegory"];
    $year=$_POST["year"];
    $fual=$_POST["selector"];
    $trasmission=$_POST["trasmission"];
    $kmdriven=$_POST["kmdriven"];
    $ownerno=$_POST["owners"];
    $description=$_POST["descrption"];
    $image=$_POST["img"];
    $amout=$_POST["price"];
    $mobile=$_POST["mob"];
    

$chk=$this->carshowupdatedata('show_car',$carname,$model,$city,$year,$fual,$trasmission,$kmdriven,$ownerno,$description,$image,$amout,$mobile,'showcar_id',$id);
if($chk)
{
    echo "<script>
    alert('Your profile updated successfully')
    window.location='admin-updatecar';
    </script>";
}

}


            $prof=$this->manageprofiledata('show_car','car_brand','car_model','city_name','show_car.car_id=car_brand.car_id','show_car.model_id=car_model.model_id','show_car.city_id=city_name.city_id');
            //manage all course list data  
           


$modlejoin=$this->modeljon('car_brand','car_model','car_brand.car_id=car_model.car_id');




            // manage all customers data
            // $prof=$this->manageprofilealldata('tbl_sirtask','tbl_sirtask1','state_name','city_name','tbl_sirtask.course_id=tbl_sirtask1.course_id','tbl_sirtask.state_id=state_name.state_id','tbl_sirtask.city_id=city_name.city_id');

    // $adjoin=$this->adminjoindata('course_list','course_cetegory','course_list.co_id=course_cetegory.co_id');

            // logout here
            if(isset($_GET["logout"]))
            {
                $lg=$this->logout();
                if($lg)
                {
                    echo "<script>
                    alert('Logout successfully!')
                    window.location='./';
                    </script>"; 
                }








            
            }
            // load templates routing 

            if($_SERVER["PATH_INFO"])
            {
                switch($_SERVER["PATH_INFO"])
                {
                    case '/':
                        require_once("index.php");
                        require_once("login.php");
                        break;
                    case '/admin-dashboard':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("dashboard.php");
                        require_once("footer.php");
                        break;
                        
            case '/admin-managecustomer':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("managecustomer.php");
                require_once("footer.php");
                break;

                               
            case '/admin-updatecar':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("updateshowcar.php");
                require_once("footer.php");
                break;

                case '/admin-updatemodel':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("updatemodel.php");
                    require_once("footer.php");
                    break;
    
    
                    
                case '/admin-updatebrand':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("updatebrand.php");
                    require_once("footer.php");
                    break;



                    
                    
                case '/admin-updatecity':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("updatecity.php");
                    require_once("footer.php");
                    break;

                case '/admin-showcar':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("mangeshowcar.php");
                        require_once("footer.php");
                        break;

            
                case '/admin-addbrand':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addbrand.php");
                    require_once("footer.php");
                    break;
        
                    
                case '/admin-addmodel':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addmodel.php");
                    require_once("footer.php");
                    break;
                case '/admin-addcity':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addcity.php");
                    require_once("footer.php");
                    break; 

            case '/admin-mangebrand':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("mangebrand.php");
                require_once("footer.php");
                break; 

                case '/admin-mangecity':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("mangecity.php");
                    require_once("footer.php");
                    break; 

                    
                case '/admin-mangemodel':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("mangemodel.php");
                    require_once("footer.php");
                    break; 


            case '/admin-managecontact':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("managecontacts.php");
            require_once("footer.php");
            break;
                    default :
                    require_once("index.php");
                    require_once("header.php");
                    // require_once("404.php");
                    require_once("footer.php");    
                }
            }
            

        }
    }
    $obj=new AdminController;

    ?>