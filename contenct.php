<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
    $mail->Password   = 'ugyvyekdqfsaaeor';                               //SMTP password
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
    window.location='auto portal.php';
    
    </script>";
}

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
}

?>








<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- bootstrap css file -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
 <link rel="stylesheet" href="auto portal.css">
 <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <!-- bootstrap js file -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
   integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
   crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
   integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
   crossorigin="anonymous"></script>

     <style>
/* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #c8e8e9;

  align-items: center;
  justify-content: center;
}
.navbar {
      height: 100%;
      width: auto;
      background-color: antiquewhite;
    }

    .dropdown {
      text-decoration: none;
      list-style-type: none;
      margin-left: 100px;
    }

.container{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}



@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
 .container{
  margin-left: 5%;
 }
}


@media only screen and (min-width:320px) and (max-width:480px) {
      body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
      }

.address{
  margin-top: 25%;
}

.button{
  margin-left: 10%;
}
    }
     </style>
   </head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="auto portal.php">AUTOPORTAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active ms-5" aria-current="page" href="auto portal.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-5" href="contenct.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-5 aria-current="page" href="about us.php">About Us</a>
          </li>
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
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

        </form>
      </div>
    </div>
  </nav>

<br><br>

<!-- address etc.. -->

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">

<div class="address">


          <i class="bi bi-geo-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Jalaram chowk</div>
          <div class="text-two">Gaytri nagar main road , rajkot</div>
        </div>
        <div class="phone details">
          <i class="bi bi-telephone"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+(91)96874-31212</div>

                  </div>
        <div class="email details">
          <i class="bi bi-inbox"></i>
          <div class="topic">Email</div>
          <div class="text-one">hitenvora5666@gmail.com</div>
                  </div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="#" method="post">
        <div class="input-box">
          <input type="text" name="Name" placeholder="Enter your name" required>
        </div>
        <div class="input-box"> 
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
       <div class="input-box">     
            <textarea class="form-control is-invalid" name="MSG" id="validationTextarea" placeholder="Enter your Message" required></textarea>
            <br><br>
            <div class="button">

              <button type="submit" name="btn1" class="btn btn-outline-success">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
              <button type="reset" class="btn btn-outline-danger">Reset</button>
            </div>
      </form>
    </div>
    </div>
  </div>  

  <!-- singing form --> 
 
  <div class="modal fade" id="reg" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
    
    <section class="vh-200">
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm- text-black">

          <div class="d-flex align-items-center">
  
            <form>
  
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in Form</h3>
              
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1cg" class="form-control form-control-lg" required>
                <label class="form-label" for="form3Example1cg">Enter Email</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1cg" class="form-control form-control-lg" required>
                <label class="form-label" for="form3Example1cg">Enter Password</label>
              </div>
              
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
              </div>
              
              <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
              <p>Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#signup" class="link-info">Register here</a></p>
              
            </form>
            
          </div>
          
        </div>
      </div>
    </div>
  </section>
</div>  
    </div>
  </div>    
  
  <!-- signup form -->
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">

                
    <section class="vh-200">
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm- text-black">
              <h2 class="text-uppercase text-center">Create an account</h2>

              <form>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" required>
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" required>
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" required>
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" required>
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg">
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#" data-bs-toggle="modal" data-bs-target="#reg"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      </div>
    </div>
    </div>
</body>
</html>
