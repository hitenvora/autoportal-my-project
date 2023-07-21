<?php
$mainurl="http://localhost/TopsAssignment/project/autoportal/";
?>




<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
      <!-- 
    - primary meta tags
  -->
  <title>AUTOPORTAL</title>
  <meta name="title" content="AUTOPORTAL">
  <!-- <meta name="description" content="This is a vehicle repair html template made by codewithsadee"> -->

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- x google fontss link -->
  
   <link rel="preconnect" href="https://fontsss.googleapis.com"> 
  <link rel="preconnect" href="https://fontss.gstatic.com" crossorigin>
  <link href="https://fontss.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap"
    rel="stylesheet">

  <!-- 
    - material icon fonts
  -->
  <link rel="stylesheet"
     href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0" />

  <!-- 
    - custom css link
  -->
  <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.jpg">
    <meta charset="UTF-8">
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- fontsawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fonts-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontsawesome-free@6.2.1/css/fontsawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- bootstrap cdn file -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontsawesome-free@6.2.1/css/fontsawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">  -->
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/fonts/bootstrap-icons.css"> -->
 <!-- <link rel="stylesheet" href="auto portal.css"> -->
 <link rel="stylesheet" href="fonts-awesome-4.7.0/css/fonts-awesome.css">
<link rel="stylesheet" href="fonts-awesome-4.7.0/css/fonts-awesome.min.css">
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <!-- bootstrap js file -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
   integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
   crossorigin="anonymous"></script> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
   integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
   crossorigin="anonymous"></script>
   </head>
  <style>

    /* Google fonts CDN Link */
@import url('https://fontss.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');




/*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * colors
 */

--international-orange-engineering: hsl(1, 91%, 37%);
--cadet-blue-creyola: hsl(222, 14%, 69%);
--oxford-blue-1: hsl(222, 47%, 15%);
--oxford-blue-2: hsl(222, 44%, 14%);
--oxford-blue-3: hsl(222, 50%, 11%);
--sonic-silver: hsl(0, 0%, 44%);
--space-cadet: hsl(222, 44%, 18%);
--pastel-pink: hsl(1, 53%, 75%);
--eerie-black: hsl(0, 0%, 15%);
--light-gray: hsl(0, 0%, 80%);
--white: hsl(0, 0%, 100%);

/**
 * typography
 */

--ff-chakra-petch: 'Chakra Petch', sans-serif;
--ff-mulish: 'Mulish', sans-serif;

--fs-1: 3.5rem;
--fs-2: 3rem;
--fs-3: 2.4rem;
--fs-4: 1.8rem;
--fs-5: 1.4rem;
--fs-6: 1.2rem;

--fw-400: 400;
--fw-600: 600;
--fw-700: 700;

/**
 * spacing
 */

--section-padding: 60px;

/**
 * box shadow
 */

--shadow: 0px 0px 100px 0px hsl(216, 9%, 90%);

/**
 * border radius
 */

--radius-pill: 100px;
--radius-circle: 50%;

/**
 * transition
 */

--transition: 0.25s ease;
--cubic-out: cubic-bezier(0.05, 0.83, 0.52, 0.97);

}





/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a,
img,
span,
button { display: block; }

a {
color: inherit;
text-decoration: none;
}
.navbar{

position: sticky;
top: 0;
z-index: 10;

}

.nav-link:hover{
  color: red !important;

}


img { height: auto; }

button {
background: none;
border: none;
cursor: pointer;
}



html {
scroll-behavior: smooth;
}

body {
background-color: var(--white);
color: var(--sonic-silver);
line-height: 1.5;
}

:focus-visible { outline-offset: 4px; }

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track { background-color: hsl(0, 0%, 98%); }

::-webkit-scrollbar-thumb { background-color: hsl(0, 0%, 80%); }

::-webkit-scrollbar-thumb:hover { background-color: hsl(0, 0%, 70%); }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 16px; }

.material-symbols-rounded {
--fs: 1em;
width: 1em;
overflow: hidden;
}

