<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell your car</title>
     <!-- bootstrap css file -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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


body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      background: url(https://media.istockphoto.com/id/1149902499/vector/car-sale.jpg?s=1024x1024&w=is&k=20&c=BHYKUxjkOwe45q3ogBio7xJWoq3LaCfbZMXv2s_IQD4=);
      background-repeat: no-repeat;
      background-size: cover;
}
      
    .navbar {
      height: 100%;
      width: auto;
      background-color: antiquewhite;
    } 


    .navbar a {
      text-decoration: none;
    }

    .dropdown {
      text-decoration: none;
      list-style-type: none;
      margin-left: 100px;
    }


    @media only screen and (min-width:320px) and (max-width:480px) {
      body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
      }




.card{
  margin-left: -8%;
}
.price{
  height: 50px !important;
}


.year{
  width: 80px;
}

.btn-check1{

  margin-left: 18%;
}

.btn-check2{

margin-left: 30px!important;
margin-top: 20%;
}

.btn-check3{

margin-left: 30px !important;
margin-top: 20%;
}
 .prices{
  margin-left: -50px !important;
 }

.btn-check4{
margin-left: 33px !important;
margin-top: 20%;
}

.btn-check5{

margin-left: 35px !important;
margin-top: 20%;
}


.btn7{

margin-left: 33px !important;
margin-top: 20%;
}

.btn8{

margin-left: 20px !important;
margin-top: 20%;
}

.text1{
width: 150px;
margin-left: -10% !important;

}

.owner1{
margin-left: 25%;
height: 20%;
  
}
.owner2{
margin-left: 38px !important;
margin-top: 5%;
}

.owner3{
  margin-left: 38px !important;
  margin-top: 5%;
}


.owner4{
  margin-left: 38px !important;
  margin-top: 5%;
}


.owner5{
  margin-left: 38px !important;
  margin-top: 5%;
}
.lastbtn{
  height: -20px !important;
}

}

     </style>
</head>
<body>






<!-- navbar -->

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


<!--  sell form -->
  

    <form>
        <div class="col-md-6  p-5 mt-5 ms-5">
            <div class="card">
                <div class="card-header">Sell your car
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 ms-2  p-1">
                            <form method="post">
                                <h3 class="login-heading p-2">Select catagory</h3>
                                <hr class="border border-1 border-dark w-50">
<p>Brand</p>
                                <div class="drop">
                                  <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select brand
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#" id="audi">Audi</a></li>
                                    <li><a class="dropdown-item" href="#">Ambassador</a></li>
                                    <li><a class="dropdown-item" href="#">Ashok</a></li>
                                    <li><a class="dropdown-item" href="#">Ashok Leyland</a></li>
                                    <li><a class="dropdown-item" href="#">Aston</a></li>
                                    <li><a class="dropdown-item" href="#">Aston Martin</a></li>
                                    <li><a class="dropdown-item" href="#">Bajaj</a></li>
                                    <li><a class="dropdown-item" href="#">Bentley</a></li>
                                    <li><a class="dropdown-item" href="#">Citroen</a></li>
                                    <li><a class="dropdown-item" href="#">BMW</a></li>
                                    <li><a class="dropdown-item" href="#">Bugatti</a></li>
                                    <li><a class="dropdown-item" href="#">Cadillac</a></li>
                                    <li><a class="dropdown-item" href="#">Caterham</a></li>
                                    <li><a class="dropdown-item" href="#">Chevrolet</a></li>
                                    <li><a class="dropdown-item" href="#">Conquest</a></li>
                                    <li><a class="dropdown-item" href="#">Daewoo</a></li>
                                    <li><a class="dropdown-item" href="#">Datsun</a></li>
                                    <li><a class="dropdown-item" href="#">Dc</a></li>
                                    <li><a class="dropdown-item" href="#">Dodge</a></li>
                                    <li><a class="dropdown-item" href="#">Eicher Polaris</a></li>
                                    <li><a class="dropdown-item" href="#">Ferrari</a></li>
                                    <li><a class="dropdown-item" href="#">Fiat</a></li>
                                    <li><a class="dropdown-item" href="#">Force Motors</a></li>
                                    <li><a class="dropdown-item" href="#">Ford</a></li>
                                    <li><a class="dropdown-item" href="#">Honda</a></li>
                                    <li><a class="dropdown-item" href="#">Hummer</a></li>
                                    <li><a class="dropdown-item" href="#">Hyundai</a></li>
                                    <li><a class="dropdown-item" href="#">ICML</a></li>
                                    <li><a class="dropdown-item" href="#">Infiniti</a></li>
                                    <li><a class="dropdown-item" href="#">Isuzu</a></li>
                                    <li><a class="dropdown-item" href="#">Jaguar</a></li>
                                    <li><a class="dropdown-item" href="#">Jeep</a></li>
                                    <li><a class="dropdown-item" href="#">Kia</a></li>
                                    <li><a class="dropdown-item" href="#">Lamborghini</a></li>
                                    <li><a class="dropdown-item" href="#">Land Rover</a></li>
                                    <li><a class="dropdown-item" href="#">Lexus</a></li>
                                    <li><a class="dropdown-item" href="#">Mahindra</a></li>
                                    <li><a class="dropdown-item" href="#">Mahindra Renault</a></li>
                                    <li><a class="dropdown-item" href="#">Maserati</a></li>
                                    <li><a class="dropdown-item" href="#">Maybach</a></li>
                                    <li><a class="dropdown-item" href="#">Mazda</a></li>
                                    <li><a class="dropdown-item" href="#">Mercedes-Benz</a></li>
                                    <li><a class="dropdown-item" href="#">MG</a></li>
                                    <li><a class="dropdown-item" href="#">Mini</a></li>
                                    <li><a class="dropdown-item" href="#">Mitsubishi</a></li>
                                    <li><a class="dropdown-item" href="#">Nissan</a></li>
                                    <li><a class="dropdown-item" href="#">Opel</a></li>
                                    <li><a class="dropdown-item" href="#">Peugeot</a></li>
                                    <li><a class="dropdown-item" href="#">Porsche</a></li>
                                    <li><a class="dropdown-item" href="#">Premier</a></li>
                                    <li><a class="dropdown-item" href="#">Renault</a></li>
                                    <li><a class="dropdown-item" href="#">Rolls-Royce</a></li>
                                    <li><a class="dropdown-item" href="#">San</a></li>
                                    <li><a class="dropdown-item" href="#">Sipani</a></li>
                                    <li><a class="dropdown-item" href="#">Skoda</a></li>
                                    <li><a class="dropdown-item" href="#">Smart</a></li>
                                    <li><a class="dropdown-item" href="#">Ssangyong</a></li>
                                    <li><a class="dropdown-item" href="#">Subaru</a></li>
                                    <li><a class="dropdown-item" href="#">Tata</a></li>
                                    <li><a class="dropdown-item" href="#">Toyota</a></li>
                                    <li><a class="dropdown-item" href="#">Volkswagen</a></li>
                                    <li><a class="dropdown-item" href="#">Volvo</a></li>
                   
                                  </ul>
                                </div>                  
        
                                </div>
                            </div>

                            <br><br>
                            <div class="dro">
                              <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                select model
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#"></a></li>
                                <li><a class="dropdown-item" href="#"></a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </div>
                          </div>
                          <h6>Year </h6> 
                          <input class="year" type="number" name="year" placeholder="enter year *">
                          <br><br>
                          <h6>Fual </h6>
                          <input type="radio" class="btn-check1" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                          <label class="btn btn-outline-success" for="success-outlined">PETROL</label>
                          
                          <input type="radio" class="btn-check2" name="options-outlined" id="primary-outlined" autocomplete="off">
                          <label class="btn btn-outline-primary" for="primary-outlined">DIESEL</label>
                          
                          <input type="radio" class="btn-check3" name="options-outlined" id="secondary-outlined" autocomplete="off" checked>
