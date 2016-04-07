<?php get_header(); ?>



  <div class="main-content">

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </div>


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

          <div class="homepage-sidebar-project-categories">

                <div class="homepage-sidebar-h3"><h3>Find Me!</h3></div>

                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="facebook" class="social-image"/></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="linkedin" class="social-image"/></a>
                  <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/github.png" alt="github" class="social-image"/></a>
                  <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/email.png" alt="email" class="social-image"/></a>


              </div>









    </div>

    <!--end single-sidebar-->


  </div>
  <!--end main-content-->

</div>
<!--end wrapper-->


<?php get_footer(); ?>
