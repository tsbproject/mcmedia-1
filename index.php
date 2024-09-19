<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marvel Creative Media</title>
    <link rel="icon" type="image/x-icon" href="/images/marvelcmedia-favicon.png">
    
    <!--------------------Bootstrap CSS---------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
       rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
       
       
     
       
       <!----------------------------------Custom CSS------------------------------->
    <link rel="stylesheet" href="css/styles.css">

   
    <!----------------Boostrap Icons--------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!--------Google Fonts------------------->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

    <!------------------- FONT AWESONE ICONS CDN----------------------------------->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity=
     "sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  

   
    
  </head>
 
  
  <body>


 
     <?php include "header.php" ?>
  

     <!--------------------HEADER SECTION END------------------------------>

  
  <!--------------------BODY SECTION START------------------------------>

   <!-- section  MarvelCmediaHomeSlider-------------------->

 
   <div id="slide" class="carousel slide carousel-fade" data-bs-ride="carousel">
  
 
       <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#slide" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#slide" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#slide" data-bs-slide-to="2"></button>
    </div>
 
   <!-- The slideshow/carousel -->
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img id="slide-image" src="images/web-design-slide-1024x640.jpg" alt="Web Development" class="d-block w-100">
         <div id="slide-caption" class="carousel-caption">
          <h2>UNIQUELY DESIGNED AND RESPONSIVE<br> WEBSITE THAT SUITE YOUR <br>BUSINESS NEED</h2>
            <p id="slide-text">We strive to deliver high-quality websites, mobile applications,<br> 
              and digital designs that are not only visually appealing<br> but also user-friendly and secure.</p>
          <a href="web-development"><span id="slide-button-L">LEARN MORE&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="request-a-quote"><span id="slide-button">REQUEST A QUOTE &gt;</span></a>
      </div>
     </div>
     <div class="carousel-item">
       <img id="slide-image" src="images/digital-marketing-side-1-1024x597.jpg" alt="Digital Marketing" class="d-block w-100">
        <div id="slide-caption" class="carousel-caption">
         <h2>GET YOUR BUSINESS NOTICED ONLINE!<br> SIGNIFICANT ONLINE PRESENSE FOR YOUR<br> BUSINESS WITH DIGITAL MARKETING</h2>
          <p id="slide-text">We work with clients to create engaging content for social media platforms<br> such as Facebook, Twitter, and Instagram, as well as to develop<br> targeted advertising campaigns to reach specific audiences.</p>
          <a href="digital-marketing"><span id="slide-button-L">LEARN MORE&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="request-a-quote"><span id="slide-button">REQUEST A QUOTE &gt;</span></a>
      </div>
     </div>
     <div class="carousel-item">
       <img id="slide-image" src="images/creative-design.jpg" alt="Creative Design" class="d-block w-100">
        <div class="carousel-caption">
         <h2>WE ARE CREATIVELY ENDOWED</h2>
          <p id="slide-text">We offer range of creative design and marketing services that can help businesses improve their online presence and reach their target audience effectively.
          </p>
         <a href="creative-design"><span id="slide-button-L">LEARN MORE&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="request-a-quote"><span id="slide-button">REQUEST A QUOTE &gt;</span></a>
      </div>
     </div>
   </div>
 
   <!-- Left and right controls/icons -->
   <button class="carousel-control-prev" type="button" data-bs-target="#slide" data-bs-slide="prev">
     <span class="carousel-control-prev-icon"></span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#slide" data-bs-slide="next">
     <span class="carousel-control-next-icon"></span>
   </button>
 </div>
 </div>



 <!------------------section Information Grid--------------------->
 
  <section id="section2" class="info-grid ">
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 g-5 ">
  
        <div id="single-grid" class="col">
              <div class="front-grid">
              <i id="grid__icon"class="bi-people-fill front-grid__icon"></i>
              <h2 class="front-grid__header">WHO WE ARE</h2>
              <a class="front-grid__text" id="site-text" href="about-us.html">
                <p>Welcome to Marvel Creative Media, your trusted partner for Website
                and Mobile App development. We are a team of experienced professionals</p>
                <a href="about-us.html">&nbsp; &nbsp;<span id="learn-more">Learn More</span></a>
            </div>   
        </div>
          
        
          <div id="single-grid"  class="col">
            <div class="front-grid">
                <i id="grid-icon" class="bi-code-slash front-grid__icon"></i>
                <h2 class="front-grid__header">WEB/APP DEVELOPMENT </h2>
                <a class="front-grid__text" id="site-text" href="web-app-development.html">
                  <p>One of the key aspects of Marvel Creative 
                  Media's system is its focus on collaboration. The company understands 
                  that effective communication and collaboration.</p>
                <a href="web-app-development.html">&nbsp; &nbsp;<span id="learn-more" >Learn More</span></a>
            </div>
          </div> 
          
        
          <div id="single-grid"  class="col">
            <div class="front-grid">
              <i id="grid-icon" class="bi-vector-pen front-grid__icon"></i>
            <h2 class="front-grid__header">CREATIVE DESIGN</h2>
              <a class="front-grid__text" id="site-text" href="creative-design.html">
                <p>Marvel Creative Media's design services 
                cover a broad spectrum of creative disciplines, including 
                graphic design, web design, and branding. </p>
                <a href="creative-design.html">&nbsp; &nbsp;<span id="learn-more" >Learn More</span></a>
            </div>       
          </div>
            
          
          <div id="single-grid"  class="col">
            <div class="front-grid">
                <i id="grid-icon" class="bi-trophy-fill front-grid__icon"></i>
              <h2 class="front-grid__header">TRAINING</h2>
                <a class="front-grid__text" id="site-text" href="training.html">
                  <p>One of the key features of Marvel Creative Media's training programs
                  is their emphasis on practical learning. Their courses are designed to be hands-on.</p>
                  <a href="training.html">&nbsp; &nbsp;<span id="learn-more" >Learn More</span></a>
            </div>    
          </div>
          
     
      </div>
    </div> 
  </section>


     <div class="portfolio-header"><h1> PAST WEBSITE PROJECTS </h1><hr></div>
 <section> 
