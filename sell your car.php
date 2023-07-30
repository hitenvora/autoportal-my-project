




<?php
if(isset($_SESSION["login_id"]))
{
  ?>
  <?php
{
 
}
?>




     <style>
  /* Google Font CDN Link */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }




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








<!--  sell form -->
  

    <form method="post" enctype="multipart/form-data">
        <div class="col-md-6  p-5 mt-5 ms-5">
            <div class="card">
                <div class="card-header">Sell your car
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 ms-2  p-1">

                                <h3 class="login-heading p-2">Select catagory</h3>
                                <hr class="border border-1 border-dark w-50">
<p>Brand</p>
<div class="drop">
  <!-- <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> 
                                
                                    Select brand -->
                                  <!-- </button> -->
                       <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">  -->
                                       <!-- <li><a class="dropdown-item" href="#" id="audi">Audi</a></li>
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
                                    <li><a class="dropdown-item" href="#">Volvo</a></li>  -->
                    
                                    <!-- <div class="form-group mt-3"> -->
                                    <select name="brand" required>
            <option value="">-select Brand- </option>
            <?php
            foreach($shwcarnam as $shw1)
            { 
            ?>
            <option value="<?php echo $shw1["car_id"];?>"><?php echo $shw1["car_name"];?></option>
            <?php 
            }
            ?> 
        </select> 
        </div>
                  
          
                                </div>                  
        
                                </div>
                            

                            <br><br>
                            <!-- <div class="dro">
                              <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                select model
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> -->
                              <select name="model" required>
            <option value="">-select model- </option>
            <?php
            foreach($model as $shw1)
            { 
            ?>
            <option value="<?php echo $shw1["model_id"];?>"><?php echo $shw1["model_name"];?></option>
            <?php 
            }
            ?> 
        </select> 
                              </ul>
                            <!-- </div> -->
                          </div>
                          <h6>Year </h6> 
                          <input class="year" type="month" name="year" placeholder="enter year *req" required>
                          <br><br>
                          <h6>Fual </h6>
                          <input type="text" class="text1"  name="selector" placeholder="enter your fual *" required>
                         
                            <br><br>
                         <h6> Transmission </h6>
                         <div class="btn7">

                      
                          <chekbox >
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fual" value="AUTOMATIC" required>
                            <label>
                              AUTOMATIC
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fual" value="MANUAL" required>
                              MANUAL
                            </label>
                          </div>
                          <br><br>
                          
                          <h6> Km driven </h6>
                          <div class="text1">
                            <input type="number" class="text1"  name="kilomiter" placeholder="enter km driven *" required>
                          </div>
                        </chekbox>
            
                          <br><br>
                          <h6>No. of owners</h6>  
                  
                          <div class="form1">
                            <input class="form-check-input" type="radio" name="owners"  value="1st" required>
                            <label>
                              1st
                            </label>
                          </div>
                          <div class="form2">
                            <input class="form-check-input" type="radio" name="owners" value="2st" required>
                            <label>
                              2st
                            </label>
                          </div>
                          <div class="form3">
                            <input class="form-check-input" type="radio" name="owners" value="3st" required>
                            <label>
                              3st
                            </label>
                          </div>
                          <div class="form4">
                            <input class="form-check-input" type="radio" name="owners" value="4st" required>
                            <label>
                              4st
                            </label>
                          </div>
<br><br><br>
<!-- <textarea>"-->
                          <p class="lead"> Enter your description</p>
<!-- <input class="form-control" type="text"  name="discriptions" placeholder="enter your description *"> -->
<input type="text" name="desc" placeholder="enter your descripitons" required>
<!-- </textarea> -->
<br><br>
<h6>SET A PRICE</h6>
<p class="lead"> Price</p>
<div class="prices">
<input type="number" name="price" placeholder="enter price" required>
</div>
<br><br>
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Upload Your Car images</label>
  <input class="form-control" type="file" name="img" id="formFileMultiple" required>
  <hr>
  <br>
<h6>Select your city</h6>

<div class="selectcity">
<select name="city" required>
            <option value="">-select City- </option>
            <?php
            foreach($shwcity as $shw1)
            { 
            ?>
            <option value="<?php echo $shw1["city_id"];?>"><?php echo $shw1["city_name"];?></option>
            <?php 
            }
            ?> 
        </select> 
</div>

<div class="prices mt-5">
<h6>Select your mobile number</h6>
<input type="tel" name="mobile" maxlength="10" placeholder="enter mobile number" required>
</div>

<br><br>
<div class="lastbtn">
<button type="submit" name="sub" class="btn btn-outline-success">Post</button required> &nbsp;&nbsp;&nbsp; <br><br>
<button type="reset" name="res" class="btn btn-outline-danger">Reset</button required>
</div>
</div>


                        </div>
                </div>
            </div>
            
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
<?php
}
else
{}
?>



