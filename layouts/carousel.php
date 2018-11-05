<style>
.fade-carousel {
    position: relative;
    height: 40vh;
}
.fade-carousel .carousel-inner .item {
    height: 40vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .2;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 0px 0px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 2em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
    color:#fff;
}
.hero h3 {
    color:#ffffff;
    font-size: 1em; 
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .1;
}
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
  color: #ffffff;
    background-color: #214cda;
    border-color: #214cda;
    outline: none;
    margin: 20px auto;
}
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3,
.fade-carousel .slides .slide-4,
.fade-carousel .slides .slide-5,
.fade-carousel .slides .slide-6,
.fade-carousel .slides .slide-7 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(<?=SYS_URL?>wpuploads/sliders/slider1.jpg); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(<?=SYS_URL?>wpuploads/sliders/slider2.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(<?=SYS_URL?>wpuploads/sliders/slider3.jpg);
}
.fade-carousel .slides .slide-4 {
  background-image: url(<?=SYS_URL?>wpuploads/sliders/slider4.jpg); 
}
.fade-carousel .slides .slide-5 {
  background-image: url(<?=SYS_URL?>wpuploads/sliders/slider5.jpg);
}
.fade-carousel .slides .slide-6 {
  background-image: url(<?=SYS_URL?>wpuploads/sliders/slider6.jpg);
}
.fade-carousel .slides .slide-7 {
  background-image: url(<?=SYS_URL?>wpuploads/sliders/slider7.jpg);
}
/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}
</style>
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <!-- <div class="overlay"></div> -->

  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol> -->
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">        
        <hgroup>
            <h1></h1>        
            <h3></h3>
        </hgroup>       
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h1>Air Freight</h1>        
            <h3>Fastest Freight Services and Leaders in the industry</h3>
        </hgroup>
        <a class="btn btn-hero" href="#" role="button">Read More</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>Ocean Freight</h1>        
            <h3>We lead others follow. Contact us now!</h3>
        </hgroup>       
        <a class="btn btn-hero" href="#" role="button">Read More</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-4"></div>
      <div class="hero">        
        <hgroup>
            <h1>Road Freight</h1>        
            <h3>As you shop, we are here to ferry it home. Let's Partner</h3>
        </hgroup>       
        <a class="btn btn-hero" href="#" role="button">Read More</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-5"></div>
      <div class="hero">        
        <hgroup>
            <h1>Pickup & Delivery</h1>        
            <h3>Zero warehouse delays. We bring it to your door-step</h3>
        </hgroup>       
        <a class="btn btn-hero" href="#" role="button">Read More</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-6"></div>
      <div class="hero">        
        <hgroup>
            <h1>Packaging Services</h1>        
            <h3>With expertise for safe shipping packaging technologies</h3>
        </hgroup>       
        <a class="btn btn-hero" href="#" role="button">Read More</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-7"></div>
      <div class="hero">        
        <hgroup>
            <h1>Cargo Clearing</h1>        
            <h3>Do not let your shipment delay at the port for weeks!</h3>
        </hgroup>
        <a class="btn btn-hero" href="#" role="button">Read More</a>
      </div>
    </div>
  </div> 
</div>