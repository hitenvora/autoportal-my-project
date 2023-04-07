
<?php

if(isset($_POST["btn"]))
{
    $mail=$_POST["email"];
    $pass=$_POST["pass"];
if($mail=="hiten@gmail.com" && $pass=="hiten123")
{
    $_SESSION["email"]=$_POST["email"];
    echo "<script>
    
    alert('You are login sucessfully')
    window.location='sell your car.php';
    
    </script>";
}
else {
    echo "<script>
    
    alert('Your email and password is wrong')
    window.location='auto portal.php';
    
    </script>";
    
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
    body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      background: url(https://media.istockphoto.com/id/1053485392/photo/car-dealership-young-man-receiving-car-key-from-saleswoman.jpg?s=612x612&w=0&k=20&c=jLrwDGuc8F3oyegNu5AH3ZIAsuevt2MzjijNvl9rxjA=);
      background-repeat: no-repeat;
      background-size: cover;
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

    .rows {
      display: flex;
      margin-top: 25px;
      margin-left: 20px;
    }

    .heading {
      text-align: center;
      margin-top: 10%;
      font-size: 80px;
      color: black;
    }

    .search {
      border: 1px solid black;
      height: 150px;
      width: 50%;
      margin-left: 25%;
      background-color: aliceblue;
    }

    .modealname {
      width: 100px;
      height: 100px;
      margin-left: 30%;
      margin-top: -6%;
    }

    .city {
      width: 20%;
      height: auto;
      float: right;
      margin-right: 30%;
      margin-top: -100px;
    }
    .footerimges{
      /* display: flex; */
      margin-left: 10%;
    }

    .btn {
      margin-left: 40%;
      size: 200px;
    }

    .mainsearchbar{

margin-left: 40px !important;
width: 100% !important;

    }
    .btn-sm {
      width: 20%;
      height: auto;
        font-size: 25px;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }

    .btn1 {
      border: 1px solid black;
      background-color: rgba(128, 128, 128, 0);
      font-size: 25px;
      float: right;
      margin-top: 25px;
      margin-right: 50px;
    }

    .btn1:hover  {
      background-color: red;
      color: white;
    }

    .str {
      width: 100%;
      height: auto;
      display: flex;
      flex-direction: row;
      gap: 10%;
      margin-top: -20%;
    }

    .stories1 {
      margin-left: 20%;
      border: 1px solid black;
      height: auto;
      width: 28%;
      padding: 20px;
      color: aqua;
      margin-top: 20%;
    }

    img {
      margin-top: -140%;
      margin-left: 40%;
      height: 20%;
      width: 20%;
    }

    .stories2 {
      float: right;
      border: 1px solid black;
      height: auto;
      width: 28%;
      padding: 20px;
      color: aqua;
      margin-top: 20%;
    }
    .copyright{
      color: white;
      text-align: center;
    }
.person1{
  margin-top: -50px !important;
}
  
    .paregraph {
      margin: 2%;
    }

    
    

    .footer img {
      margin-top: -1%;
      height: 70px;
      background-color: gray;
      width: 200px;
      margin-left: 50px;
    }

    .logo img {
      height: 80px;
      border-radius: 100px;
      background-color: gray;
      width: 100px;
    }

    .fot {
      height: 400px !important;
    }

    .footer p {
      color: #666666;
    }
    .person5{
      margin-top: -27px !important;
    }

    .navbar a {
      text-decoration: none;
      /* font-size: 150%;
      padding: 5px; */
    }
    .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}

    @media only screen and (min-width:320px) and (max-width:480px) {
      body {
        margin: 0;
        padding: 0;   
        overflow-x: hidden;
      }


      .heading {
        text-align: center;
        margin-top: 20% !important;
        font-size: 40px;
        color: black;
      }

      .search {
        border: 1px solid black;
        height: 220px !important;
        width: 65% !important;
        margin-left: 10px;
        background-color: aliceblue;
        margin-bottom: 0 !important;
        
      }

      .modealname {
        width: 100px;
        height: 100px;
        margin-left: 10px !important;
        margin-top: -50% !important;
      }


      .city {
        width: 20%;
        height: auto;
        /* margin-left: 50%; */
        margin-right: 77%;
        margin-top: -40px;
      }
      .lastimg{
        display: flex !important;
        margin: 20% !important;
        
      }
      .rows{
        /* margin-top: 50px !important; */
        /* margin: 50px !important; */
        display: block;
      }
.young{
  margin-top: -175px !important;
  height: 200px !important;
}

.person5{
  margin-top: -165px !important;
  height: 200px !important;
}
.paregraph{
  margin-top: 50px !important;
}

      .view-car {
                
        margin-right: 100px !important;
        margin-top: 15px;
      }
      .str {
      width: 100%;
      height: auto;
      display: block !important;
      flex-direction: row;
      gap: 10%;
      margin-top: -20%;
    }

    .stories1 {
      margin-left: 0% !important;
      border: 1px solid black;
      height: auto;
      width: 85% !important;
      padding: 20px;
      color: aqua;
      margin-top: 20%;
    }

    img {
      margin-top: -350%;
      margin-left: 40%;
      height: 20%;
      width: 20%;
    }
.stories{
  margin-left: 50px !important;
}
    .stories2 {
      float: left;
      border: 1px solid black;
      height: auto;
      width: 85% !important;
      padding: 20px;
      color: aqua;
      margin-top: 20%;
      margin-left: 0% !important;
    }
    .stories2 img{
      margin-top: -335%;
      margin-left: 40%;
      height: 20%;
      width: 20%;
    }

    .fot{
      height: 930px !important;
    }

.autopara{
  font-size: 10px !important;
  width: 100%!important;
  margin-top: 20%;
  margin-left: 50px !important;
 }

.footerimg{
  display: contents ;
}
col{
margin: 20px !important;
}
.copyright{
  font-size: 10px !important;
}

    }


    .gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}


  </style>
</head>

<body>

  <!-- navbar start -->
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
            <a class="nav-link active ms-5" aria-current="page" href="about us.php">About Us</a>
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







  <!-- sell car button -->
  <button class="btn1">
    
    <a href="sell your car.php"<i class="bi bi-people-fill"></i>&nbsp;&nbsp;SELL YOUR CAR</button></a>
  </span>
  <!-- heading -->
  <div class="heading">
    <p>
      Certified Used Cars from Trusted Sellers
    </p>
  </div>
  <!-- main search bar  -->
<div class="mainsearchbar">
  <div class="search">
    <!-- <p style="margin-left: 5%; margin-top: 2%;">budget</p>
    <select name="" id="" style="margin-left: 2%; background-color: black; color: azure; height: 50px;width: 200px;">
      <option value="" style="font-size: 25px;">enter your budget</option>
      <option value="below_1_lakh">below_1_lakh</option>
      <option value="below_1_lakh">1_lakh-2_lakh</option>
      <option value="below_1_lakh">2_lakh-3_lakh</option>
      <option value="below_1_lakh">3_lakh-4_lakh</option>
      <option value="below_1_lakh">4_lakh-5_lakh</option>
      <option value="below_1_lakh">5_lakh-6_lakh</option>
      <option value="below_1_lakh">6_lakh-7_lakh</option>
      <option value="below_1_lakh">7_lakh-8_lakh</option>
      <option value="below_1_lakh">8_lakh-9_lakh</option>
      <option value="below_1_lakh">9_lakh-10_lakh</option>
      <option value="below_1_lakh">above 10 lakh</option>

    </select> -->
  </div>
  <!-- second serch bar -->

  <div class="modealname">
    <input type="search" list="budget" name="" id="model" placeholder="find car..">

  </div>
  <!-- car name -->
  <div class="carname">
    <datalist id="budget">
      
      <option value="Maruti Suzuki Brezza"> 
      <option value="Maruti Suzuki Ertiga">
      <option value="Maruti Suzuki Swift">
      <option value="Maruti Suzuki Baleno">
      <option value="Maruti Suzuki Dzire">
      <option value="Maruti Suzuki Alto 800">
      <option value="Maruti Suzuki Wagon R">
      <option value="Maruti Suzuki Alto K10">
      <option value="Maruti Suzuki Eeco">
      <option value="Maruti Suzuki XL6">
      <option value="Maruti Suzuki Ignis">
      <option value="Maruti Suzuki S-Presso">
<hr>
        <br>
        <h1>Hyundai</h1>

      <option value="Hyundai Verna">
      <option value="Hyundai Creta">
      <option value="Hyundai Venue">
      <option value="Hyundai i20">
      <option value="Hyundai Tucson">
      <option value="Hyundai Aura">
      <option value="Hyundai Alcazar">
      <option value="Hyundai Kona Electric">
      <option value="Hyundai Venue N Line">
      <option value="Hyundai Grand i10 Nios">
      <option value="Hyundai i20 N Line">


        <br>
        <p style="font-size: 100px; color: darkblue;">tata</p>

      <option value="Tata punch">
      <option value="Tata nexon">
      <option value="Tata harrier">
      <option value="Tata tiago">
      <option value="Tata altroz">
      <option value="Tata safari">
      <option value="Tata tigor">
      <option value="Tata yodha pikup">


      <option value="Mahindra xuv 700">
      <option value="Mahindra Thar">
      <option value="Mahindra bolero">
      <option value="Mahindra scorpio N">
      <option value="Mahindra xuv 300">
      <option value="Mahindra scropio classic">
      <option value="Mahindra bolero neo">
      <option value="Mahindra marrazo">
      <option value="Mahindra bolero campur">
      <option value="Mahindra kuv 100 nxt">
      <option value="Mahindra pikup extralog">


<!-- 
      <option value="Volkswagen virtus">
      <option value="Volkswagen taigun">
      <option value="Volkswagen tiguan">
      <option value="Volkswagen id.4">
      <option value="Volkswagen vento ">
      <option value="Volkswagen polo">


      <option value="Honda city">
      <option value="Honda amaze">
      <option value="Honda jazz">
      <option value="Honda wr-v">
      <option value="Honda city hybrid">

      <option value="Ford aspire">
      <option value="Ford eco sport">
      <option value="Ford endeaover">
      <option value="Ford figo">
      <option value="Ford fiesta">
      <option value="Ford freestyle">
      <option value="Ford fusion">

      <option value="Toyota fortuner">
      <option value="Toyota urban cruiser hyryder">
      <option value="Toyota glanza">
      <option value="Toyota innova">
      <option value="Toyota fiesta">
      <option value="Toyota camry">
      <option value="ToyotaBfusion">



      <option value="Bmw 3-series">
      <option value="Bmw 5-series">
      <option value="Bmw x1">
      <option value="Bmw x3">
      <option value="Bmw 7-series">
      <option value="Bmw 5-series">
      <option value="Bmw 1-series">

      <option value="Mercedes-benz C-class ">
      <option value="Mercedes-benz E-class ">
      <option value="Mercedes-benz A-class ">
      <option value="Mercedes-benz M-class ">
      <option value="Mercedes-benz cla-class ">
      <option value="Mercedes-benz S-class ">
      <option value="Mercedes-benz E-class ">
      <option value="Mercedes-benz GLC ">


      <option value="Audi A4">
      <option value="Audi A6">
      <option value="Audi A3">
      <option value="Audi A6">
      <option value="Audi Q3">
      <option value="Audi R55">
      <option value="Audi Q7"> -->


    </datalist>




  </div>




  <!-- third serch bar -->
  <div class="city">
    <input type="search" list="cname" name="" id="city" placeholder="enter city name">
    <datalist id="cname">

      <option value="Ahmedabad">
      <option value="Amreli">
      <option value="Anand">
      <option value="Aravalli">
      <option value="Banaskantha">
      <option value="Botad">
      <option value="Bharuch">
      <option value="Bhavnagar">
      <option value="Chhota udaipur">
      <option value="Dwarka">
      <option value="Dahod">
      <option value="Dang">
      <option value="Gandhinagar">
      <option value="Jamnagar">
      <option value="Junagadh">
      <option value="Kutch">
      <option value="Kheda">
      <option value="Mahesana">
      <option value="Mahisagar">
      <option value="Morbi">
      <option value="Narmada">
      <option value="Navsari">
      <option value="Tanchamahal">
      <option value="Patan">
      <option value="Porbandar">
      <option value="Rajkot">
      <option value="Sabarkatha">
      <option value="Surat">
      <option value="Surendranagar">
      <option value="Somnath">
      <option value="Tapi">
      <option value="Vadodara">
      <option value="Valsad">

  </div>
</div>
  <!-- btn -->
  <div class="view-car">
    
    
    <a href="brezza.php"><button type="button" class="btn btn-success">View car>>></button></a>
  </div>


  <!--autoportal love stories   -->
<div class="stories">
  <h3 style="font-size: 50px; text-align: center; margin-top: 10%; color: yellow;"> Autoportal Love Stories</h3>
  <br>
  <br>

  <div class="container-fluid">
    <div class="row str">
      <div class="col-md-12 stories1">
        <h5>Mr. Malhotra</h5>
        <h6>SATISFIED BUYER – TOYOTA ETIOS</h6>
        <p>I chose Autoportal after my friend told me<br> how these people are genuine with their <br> details. With my
          amazing new like Toyota <br> Etios, I can now say that buying a used car is <br> not a bad idea with
          Autoportal
        </p>
        <div class="young">
        <div class="person1">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFLYtxj-tne8GF3mErRrfyPwjRAr2VIkV5Ou0GWd8&s">
  
        </div>
        </div>
      </div>
      <div class="col-md-12 stories2">
        <h5>Rahul Yadav </h5>
        <h6>SATISFIED BUYER – SWIFT DZIRE </h6>
        <p>I was searching for a used Maruti Dzire since long. Couldn’t find one in a good condition. Finally found it
          on
          Autoportal! I was amazed to see their services and I feel like I am driving an almost new car. Thank you
          Autoportal.

        </p>
        
        <div class="person5">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFLYtxj-tne8GF3mErRrfyPwjRAr2VIkV5Ou0GWd8&s">
        </div>
        </div>
    </div>
  </div>
  <!-- last second para. -->
  <div class="paregraph">
    <h2>Buy Second-Hand Cars Online</h2>
    <p>The best aspect of the second-hand car market in India is that people can have access to certified used cars at
      low prices as cheap second-hand cars are available throughout India. There are also facilities to buy used cars
      online in India. Autoportal.com is the one-stop solution if you want to buy used cars online in India as you can
      get competitive prices for models of your choice.

    </p>

  </div>
</div>
  <!-- footer -->

  <div class="footer bg-dark pt-2">
    <div class="rows">
      <div class="col pt-5"><img src="https://1000logos.net/wp-content/uploads/2022/08/Ola-Cabs-Symbol.png"></div>
      <div class="col pt-5"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/AVIS_logo_2012.svg/2560px-AVIS_logo_2012.svg.png"></div>
      <div class="col pt-5"><img src="https://seeklogo.com/images/L/Lease_Plan-logo-4CF03B69BC-seeklogo.com.png" ></div>
      <div class="col pt-5"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Goibibo_logo.png" ></div>
    </div>
<br><br><br><br><br>
      <div class="footerimges  d-md-flex">
  <div class="col pt-5"><img src="https://st2.depositphotos.com/2036511/8316/v/950/depositphotos_83160160-stock-illustration-100-percent-certified-quality-badge.jpg" style="height: 100%;" ></div>
  <div class="col pt-5"><img src="https://st4.depositphotos.com/4320021/40073/v/1600/depositphotos_400739736-stock-illustration-100-secure-grunge-vector-icon.jpg" style="height: 100%;"></div>
  <div class="col pt-5"><img src="https://cheapsslsecurity.com/p/wp-content/uploads/2019/07/Comodo-Secure-Seal.jpg" style="height: 100%;" ></div>
</div>
<br><br><br><br>  
<div class="copyright">

  <h5>2023@copyright.Autoportal</h5>
</div>
    </div>

  <!-- singing form --> -->
 
  <div class="modal fade" id="reg" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
    
    <section class="vh-200">
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm- text-black">

          <div class="d-flex align-items-center">
  
            <form method="post">
  
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in Form</h3>
              
              <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="email" placeholder="Enter Email"  required>
                <!-- <label class="form-label" for="form3Example1cg">Enter Email</label> -->
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="pass" placeholder="Enter Password" required>
                <!-- <label class="form-label" for="form3Example1cg">Enter Password</label> -->
              </div>
              
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" name="btn" type="submit">Login</button>
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

              <form method="post">

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