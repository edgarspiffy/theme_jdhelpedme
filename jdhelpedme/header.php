<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body  <?php body_class()?>>

<div class="topbar text-center d-block d-md-none">
  <a href="tel:8184335108">Call Jaime (818) 433-5108</a>
</div>

<nav class="navbar ">
  <!-- Toggler/collapsibe Button -->
  <button class="text-center navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <i class="fas fa-th-large"></i><br>
  </button>

  <a href="<?php echo site_url();?>" class='mr-auto' ><img src="<?php echo get_theme_file_uri('images/logo.png');?>" alt="site logo"></a>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="px-3 nav-item">
        <a class="nav-link text-black" href="<?php echo site_url()?>">Home</a>
      </li>
      <li class="nav-item">
        <a class=" px-3 nav-link text-black" href="<?php echo site_url('/morgage-calculator/')?>">Loan Calculator</a>
      </li>
       <li class="nav-item dropdown">
           <a class="px-3 nav-link dropdown-toggle" href="<?php echo site_url('/real-estate-investing/')?>" id="navbardrop" data-toggle="dropdown">Real Estate Investments</a>
      
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('/real-estate-investing/buyers/')?>">Buyers</a>
            <a class="dropdown-item" href="<?php echo site_url('/real-estate-investing/sellers/');?>">Sellers</a>
          </div>

        </li>
      <li class="nav-item">
        <a class="px-3 nav-link" href="<?php echo site_url('/investment-books/');?>">Investment Books</a>
      </li>
      <li class="nav-item">
        <a class=" px-3 nav-link" href="<?php echo site_url('/about/');?>">About Jaime Dongo</a>
      </li>
      <!-- <li class="nav-item">
        <a class=" px-3 nav-link" href="<?php echo site_url('/blog/');?>">Blog</a>
      </li> -->
    </ul>
  </div>

   <!-- Brand -->

  <a class="px-3 navbar-brand text-center d-none d-md-block heading-font" href="tel:8184335108">Free Consultation (818) 433-5108</a>
</nav>
  