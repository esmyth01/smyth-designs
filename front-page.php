<?php get_header(); ?>


  <div class="flexslider">

  </div>

  <div class="main-content">

    <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


          <?php the_content(); ?>


        <?php endwhile; endif;  //end loop?>






    <div class="homepage-sidebar">


    </div><!--end homepage-sidebar-->


  </div><!--end main-content-->
</div><!--end wrapper-->


<?php get_footer(); ?>
