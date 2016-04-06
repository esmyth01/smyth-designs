<?php get_header(); ?>



  <div class="main-content">
<section>
    <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

          <?php the_post_thumbnail( array(706, 275) ); ?>
          <?php the_content(); ?>


        <?php endwhile; endif;  //end loop?>



</section>
    <!--start single-sidebar-->

    <div class="homepage-sidebar">
<div class="child-page-sidebar">



<?php echo wp_list_child_pages(); ?>

</div>

      <div class="homepage-sidebar-project-categories">

            <div class="homepage-sidebar-h3"><h3>Project Categories</h3></div>

            <ul>
              <?php wp_list_categories( 'title_li' ); ?>
            </ul>


          </div>









    </div>

    <!--end single-sidebar-->


  </div>
  <!--end main-content-->

</div>
<!--end wrapper-->


<?php get_footer(); ?>
