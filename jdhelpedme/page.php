<?php get_header();while(have_posts()){the_post();?>

  <!-- Banner Image Logic -->
  <?php $image = get_field('top-image');
        if($image !== null){
         $image = $image['url'];?>

    <!-- Top Image -->
    <div style="background-image:url('<?php echo $image?>');?>');" class="container-fluid page-header"></div>

  <?php } else { ?>
    <div class="break"></div>
   <?php } ?> 


  





<!-- Title -->
<div class="container-fluid break-half page-title m-0 p-0">
  <div class="container">
    <div class="row m-0">
    <div class="col">
      <h1 class='pb-1'><?php the_title();?></h1>
    </div>
  </div>
  </div>
</div>



<!-- Loan Calculator -->
<?php if(is_page(19)){ ?>

 <div class="container">
 <?php echo get_template_part('template-parts/calculator');?>
 </div>



<?php };?>






<!-- Content -->
<?php
 $pageID = get_option('page_on_front');
 $theParent = wp_get_post_parent_id(get_the_ID());
 if($theParent){ ?>

<div class="container break">
    <div class="row  m-0">
    <div class="col-12 col-md-10">
      <?php the_content();?>
    </div>
    <div class="col-12 col-md-2 side-nav-border">
      <?php  get_template_part('template-parts/side-nav'); ?>
    </div>
  </div>
</div>


 <?php } else { ?>


<div class="container break">
    <div class="row  m-0">
    <div class="col-12">
      <?php the_content();?>
    </div>
  </div>
</div>







<?php  } ?>



<!-- Copy  -->








<?php } get_footer();?>