.has-bg-image {
background-repeat: no-repeat;
background-size: cover;
background-position: left;
}

.section-subtitle {
max-width: max-content;
margin-block-end: 12px;
margin-inline: auto;
}

.section-subtitle::before {
content: "";
display: inline-block;
height: 15px;
width: 30px;
margin-block-end: -2px;
background-repeat: no-repeat;
background-size: contain;
background-position: center;
}

.section-subtitle.\:dark { color: var(--white); }

/* .section-subtitle.\:dark::before { background-image: url('../images/text-bars-light.png'); } */

.section-subtitle.\:light { color: var(--international-orange-engineering); }

/* .section-subtitle.\:light::before { background-image: url('../images/text-bars-dark.png'); } */

.section-title { text-align: center; }

.h1,
.h2,
.h3,
.display-1 {
text-transform: uppercase;
}


.h1 {
color: var(--white);
line-height: 1.1;
letter-spacing: 1px;
}

.h2,
.h3 {
color: var(--eerie-black);
line-height: 1.2;
}



/* .btn {
background-color: var(--international-orange-engineering);
color: var(--white);
max-width: max-content;
fonts-family: var(--ff-chakra-petch);
fonts-weight: var(--fw-600);
text-transform: uppercase;
display: flex;
align-items: center;
gap: 8px;
padding: 12px 20px;
border: 1px solid transparent;
border-radius: var(--radius-pill);
transition: var(--transition);
will-change: transform;
}

.btn:is(:hover, :focus-visible) {
transform: translateY(-5px);
background-color: var(--oxford-blue-3);

border-color: var(--white);
} */

.move-anim { animation: moving 2s ease-in-out infinite alternate; }

@keyframes moving {
0% { transform: translateY(0); }
100% { transform: translateY(10px); }
}

.section { padding-block: var(--section-padding); }
/* 
.btn-link {
fonts-family: var(--ff-chakra-petch);
text-transform: uppercase;
color: var(--international-orange-engineering);
fonts-weight: var(--fw-700);
} */

.w-100 { width: 100%; }

.img-holder {
aspect-ratio: var(--width) / var(--height);
background-color: var(--light-gray);
overflow: hidden;
}

.img-cover {
width: 100%;
height: 100%;
object-fit: cover;
}

.has-scrollbar {
display: flex;
align-items: center;
gap: 30px;
overflow-x: auto;
scroll-snap-type: inline mandatory;
padding-block-end: 20px;
}

.scrollbar-item {
min-width: 100%;
scroll-snap-align: start;
}

.has-scrollbar::-webkit-scrollbar { height: 16px; }

.has-scrollbar::-webkit-scrollbar-track {
background-color: var(--pastel-pink);
border-radius: 20px;
}

.has-scrollbar::-webkit-scrollbar-thumb {
background-color: var(--international-orange-engineering);
border-radius: 20px;
border: 3px solid var(--pastel-pink);
}

.has-scrollbar::-webkit-scrollbar-button { width: 15%; }





/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.header .btn { display: none; }

.header {
position: absolute;
top: 0;
left: 0;
width: 100%;
padding: 40px 15px;
padding-inline-start: 40px;
z-index: 4;
}

.header .container {
display: flex;
justify-content: space-between;
align-items: center;
}

.logo img { width: 100px; }








/*-----------------------------------*\
#HERO
\*-----------------------------------*/

.hero {
position: relative;
padding-block-start: calc(var(--section-padding) + 70px);
text-align: center;
z-index: 1;
overflow: hidden;
}

.hero .container {
display: grid;
gap: 30px;
}

.hero .section-subtitle { text-transform: unset; }

.hero .section-text {
color: var(--white);
margin-block: 14px 18px;
}

.hero .btn { margin-inline: auto; }

.hero-banner { aspect-ratio: var(--width) / var(--height); }

