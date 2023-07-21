
  <main>

<style>
   /* Google Font CDN Link */
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
  
</style>
      


 

      <!-- 
        - #HERO
      -->



 
<?php
if(!isset($_SESSION["login_id"]))
{
?>
      <a href="<?php echo $mainurl;?>" class="sellcar btn btn-outline-primary position-absolute bg-sucess mt-5" onclick='return abc(this.value)' style="margin-left: 80%; z-index:5 ">
    <span class="span">Sell Your Car</span>

    <span class="material-symbols-rounded">arrow_forward</span>
  </a>
<?php
}
else
{ 
  ?>
 

  <a href="<?php echo $mainurl;?>sellcar" class="sellcar btn btn-outline-primary position-absolute bg-sucess mt-5" style="margin-left: 80%; z-index:5 ">
    <span class="span">Sell Your Car</span>

    <span class="material-symbols-rounded">arrow_forward</span>
  </a>
<?php
}
?>
      <section class="hero has-bg-image" aria-label="home" style="background-image: url('./assets/images/hero-bg.jpg')">

  
        <div class="container">

          <div class="hero-content">

            <p class="section-subtitle :dark">We have talented engineers & mechanics</p>

            <h1 class="h1 section-title">Auto Maintenance & SELL Services</h1>

            <p class="section-text">
              Duis aute irure dolor in reprehenderit in voluptate velit esse Excepteur sint occaecat cupidatat non
              proident.
            </p>

            <a href="<?php echo $mainurl;?>showcar" class="btn">
              <button type="button" class="btn btn-outline-primary">
              <span class="span">Find a car</span>
              <span class="material-symbols-rounded">arrow_forward</span>
              </button>
            </a>

          </div>

          <figure class="hero-banner" style="--width: 1228; --height: 789;">
            <img src="./assets/images/hero-banner.png" width="1228" height="789" alt="red motor vehicle"
              class="move-anim">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service has-bg-image" aria-labelledby="service-label"
        style="background-image: url('./assets/images/service-bg.jpg')">
        <div class="container">

          <p class="section-subtitle :light" id="service-label">Our services</p>

          <h2 class="h2 section-title">We Provide Great Services For your Vehicle</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/services-1.png" width="110" height="110" loading="lazy" alt="Engine Repair">
                </figure>

                <h3 class="h3 card-title">Best Engine </h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/services-2.png" width="110" height="110" loading="lazy" alt="Brake Repair">
                </figure>

                <h3 class="h3 card-title">Best Brake </h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/services-3.png" width="110" height="110" loading="lazy" alt="Tire Repair">
                </figure>

                <h3 class="h3 card-title">Best Tire </h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/services-4.png" width="110" height="110" loading="lazy"
                    alt="Battery Repair">
                </figure>

                <h3 class="h3 card-title">Best Battery </h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li class="service-banner">
              <img src="./assets/images/services-5.png" width="646" height="380" loading="lazy" alt="Red Car"
                class="move-anim">
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/services-6.png" width="110" height="110" loading="lazy"
                    alt="Steering Repair">
                </figure>

                <h3 class="h3 card-title">Best Steering </h3>

                <p class="card-text">
                  Autem velaum iure reare aenderit rui in ea roluptate esse ruam moles
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

          </ul>
<!-- 
          <a href="#" class="btn">
            <span class="span">View All Services</span>

            <span class="material-symbols-rounded">arrow_forward</span>
          </a> -->

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about">

        <div class="container-fluid">
<div class="row">
<div class="col-md-6">

          <figure class="about-banner">
            <width="540" height="540" loading="lazy"
              alt="" class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle :dark">About Us</p>

            <h2 class="h2 section-title">We’re Commited to Meet the quality</h2>

            <p class="section-text">
              Quis autem vel eum iure reprehenderit qui in ea volu velit esse quam nihil molestiae consequatur, vel
              illum eui dolorem eum fugiat ruo.
            </p>

            <p class="section-text">
              Reprehenderit qui in ea volu velit esse quam nihil moe stiae consequatur, vel illum eui.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">8K+</strong> Happy Clients
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">22+</strong> Instruments
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">50+</strong> Years in market
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">99%</strong> Projects completed
                </p>
              </li>

            </ul>

          </div>
          </div>

<div class="col-md-6 mt-5">
  <img src="https://miro.medium.com/v2/resize:fit:1400/1*gJ3LMwKdmdKxFKfPz7NSzg.jpeg" style="width: 650px; height: 600px;">
</div>



        </div>
</div>
      </section>





      <!-- 
        - #WORK
      -->

      <section class="section work" aria-labelledby="work-label">
        <div class="container">

          <p class="section-subtitle :light" id="work-label">Happy custmoers</p>

          <h2 class="h2 section-title">Happinest For Every Customers </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="https://media.istockphoto.com/id/1313744378/photo/car-dealer-discussing-contract-with-client.jpg?s=612x612&w=0&k=20&c=Z5POJDUoTnEKCMby-TaAw4PIi6FwvY4ORvaGQbBcrzg=" width="350" height="406" loading="lazy" alt="Engine Repair"
                    class="img-cover">
                </figure>

               

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="https://media.istockphoto.com/id/655903474/photo/salesperson-selling-cars-at-car-dealership.jpg?s=612x612&w=0&k=20&c=21OvScpoMJ3NslCHZ4duGehlzZjehd3kMLd2ynhxQRk=" width="350" height="406" loading="lazy" alt="Car Tyre change"
                    class="img-cover">
                </figure>


              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="https://media.istockphoto.com/id/1191003702/photo/visiting-car-dealership.jpg?s=612x612&w=0&k=20&c=AaTGYJGYoRaC0GF8nl4tvkXTSHv3k75BSraEkiib7rI=" width="350" height="406" loading="lazy" alt="Battery Adjust"
                    class="img-cover">
                </figure>


              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>


  <script>
// book your seat

function abc()
{
    alert('want to sell your car Login to continue..')
    window.location='./';
}

</script>