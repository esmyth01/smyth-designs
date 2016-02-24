<?php get_header(); ?>


  <div class="flexslider">
  <?php echo do_shortcode('[recent_post_slider design="design-2"]'); ?>

  </div>

  <div class="main-content">
    <section>

    <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


          <?php the_content(); ?>


        <?php endwhile; endif;  //end loop?>



      </section>

      <div class="homepage-sidebar">

        <div class="homepage-projects">

              <div class="homepage-projects-h3"><h3>Projects</h3></div>

              <ul>
                <?php wp_list_categories( 'title_li' ); ?>
              </ul>
            </div>

      </div><!--end homepage-sidebar-->

      <div class="homepage-websites">
      </div>

      <div class="homepage-applications">
      </div>

      <div class="homepage-research">
      </div>

      <div class="homepage-case-studies">
      </div>











<?php get_footer(); ?>