.hero-banner img {
position: absolute;
bottom: 0;
right: 0;
width: 90%;
z-index: -1;
}
/* auto */
@import url('https://fontss.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  /* background: #c8e8e9; */

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




/*-----------------------------------*\
#SERVICE
\*-----------------------------------*/

.service-banner { display: none; }

.service { text-align: center; }

.service-list {
gap: 0;
margin-block-end: 40px;
}

.service-card .card-icon {
max-width: max-content;
margin-inline: auto;
margin-block-end: 24px;
}

.service-card .card-text {
line-height: 1.2;
margin-block: 8px;
}

.service .btn { margin-inline: auto; }





/*-----------------------------------*\
#ABOUT
\*-----------------------------------*/

.about {
background-color: var(--space-cadet);
color: var(--white);
text-align: center;
}

.about .container {
display: grid;
gap: 50px;
}

.about .section-title { color: var(--white); }

.about .section-text:nth-child(3) { margin-block: 12px 8px; }

.about-list {
display: grid;
gap: 25px;
margin-block-start: 25px;
}

.about-item {
background-color: var(--oxford-blue-2);
padding: 40px 20px;
transition: var(--transition);
}

.about-item:hover {
background-color: var(--international-orange-engineering);
transform: translateY(-8px);
}

.about-item .strong {
display: block;
line-height: 1.1;
}





/*-----------------------------------*\
#WORK
\*-----------------------------------*/

.work .container { padding-inline: 0; }

.work .section-title { margin-block-end: 24px; }

.work-card { position: relative; }

.work-card .card-content {
background-color: var(--white);
max-width: 90%;
padding: 30px 10px;
margin-block-start: -60px;
margin-inline: auto;
position: relative;
text-align: center;
box-shadow: var(--shadow);
}

.work-card .card-subtitle {
text-transform: uppercase;
color: var(--international-orange-engineering);
margin-block-end: 5px;
}

.work-card .card-title { margin-block-end: 10px; }

.work-card .card-btn {
background-color: var(--international-orange-engineering);
color: var(--white);
margin-inline: auto;
width: 38px;
height: 38px;
display: grid;
place-items: center;
border-radius: var(--radius-circle);
}





/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/







/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for large than 575px screen
*/

@media (min-width: 575px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 4rem;
  --fs-3: 2.8rem;
  --fs-4: 2rem;

}



/**
 * REUSED STYLE
 */

.container {
  max-width: 540px;
  width: 100%;
  margin-inline: auto;
}

.section-subtitle { --fs-5: 1.6rem; }




/**
 * HERO
 */

.hero .container { max-width: unset; }

.hero-content {
  max-width: 520px;
  margin-inline: auto;
}




/**
 * SERVICE
 */

.service .section-title { margin-block-end: 30px; }

.service-list {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  margin-block-end: 40px;
}



/**
 * ABOUT
 */

.about-list {
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.about-item { padding-block: 20px; }



/**
 * WORK
 */

.scrollbar-item { min-width: calc(50% - 15px); }



/**
 * FOOTER
 */


}





/**
* responsive for large than 768px screen
*/

@media (min-width: 768px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 4rem;
  --fs-2: 5rem;
  --fs-3: 3.4rem;

}



/**
 * REUSED STYLE
 */

.container,
.hero-content { max-width: 720px; }

.btn { padding: 16px 32px; }

.section-subtitle { --fs-5: 1.8rem; }

.section-title:not(.h1) {
  max-width: 500px;
  margin-inline: auto;
}



/**
 * HERO
 */

.hero { --section-padding: 120px; }

.hero .section-text { margin-block-end: 30px; }



/**
 * SERVICE
 */

.service-banner {
  display: block;
  position: relative;
}

.service-list { grid-template-columns: repeat(3, 1fr); }

.service-banner img {
  position: absolute;
  top: 0;
  left: -25%;
  margin-block-start: 15%;
  width: 150%;
  transform-origin: top;
}



/**
 * ABOUT
 */
 
.about-banner { max-width: max-content; }

.about-banner,
.about .section-text { margin-inline: auto; }

.about .section-text { max-width: 520px; }

}

/**
 * FOOTER
 */






/**
* responsive for large than 992px screen
*/

