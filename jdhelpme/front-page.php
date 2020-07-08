<?php get_header();while(have_posts()){the_post();?>

<header class='container-fluid jaime-image break'>
  <div class="header-content">
    <div><span class="cursive">Jaime Dongo</span></div>
    <h1><?php the_title();?></h1>
    <p><?php echo get_field('header-copy'); ?></p>
    <a href="#" class='button'>CLICK TO GET YOUR FREE CONSULTATION</a>
  </div>
</header>


<!-- COPY 1 -->
<div class="container copy-1 break">
  <?php echo get_field('copy-field-1'); ?>
</div>



<!-- IMG-LINKS -->
<div class="container-fluid image-categories break">
  <?php echo get_template_part('template-parts/box-images');?>
</div>















<h2>TEST</h2>




<!-- COPY 2 -->
<div class="container copy-2 break">
  <div class="row m-0">
    <div class="col-12 col-md-6">
        <?php echo get_field('copy-field-2'); ?>
    </div>
    <div class="col-12 col-md-6">
      <img src="<?php echo get_theme_file_uri('/images/jaime-about-crop.jpg'); ?>" class='img-fluid mx-auto d-block' alt="Jaime Dongo Photo">
    </div>
  </div>
</div>

















<!-- CONTACT FORM -->

    

<?php } get_footer();?>
