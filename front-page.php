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

        <div class="sidebar-project-categories">

              <div class="sidebar-h3"><h3>Project Categories</h3></div>

              <ul>
                <?php wp_list_categories( 'title_li' ); ?>
              </ul>
            </div>

            <div class="homepage-widget-item">
      <div class="sidebar-h3"><h3>Latest Projects</h3></div>
      <ul>

        <?php rewind_posts(); ?>
        <?php query_posts('showposts=2'); ?>
        <?php while (have_posts()) : the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

          <?php the_post_thumbnail('medium'); ?>

          <?php echo get_excerpt(); ?>

        <?php endwhile; ?>
      </ul>


    </div>

    <div class="homepage-photography">

      <div class=sidebar-h3><h3><a href="<?php echo get_permalink( get_page_by_path( 'photography' ) ) ?>">Photography</a></h3></div>


      <?php $query = new WP_Query( array( "name" => "photography", "post_type" => "page" ));  ?>

      <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

        <div class="homepage-photography-image"><?php the_post_thumbnail( 'medium' ); ?></div>
        <div class="homepage-photography-p"><?php echo get_excerpt(); ?></div>



      <?php endwhile; endif;  //end loop?>
      <?php wp_reset_postdata() ?>


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
