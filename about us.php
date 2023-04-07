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

.dropdown{
text-decoration: none;
list-style-type: none;
margin-left: 100px;
}

.row{
  display: inline-block;
display: flex; 

margin-top: 25px;
margin-left: 20px;

}

.heading{

text-align: center;
margin-top: 10%;
font-size: 80px;
color: black;


}

.search{

    border: 1px solid black;
    height: 150px;
    width: 80%;
    margin-left: 11%;
    background-color: aliceblue;
}
.modealname
{
    width: 100px;
    height: 100px;
    margin-left: 40%;
    margin-top: -6%;
}
.city
{
    width: 20%;
    height: auto;
    float: right;
    margin-right: 10%;
    margin-top: -100px;
}
.btn{
   margin-left: 40%; 
 size: 200px;
}
.btn-sm 
{
    width: 20%;
    height: auto;
    font-size: 25px;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

}
.btn1{

    border: 1px solid black;
    background-color: rgba(128, 128, 128, 0);
    font-size: 25px;
    float: right;
    margin-top: 25px;
margin-right: 50px;

}

.btn1:hover
{
    background-color: red;
    color: white;
}
.str
{
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: row;
    gap: 10%;
    margin-top: -20%;    
}
.stories1{
margin-left: 20%;
border: 1px solid black;
height: auto;
width: 28%;
padding: 20px;
color: aqua;
margin-top: 20%;


}

img{
    margin-top: -140%;
    margin-left: 40%;
    height: 20%;
    width: 20%;
}

.stories2{
    float: right;
    border: 1px solid black;
    height: auto;
    width: 28%;
    padding: 20px;
    color: aqua;
    margin-top: 20%;
    }

    .para{

        margin: 2%;
    }

    .footer img{

        margin-top: -1%;
        height: 70px;
        background-color: gray;
        width: 200px;
        margin-left: -1%;
    }
    .logo img{


        height: 80px;
border-radius: 100px;        
        background-color: gray;
        width: 100px;
        
    }

    .fot{
        height: 400px !important;
    }

    .footer p{
        color: #666666;
    }
.navbar a{
    text-decoration: none;
    /* font-size: 150%; */
    /* padding: 5px; */
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
<!-- about start -->
<p>
    <h1>About us</h1> <br>
    AutoPortal.com is a one stop solution for all things automotive. It has been built and is being nurtured by a bunch of auto aficionados and petrol heads. Our primary motive is to make your car buying and selling process as hassle free as possible. In this pursuit, you will find at this hub - current affairs in the automotive arena, in-depth research tools, comprehensive video reviews and comparative car analysis, all of which assist our users in making an informed cay buying or selling decision.
    <br><br>
   <h5> What's different about us? </h5>
    
    What makes AutoPortal a well rounded and quality product is its segmentation approach towards multiple aspects that bind the automotive media together. At the forefront is the extensive catalogue of cars that are currently on sale in India, complete with details about variants, expert reviews, images and video gallery, ex-showroom prices in various cities across the country, even insurance & finance options, and lucrative offers.
    <br>
    Next, is the used cars sections where you can quite easily, either shop for a second-hand car or find a new owner for your current vehicle. For auto enthusiasts who like to stay abreast about all the latest happenings and events in the global automotive scene, we have the dedicated news section, where we obsessively cover the auto industry at large. The exhaustive section of upcoming cars on the other hand, provides industry insights on what to expect in the market in the coming months, so that you can plan you car purchase well ahead and even budget accordingly.
    <br><br>
    <h5>Our history in a nutshell </h5>
    
    AutoPortal has its roots back in the East European nation of Ukraine (www.autoportal.ua). After successfully taking the market by storm there and becoming one of most sought after online spaces in the automobile sector, Anton Rublevskyy, one of the founders of the hub, decided to foray into other emerging markets. India was collectively and quickly decided upon, owing to the huge potential this country portrays in the auto sector and the absence of a well-organised and credible medium on which, this huge market can rely upon to get the accurate and first-hand information.
    <br><br>

    <h5> Milestones achieved so far </h5>

    AutoPortal.com rose to this challenge and started its Indian innings back in November 2013. In this short span, AutoPortal.com quickly shot to fame and has successfully managed to carve itself a niche space in the Indian automotive segment - receiving rave reviews from our readers as well as the auto industry, thanks to the dedicated efforts of its young and talented automotive enthusiasts and our entire readership.
    <br><br>
    Whether you are in the market for a new car or a used car, an enthusiast passing by for news, updates or video content, a journalist working on a story or a job seeker, we sincerely hope that you find what you’re looking for at AutoPortal.com.</p>



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
    
            <br>
            <p style="font-size: 30px; color: darkblue;">hyundai</p>
    
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
    
          <option value="tata punch">
          <option value="tata nexon">
          <option value="tata harrier">
          <option value="tata tiago">
          <option value="tata altroz">
          <option value="tata safari">
          <option value="tata tigor">
          <option value="tata yodha pikup">
    
    
          <option value="mahindra xuv 700">
          <option value="mahindra Thar">
          <option value="mahindra bolero">
          <option value="mahindra scorpio N">
          <option value="mahindra xuv 300">
          <option value="mahindra scropio classic">
          <option value="mahindra bolero neo">
          <option value="mahindra marrazo">
          <option value="mahindra bolero campur">
          <option value="mahindra kuv 100 nxt">
          <option value="mahindra pikup extralog">
    
    
    
          <option value="volkswagen virtus">
          <option value="volkswagen taigun">
          <option value="volkswagen tiguan">
          <option value="volkswagen id.4">
          <option value="volkswagen vento ">
          <option value="volkswagen polo">
    
    
          <option value="honda city">
          <option value="honda amaze">
          <option value="honda jazz">
          <option value="honda wr-v">
          <option value="honda city hybrid">
    
          <option value="ford aspire">
          <option value="ford eco sport">
          <option value="ford endeaover">
          <option value="ford figo">
          <option value="ford fiesta">
          <option value="ford freestyle">
          <option value="ford fusion">
    
          <option value="toyota fortuner">
          <option value="toyota urban cruiser hyryder">
          <option value="ford glanza">
          <option value="ford innova">
          <option value="ford fiesta">
          <option value="ford camry">
          <option value="ford fusion">
    
    
    
          <option value="bmw 3-series">
          <option value="bmw 5-series">
          <option value="bmw x1">
          <option value="bmw x3">
          <option value="bmw 7-series">
          <option value="bmw 5-series">
          <option value="bmw 1-series">
    
          <option value="mercedes-benz C-class ">
          <option value="mercedes-benz E-class ">
          <option value="mercedes-benz A-class ">
          <option value="mercedes-benz M-class ">
          <option value="mercedes-benz cla-class ">
          <option value="mercedes-benz S-class ">
          <option value="mercedes-benz E-class ">
          <option value="mercedes-benz GLC ">
    
    
          <option value="Audi A4">
          <option value="Audi A6">
          <option value="Audi A3">
          <option value="Audi A6">
          <option value="Audi Q3">
          <option value="Audi R55">
          <option value="Audi Q7">
        </datalist>
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
  
            <form method="post">
  
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