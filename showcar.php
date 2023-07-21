<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

  .container {
    width: 85%;
    background: #fff;
    border-radius: 6px;
    padding: 20px 60px 30px 40px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  }

  .container .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .container .content .left-side {
    width: 25%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    position: relative;
  }

  .content .left-side::before {
    content: '';
    position: absolute;
    height: 70%;
    width: 2px;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
    background: #afafb6;
  }

  .content .left-side .details {
    margin: 14px;
    text-align: center;
  }

  .content .left-side .details i {
    font-size: 30px;
    color: #3e2093;
    margin-bottom: 10px;
  }

  .content .left-side .details .topic {
    font-size: 18px;
    font-weight: 500;
  }

  .content .left-side .details .text-one,
  .content .left-side .details .text-two {
    font-size: 14px;
    color: #afafb6;
  }

  .container .content .right-side {
    width: 75%;
    margin-left: 75px;
  }

  .content .right-side .topic-text {
    font-size: 23px;
    font-weight: 600;
    color: #3e2093;
  }

  .right-side .input-box {
    height: 50px;
    width: 100%;
    margin: 12px 0;
  }

  .right-side .input-box input,
  .right-side .input-box textarea {
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

  .right-side .message-box {
    min-height: 110px;
  }

  .right-side .input-box textarea {
    padding-top: 6px;
  }



  @media (max-width: 950px) {
    .container {
      width: 90%;
      padding: 30px 40px 40px 35px;
    }

    .container .content .right-side {
      width: 75%;
      margin-left: 55px;
    }
  }

  @media (max-width: 820px) {
    .container {
      margin: 40px 0;
      height: 100%;
    }

    .container .content {
      flex-direction: column-reverse;
    }

    .container .content .left-side {
      width: 100%;
      flex-direction: row;
      margin-top: 40px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .container .content .left-side::before {
      display: none;
    }

    .container .content .right-side {
      width: 100%;
      margin-left: 0;
    }

    .container {
      margin-left: 5%;
    }
  }


  @media only screen and (min-width:320px) and (max-width:480px) {
    body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .address {
      margin-top: 25%;
    }


  }
</style>
  


</head>

<body>
<center>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <?php
        foreach($profcardata as $row)
        {
            ?>
            
                    <img style="height: 80%; width: 80%;" src="<?php echo $row["images"];?>">
                    
                    <?php echo $row["car_name"];?>
                    <p><b>Car Name :</b>
                        <?php echo $row["model_name"];?>
                    </p>
                    <p><b>Year :</b>
                        <?php echo $row["year"];?>
                    </p>
                    <p><b>Fual:</b>
                        <?php echo $row["fual"];?>
                    </p>
                    <p><b>Transimission:</b>
                        <?php echo $row["Transmission"];?>
                    </p>
                    <p><b>km_driven:</b>
                        <?php echo $row["km_driven"];?>
                    </p>
                    <p><b>Owener no :</b>
                        <?php echo $row["owner_no"];?>
                    </p>
                    <p><b>Discription :</b>
                        <?php echo $row["descrption"];?>
                    </p>
                    <p><b>Car price :</b>
                        <?php echo $row["price"];?>
                    </p>
                    <p><b>Location:</b>
                        <?php echo $row["city_name"];?>
                    </p>
                    <p><b>Mobile no:</b>
                        <?php echo $row["mobile_no"];?>
                    </p>
                    <!-- <button type="button" href="content.php" class="btn btn-outline-primary">BUY NOW</button> -->
                    <a href="https://api.whatsapp.com/send?=<?php echo $row["mobile_no"]; ?>&text=hello%20i%20have%20your%20car%20in%20autoportal%20show" class="btn btn-outline-primary">CONTECT SELLER</a>
<!-- <input type="button" href="contenct.php" name="btn"  value="submit"> -->
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">

                    <?php
}
?>
      </div>
    </div>
  </div>
</div>
</center>
</body>

</html>








