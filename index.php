<?php get_header(); ?>



  <div class="main-content">

    <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


          <?php the_content(); ?>


        <?php endwhile; endif;  //end loop?>




    <!--start projects-sidebar-->

    <div class="projects-sidebar">


    </div>

    <!--end projects-sidebar-->


  </div>
  <!--end main-content-->

</div>
<!--end wrapper-->


<?php get_footer(); ?>
