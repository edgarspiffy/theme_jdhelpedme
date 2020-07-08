<?php get_header();while(have_posts()){the_post();?>

<div class="break-half"></div>

<div class="container-fluid break-half page-title">
  <div class="container">
    <div class="row m-0">
    <div class="col">
      <h1><?php the_title();?></h1>
    </div>
  </div>
  </div>
</div>


<div class="container break">
    <div class="row m-0">
    <div class="col-12 col-md-6">
      <?php the_content();?>
    </div>
    <div class="col-12 col-md-6">
       <img class='img-fluid shade' src="<?php echo get_theme_file_uri('/images/jaime-about-crop.jpg'); ?>" alt="">
    </div>
  </div>
</div>
<!-- IMAGE CATEGORY -->
<!-- IMG-LINKS -->
<div class="container-fluid image-categories">
  <?php echo get_template_part('template-parts/box-images');?>
</div>






<?php } get_footer();?>