@media (min-width: 992px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 4.4rem;
  --fs-3: 3.8rem;
  --fs-4: 2.2rem;

  /**
   * spacing
   */

  --section-padding: 100px;

}



/**
 * REUSED STYLE
 */

.container { max-width: 960px; }

.section-text,



/**
 * HEADER
 */

.nav-toggle-btn { display: none; }

.header .container { gap: 30px; }




/**
 * HERO
 */

.hero {
  text-align: left;
  padding-block-end: 80px;
}

.hero .container {
  max-width: 960px;
  grid-template-columns: 1fr 1fr;
}

.hero :is(.section-subtitle, .btn) { margin-inline: 0; }

.hero .section-title { text-align: left; }

.hero-banner img { width: 55%; }



/**
 * SERVICE
 */

.service-card .card-text {
  padding-inline: 25px;
  line-height: 1.45;
  margin-block-end: 15px;
}

.service-list li:nth-child(-2n+3) { margin-block-start: 90px; }

.service-list li:nth-child(4) { margin-inline-end: 60px; }

.service-list li:nth-child(6) { margin-inline-start: 60px; }

.service-banner img {
  left: -55%;
  margin-block-start: -30%;
  width: 210%;
}



/**
 * ABOUT
 */

.about {
  position: relative;
  z-index: 1;
}

.about,
.about .section-title { text-align: left; }

.about .container {
  grid-template-columns: 1fr 0.75fr;
  gap: 30px;
}

.about .section-subtitle { margin-inline: 0; }

.about-banner,
.about-banner .w-100 { margin-inline: auto 0; }

.about-banner .w-100 { width: 40%; }

.about-item { text-align: center; }

.about::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background-image: url('../images/about-abs-banner.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: right;
  z-index: -1;
}



/**
 * WORK
 */

.has-scrollbar { overflow-x: visible; }

.scrollbar-item { min-width: calc(33.33% - 20px); }

}





/**
* responsive for large than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 5rem;
  --fs-3: 4.6rem;

}



/**
 * REUSED STYLE
 */

.container,
.hero .container { max-width: 1140px; }

.btn { padding: 18px 36px; }

.btn .material-symbols-rounded { --fs: 1.3em; }



/**
 * HEADER
 */

.header { padding-block: 25px; }

.logo img { width: 128px; }

.header .btn {
  padding-block: 15px;
}



/**
 * HERO
 */

.hero { padding-block: 250px 180px; }

.hero .container { grid-template-columns: 1fr 0.9fr; }

.hero .section-text {
  padding-inline-end: 120px;
}

.hero-banner img { width: 70%; }



/**
 * SERVICE
 */

.service .section-title { max-width: 700px; }

.service-list { margin-block-end: 70px; }

.service-list li:nth-child(2) .card-text {
  padding-inline: 50px;
}

.service-list li:nth-child(-2n+3) {
  margin-block-start: 110px;
}

.service-list li:is(:nth-child(1), :nth-child(6)) {
  margin-inline-start: 75px;
}

.service-list li:is(:nth-child(3), :nth-child(4)) {
  margin-inline-end: 75px;
}

.service-banner img {
  width: max-content;
  left: -41%;
}



/**
 * WORK
 */

.work-card .card-btn {
  width: 55px;
  height: 55px;
}
}


/**
 * FOOTER


}



/**
* responsive for large than 1400px screen
*/

@media (min-width: 1400px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 6rem;

  /**
   * spacing
   */

  --section-padding: 140px;

}



/**
 * REUSED STYLE
 */

:is(.header, .hero) .container { max-width: 1280px; }

.section-subtitle::before {
  height: 20px;
  margin-inline-end: 5px;
}



/**
 * HEADER
 */

.header .btn { padding: 18px 36px; }



/**
 * HERO
 */

.hero { padding-block: 280px; }

.hero .section-text { padding-inline-end: 90px; }

.hero-banner img { width: 75%; }



/**
 * ABOUT
 */

.about::before { width: 55%; }

.about-banner .w-100 { width: 50%; }



/**
 * FOOTER
 */

}


/* new footer */




















  </style>




</html>