<label class="btn btn-outline-secondary" for="secondary-outlined">CNG</label>

<input type="radio" class="btn-check4" name="options-outlined" id="info-outlined" autocomplete="off">
<label class="btn btn-outline-info" for="info-outlined">LPG</label>

<input type="radio" class="btn-check5" name="options-outlined" id="dark-outlined" autocomplete="off" checked>
<label class="btn btn-outline-dark" for="dark-outlined">ELECTRIC</label>
              
                            <br><br>
                         <h6> Transmission </h6>
                         <div class="btn7">

                      
                          <chekbox>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="abc">
                            <label>
                              AUTOMATIC
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="abc">
                              MANUAL
                            </label>
                          </div>
                          <br><br>
                          
                          <h6> Km driven </h6>
                          <div class="text1">

                            <input type="number" class="text1"  name="km driven" placeholder="enter km driven *">
                          </div>
                        </chekbox>

                          <br><br>
                          <h6>No. of owners</h6>  
                  
                          <div class="form1">
                            <input class="form-check-input" type="radio" name="abc" >
                            <label>
                              1st
                            </label>
                          </div>
                          <div class="form2">
                            <input class="form-check-input" type="radio" name="abc">
                            <label>
                              2st
                            </label>
                          </div>
                          <div class="form3">
                            <input class="form-check-input" type="radio" name="abc" >
                            <label>
                              3st
                            </label>
                          </div>
                          <div class="form4">
                            <input class="form-check-input" type="radio" name="abc">
                            <label>
                              4st
                            </label>
                          </div>
<br><br><br>
                          <p class="lead"> Enter your description</p>
<input class="form-control" style="height: 200px;" type="text" name="description" placeholder="enter your description *">
<br><br>
<h6>SET A PRICE</h6>
<p class="lead"> Price</p>
<div class="prices">
<input type="number" name="price" placeholder="enter price">
</div>
<br><br>
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Upload Your Car images</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
  <hr>
  <br>
<h6>Select your city</h6>

<div class="selectcity">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

<br><br>
<div class="lastbtn">
<button type="submit" class="btn btn-outline-success">Submit</button> &nbsp;&nbsp;&nbsp; <br><br>
<button type="reset" class="btn btn-outline-danger">Reset</button>
</div>
</div>




                        </div>
                </div>
            </div>
            
        </form>



  <!-- singing form --> -->
 
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


