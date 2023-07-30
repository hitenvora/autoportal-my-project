    <?php 
require_once("model/model.php");
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Controller extends Model
{
    public function __construct()
    {
        //logic : WAP to print your name take input from users
        parent:: __construct();


        // new user connection database
        if(isset($_POST["register"])) 
        {
            require_once("PHPMailer/PHPMailer.php");
            require_once("PHPMailer/SMTP.php");
            require_once("PHPMailer/Exception.php"); 
          $nm=$_POST["fnm"];
          $em=$_POST["em"];
          $mob=$_POST["mob"];
          $pass=$_POST["pass"];
          $cpass=$_POST["cpass"];


          try {

            $mail = new PHPMailer(true);
             //Server settings
             $mail->SMTPDebug =false;                      //Enable verbose debug output
             $mail->isSMTP();                                            //Send using SMTP
             $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
             $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
             $mail->Username   = 'hitenvora5666@gmail.com';                     //SMTP username
             $mail->Password   = 'atszrqsmbenrzbfr';                               //SMTP password
             $mail->SMTPSecure ="TLS";            //Enable implicit TLS encryption
             $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
             //Recipients
             $mail->setFrom('hitenvora5666@gmail.com', 'Mail sending');
             $mail->addAddress($_POST["em"], 'Thanks for Create Account with Us');     //Add a recipient
             //Content
             $mail->isHTML(true); //Set email format to HTML
             $mail->Subject = 'Thanks note to Create account with us!';
             $mail->Body="Autoportal started its journey in India in 2013. Co-founded by HITEN VORA  Rublevskyy, Autoportal has aligned its business towards making an easy hassle free process for all prospective Automobile buyers in India. After 3 years of working in this Industry, Autoportal has successfully expanded its operations in 22 cities with a tie-up with 650 dealerships of different brands. By the end of 2018, it plans to cover all the Tier 2 and 3 cities and it is working aggressively towards the same. Autoportal recently also won the Brand of the Year award 2016 as the most successful upcoming startup company in its segment. Owing to the absence of a well-organized and credible medium on Automobiles, this huge market offered Autoportal to solve this basic problem and provide first-hand information and assist all automobile car buyers in India at every stage of their buying cycle. In this short span, AutoPortal.com quickly shot to fame and has successfully managed to carve itself a niche space in the Indian automotive segment - receiving rave reviews from our readers as well as the auto industry, thanks to the dedicated efforts of our young and talented automotive enthusiasts and the trust that our readership has shown in us.".
             "<br>"."<img src='https://www.thestatesman.com/wp-content/uploads/2018/07/car-selling.jpg'>";

             $mail->send();
             
         }

         catch(Exception $e)
         {
             echo "Somthing went wrong";
         }
 

if(        
    $pass === $cpass)
    {

          $data=array("name"=>$nm,"email"=>$em,"mobile"=>$mob,"password"=>$pass,"confirm_password"=>$cpass);
          $chk=$this->insertalladata($data,'login_details');
          if($chk)
          {
              echo "<script>
              alert('Thanks for adding students data')
              window.location='./';
              </script>";
          }
        }else{
            
             echo "<script>
            alert('The password and confirm password are not match')
            window.location='./';
            </script>";

        }
        }


  // sell car insert database
  if(isset($_POST["sub"])) 
  {
    $bd=$_POST["brand"];
    $id=$_SESSION["login_id"];
    $md=$_POST["model"];
    $year=$_POST["year"];
    $op=$_POST["selector"];
    $fual=$_POST["fual"];
    $km=$_POST["kilomiter"];
    $abcd=$_POST["owners"];
    $des=$_POST["desc"];
    $pri=$_POST["price"];
    // $img=$_POST["img"];
    $tmp_name=$_FILES["img"]["tmp_name"];
    $path="images".$_FILES["img"]["name"];
    move_uploaded_file($tmp_name,$path);
    $city=$_POST["city"];
    $mob=$_POST["mobile"];


    $data=array("car_id"=>$bd,"model_id"=>$md,"login_id"=>$id,"year"=>$year,"fual"=>$op,"Transmission"=>$fual,"km_driven"=>$km,"	owner_no"=>$abcd,"descrption"=>$des,"price"=>$pri,"images"=>$path,"city_id"=>$city,"mobile_no"=>$mob);
    $chk=$this->insertalladata($data,'show_car');
    if($chk)
    {
        echo "<script>
        alert('Thanks for adding selling car')
        window.location='./';
        </script>";
    }
  }

//insert data for footer in database
  if(isset($_POST["subemail"])) 
  {
    $fotermail=$_POST["mail"];
    $data=array("email"=>$fotermail);
    $chk=$this->insertalladata($data,'footeremail');
    if($chk)
    {
        echo "<script>
        alert('Thanks for contect i will contect soon!')
        window.location='./';
        </script>";
    }
  }






   // delete a data
   if(isset($_GET["deldata"]))
   {
       $delid=$_GET["deldata"];
       $id=array("login_id"=>$delid);
       $chk=$this->deletedata('login_details',$id);
       if($chk)
       {
           unset($_SESSION["login_id"]);
           unset($_SESSION["email"]);
           unset($_SESSION["fnm"]);
           session_destroy();
           echo "<script>
           alert('Your profile removed successfully')
           window.location='./';
           </script>";

       }
   }

//delete a sellcar user
 if(isset($_GET["usercardelete"]))
 {
     $delcaruser=$_GET["usercardelete"];
     $id=array("showcar_id"=>$delcaruser);
     $chk=$this->deletedata('show_car',$id);
     if($chk)
     {
         echo "<script>
         alert('Your car removed successfully')
         window.location='./';
         </script>";

     }
 }






 // profile manage here
$id=$_SESSION["login_id"];
 $prof=$this->manageprofiledata('show_car','car_brand','car_model','city_name','show_car.car_id=car_brand.car_id','show_car.model_id=car_model.model_id','show_car.city_id=city_name.city_id','login_id',$id);

$logindetails=$this->joindata('login_details','show_car','login_details.login_id=show_car.login_id');

//  if(isset($_SESSION["login_id"]))
//  {
//  $id=$_SESSION["login_id"];  
//  $logindata=$this->logintabledata('login_details','show_car','login_details.login_id=show_Car.login_id','login_id',$id);
//  }


 $profcardata=$this->showsellcardata('show_car','car_brand','car_model','city_name','show_car.car_id=car_brand.car_id','show_car.model_id=car_model.model_id','show_car.city_id=city_name.city_id');




        // change password here
        if(isset($_POST["changepass"]))
        {
            $id=$_SESSION["login_id"];
            $opass=($_POST["opass"]);
            $npass=($_POST["npass"]);
            $cpass=($_POST["cpass"]);
            $chk=$this->changepassworddata('login_details',$opass,$npass,$cpass,'login_id',$id);
            if($chk)
            {
                unset($_SESSION["login_id"]);
                unset($_SESSION["email"]);
                unset($_SESSION["fnm"]);
                session_destroy();
                echo "<script>
                alert('Your password successfully changed')
                window.location='./';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('Your opass,npassword and confirmed password does not matched try again')
                window.location='change-password';
                </script>";
            }
        }

$showcar=$this->selectalldata('show_car');
$shwcarnam=$this->selectalldata('car_brand');
$shwcity=$this->selectalldata('city_name');
$user=$this->selectalldata('login_details');
$model=$this->selectalldata('car_model');
  //select course category of products 
  if(isset($_SESSION["login_id"])) 
  {
      $id=$_SESSION["login_id"];
      $shwlist=$this->loginselect('login_details','login_id',$id);

  }  

//mange car user
    $id=$_SESSION["login_id"];
    $shwcar=$this->loginselect('show_car','login_id',$id);


 // delete a data
 if(isset($_GET["deldata"]))
 {
     $delid=$_GET["deldata"];
     $id=array("login_id"=>$delid);
     $chk=$this->deletedata('login_details',$id);
     if($chk)
     {
         unset($_SESSION["login_id"]);
         unset($_SESSION["email"]);
         unset($_SESSION["name"]);
         session_destroy();
         echo "<script>
         alert('Your profile removed successfully')
         window.location='./';
         </script>";

     }
 }


  // login as member
  if(isset($_POST["log"]))
  {
      $em=$_POST["email"];
      $pass=$_POST["password"];
      $log=$this->userlogin('login_details',$em,$pass);
      if($log)
      {
          echo "<script>
          alert('You are Logged in Successfully')
          window.location='./';
          </script>";
      }
      else 
      {
          echo "<script>
          alert('You email and password are wrong')
          window.location='./';
          </script>";
      }
  }



//forget password
  if(isset($_POST["frg"]))
        {
            require_once("PHPMailer/PHPMailer.php");
            require_once("PHPMailer/SMTP.php");
            require_once("PHPMailer/Exception.php");   
            
            $em=$_POST["email"];

            $chk=$this->frgpassword('login_details','email',$em);
            if($chk)
            {
                echo "<script>
                alert('Your password is :'$chk')
                window.location='./';
                </script>";
            }

            else 
            {
                echo "<script>
                alert('Sorry this email does not exist try again')
                window.location='./';
                </script>";
            }


            try {

                ob_start();    
                // error_reporting(0);
               $mail = new PHPMailer(true);
                //Server settings
                $mail->SMTPDebug =false;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'hitenvora5666@gmail.com';                     //SMTP username
                $mail->Password   = 'atszrqsmbenrzbfr';                               //SMTP password
                $mail->SMTPSecure ="TLS";            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $mail->setFrom($_POST["email"], 'Mail sending');
                $mail->addAddress($_POST["email"], 'Forget Password');     //Add a recipient
               
                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = 'Contact with Us email sending data';
                $chk=$this->frgpassword('login_details','email',$em);
                $mail->Body="The password is :".$chk;
                $mail->send();

              if($chk)
                {
                  echo "<script>
                  alert('we will successfully send your password in your email please checked and logged in again!')
                  window.location='login';
                  </script>";
                }
                else 
                {
                    echo "<script>
                    alert('This email does not exist try with another registered email Id')
                    window.location='forget-password';
                    </script>";
                }
             
            } 
            catch(Exception $e) 
            {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

//contect us messge
if(isset($_POST["btn1"]))
{
    require_once("PHPMailer/PHPMailer.php");
    require_once("PHPMailer/SMTP.php");
require_once("PHPMailer/Exception.php");


    $nm=$_POST["Name"];
    $em=$_POST["email"];
    $pn=$_POST["MSG"];
    $mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug =false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hitenvora5666@gmail.com';                     //SMTP username
    $mail->Password   = 'atszrqsmbenrzbfr';                               //SMTP password
    $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST["email"],'mail sending');
    $mail->addAddress('hitenvora5666@gmail.com', 'contanct us mail sending');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'contact with us email sending data';
    $mail->Body    =  "<p> costmer name is</p>" .$nm."<br>". "<p> costmer email is</p>" .$em."<br>". "<p> costmer message is</p>" .$pn."<br>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  
    echo "<script>

      alert('Thanks for contact with us')
      window.location = './';

    </script>";
}

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
}



//footer email message
if(isset($_POST["subemail"]))
{
    require_once("PHPMailer/PHPMailer.php");
    require_once("PHPMailer/SMTP.php");
require_once("PHPMailer/Exception.php");


    $footermail=$_POST["mail"];
 
    $mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug =false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hitenvora5666@gmail.com';                     //SMTP username
    $mail->Password   = 'atszrqsmbenrzbfr';                               //SMTP password
    $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST["mail"],'mail sending');
    $mail->addAddress('hitenvora5666@gmail.com', 'contanct us mail sending');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'contact with us email sending data';
    $mail->Body    =  "<p> costmer name is</p>" .$nm."<br>". "<p> costmer email is</p>" .$em."<br>". "<p> costmer message is</p>" .$pn."<br>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  
    echo "<script>

      alert('Thanks for contact with us')
      window.location = './';

    </script>";
}

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
}





// update data 
if(isset($_POST["upd"]))
{
    $id=$_SESSION["login_id"];
    $name=$_POST["name"];
    $em=$_POST["email"];
    $mob=$_POST["num"];
    $chk=$this->updatedata('login_details',$name,$em,$mob,'login_id',$id);
    if($chk)
    {
        echo "<script>
        alert('Your profile updated successfully')
        window.location='manage-profile';
        </script>";
    }
}


// update data 
if(isset($_POST["userupdcar"]))
{
    $id=$_SESSION["login_id"];

    $car=$_POST["carcetegory"];
    $model=$_POST["modelcetegory"];
    $city=$_POST["citycetegory"];
    $year=$_POST["year"];
    $fual=$_POST["fual"];
    $transmission=$_POST["tra"];
    $kmdriven=$_POST["kmdrving"];
    $owner=$_POST["ownernum"];
    $desc=$_POST["des"];
    $price=$_POST["price"];
    // $images=$_POST["img"];
    $tmp_name=$_FILES["img"]["tmp_name"];
    $images="images".$_FILES["img"]["name"];
    move_uploaded_file($tmp_name,$images);
    $mobile=$_POST["mobile"];
    $chk=$this->sellcarusereditdata('show_car',$car,$model,$city,$year,$fual,$transmission,$kmdriven,$owner,$desc,$price,$images,$mobile,'login_id',$id);
    if($chk)
    {
        echo "<script>
        alert('Your profile updated successfully')
        window.location='mange-car';
        </script>";
    }
}








  // logout as a users
  if(isset($_GET["logout-here"]))
  {
      $log=$this->logout();
      if($log)
      {
          echo "<script>
          alert('You are Logout Successfully')
          window.location='./';
          </script>";
      }

  }




        if($_SERVER["PATH_INFO"])
        {
            switch($_SERVER["PATH_INFO"])
            {
              case '/':
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("singing.php");
                    require_once("singup.php");
                    require_once("forgetpassword.php");

                    break;

                    case '/about-us':
                      require_once("index.php");
                      require_once("header.php");
                      require_once("navbar.php");
                      require_once("about us.php");
                    require_once("footer.php");
                      require_once("singing.php");
                      require_once("singup.php");
                    require_once("forgetpassword.php");

                      break;

                      case '/contect-us':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("contenct.php");
                    require_once("footer.php");
                        require_once("singing.php");
                        require_once("singup.php");
                    require_once("forgetpassword.php");

                        break;

                        case '/manage-profile':
                          require_once("index.php");
                          require_once("header.php");
                          require_once("navbar.php");
                          require_once("manageprofile.php");
                    require_once("forgetpassword.php");

                          break;


                          case '/showcar':
                            require_once("index.php");
                            require_once("header.php");
                            require_once("navbar.php");
                            require_once("showcar.php");
                            require_once("singing.php");
                            require_once("singup.php");
                      require_once("forgetpassword.php");
  
                            break;

                          case '/change-password':
                            require_once("index.php");
                            require_once("header.php");
                            require_once("navbar.php");
                            require_once("changepassword.php");
                            require_once("singing.php");
                            require_once("singup.php");
                    require_once("forgetpassword.php");

                            break;
  

                            case '/mange-car':
                                require_once("index.php");
                                require_once("header.php");
                                require_once("navbar.php");
                                require_once("mangesellcar.php");
                              
                          require_once("forgetpassword.php");
      
                                break;

                        case '/sellcar':
                          require_once("index.php");
                          require_once("header.php");
                          require_once("navbar.php");
                          require_once("sell your car.php");
                          require_once("singing.php");
                          require_once("singup.php");
                    require_once("forgetpassword.php");

                          
                          break;


                default :
                  
                require_once("index.php");
                require_once("header.php");
                // require_once("404.php");
                // require_once("footer.php");    
            }
        }
        
    }
}
$obj=new Controller;  

?>