<div id="carouselPortfolio" class="container-fluid">
  <div id="carouselPortfolio" class="carousel slide carousel-slide" data-bs-ride="carousel">
     <div class="multicarousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-4 row-cols-xl-4 g-4">
            <div class="col">
              <img src="images/portfolio-images/church-website.jpg" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-3 d  clearfix  d-none d-md-block">
              <img src="images/portfolio-images/elfren.jpg" class="img-fluid" alt="Image 2">
            </div>
            <div class="col clearfix    d-none d-md-block">
              <img src="images/portfolio-images/marvelnaija.png" class="img-fluid" alt="Image 3">
            </div>
            <div class="col clearfix    d-none d-md-block">
              <img src="images/portfolio-images/church-website.jpg" class="img-fluid" alt="Image 4">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col">
              <img src="images/portfolio-images/marvelmarts.png" class="img-fluid" alt="Image 5">
            </div>
            <div class="col clearfix   d-none d-md-block">
              <img src="images/portfolio-images/myduduke.jpg" class="img-fluid" alt="Image 6">
            </div>
            <div class="col clearfix    d-none d-md-block">
              <img src="images/portfolio-images/joibremote-small.jpg" class="img-fluid" alt="Image 7">
            </div>
            <div class="col clearfix  d-none d-md-block">
              <img src="images/portfolio-images/church-website.jpg" class="img-fluid"alt="Image 8">
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target=".multicarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target=".multicarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    
    </div>
  </div>

</section>   


<!--------------------------FOOTER SECTION BEGINS-------------------------------------->

<?php require "footer.php" ?>







    
    

    
     
    
           
 <!-------------------JS Library---------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!---------JQuary Library-------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
    <script src="js/script.js"></script>
    
    
  </body>
</html>