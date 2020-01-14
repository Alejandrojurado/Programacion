<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1><?php bloginfo('name'); ?></h1>
       <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>Haircare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <section class="hero-wrap js-fullheight" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg-2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-12 ftco-animate d-flex align-items-center">
            <div class="text text-center">
              <span class="subheading">Welcome to Haircare</span>
              <h1 class="mb-4">We are professional care for your hair</h1>
              <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-2">Book now</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container-fluid px-0">
        <div class="row no-gutters">
          <div class="col-md text-center d-flex align-items-stretch">
            <div class="services-wrap d-flex align-items-center img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/formen.jpg);">
              <div class="text">
                <h3>For Men</h3>
                <p><a href="#" class="btn-custom">See pricing <span class="ion-ios-arrow-round-forward"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-items-stretch">
            <div class="text-about py-5 px-4">
              <h1 class="logo">
                <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>Haircare</a>
              </h1>
              <h2>Welcome to our Salon</h2>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="mt-3"><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
            </div>
          </div>
          <div class="col-md text-center d-flex align-items-stretch">
            <div class="services-wrap d-flex align-items-center img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/forwomen.jpg);">
              <div class="text">
                <h3>For Women</h3>
                <p><a href="#" class="btn-custom">See pricing <span class="ion-ios-arrow-round-forward"></span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </header>