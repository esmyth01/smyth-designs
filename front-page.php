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

      <!--Start homepage sidebar-->


      <div class="homepage-sidebar">

        <div class="homepage-sidebar-project-categories">

              <div class="homepage-sidebar-h3"><h3>Project Categories</h3></div>

              <ul>
                <?php wp_list_categories( 'title_li' ); ?>
              </ul>
            </div>

            <div class="homepage-sidebar-widget-item">
      <div class="homepage-sidebar-h3"><h3>Latest Projects</h3></div>
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

    <div class="homepage-sidebar-photography">

      <div class="homepage-sidebar-h3"><h3><a href="<?php echo get_permalink( get_page_by_path( 'photography' ) ) ?>">Photography</a></h3></div>


      <?php $query = new WP_Query( array( "name" => "photography", "post_type" => "page" ));  ?>

      <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

        <div class="homepage-sidebar-photography-image"><?php the_post_thumbnail( 'medium' ); ?></div>
        <div class="homepage-sidebar-photography-p"><?php echo get_excerpt(); ?></div>



      <?php endwhile; endif;  //end loop?>
      <?php wp_reset_postdata() ?>

      <div class="homepage-sidebar-project-categories">

            <div class="homepage-sidebar-h3"><h3>Find Me!</h3></div>

          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="facebook" class="social-image"/></a>
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="linkedin" class="social-image"/></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/github.png" alt="github" class="social-image"/></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/email.png" alt="email" class="social-image"/></a>


          </div>


    </div>


      </div><!--end homepage-sidebar-->
<!--Start main content homepage-->



      <div class="homepage-main-content">

<div class="homepage-main-content-h3"><h3><a href="<?php echo esc_url( $category_websites_link ); ?>" title="Websites">Websites</a></h3></div>
        <div class="homepage-main-content-inner">
          <?php $query = new WP_Query( array( "category_name" => "websites", "post_type" => "post", "posts_per_page" => 1));  ?>

        <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

          <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
          <a href="<?php echo get_permalink($post->ID); ?>"><h4><?php the_title();?></h4></a>

        <?php endwhile; endif;  //end loop?>
        <?php wp_reset_postdata() ?>
        </div>
        <div class="homepage-main-content-inner">

          <?php $query = new WP_Query( array( "category_name" => "websites", "post_type" => "post", "posts_per_page" => 1, "offset" => 1));  ?>

        <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

          <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
          <a href="<?php echo get_permalink($post->ID); ?>"><h4><?php the_title();?></h4></a>

        <?php endwhile; endif;  //end loop?>
        <?php wp_reset_postdata() ?>

        </div>

      </div>

      <div class="homepage-main-content">

        <div class="homepage-main-content-h3"><h3><a href="<?php echo get_permalink( get_page_by_path( 'design' ) ) ?>">Design</a></h3></div>

        <div class="homepage-main-content-inner">

          <?php $query = new WP_Query( array( "name" => "architecture", "post_type" => "page" ));  ?>

          <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

          <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
          <a href="<?php echo get_permalink($post->ID); ?>"><h4><?php the_title();?></h4></a>



          <?php endwhile; endif;  //end loop?>
          <?php wp_reset_postdata() ?>

        </div>

        <div class="homepage-main-content-inner">

          <?php $query = new WP_Query( array( "name" => "logos", "post_type" => "page" ));  ?>

          <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

            <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
            <a href="<?php echo get_permalink($post->ID); ?>"><h4><?php the_title();?></h4></a>



          <?php endwhile; endif;  //end loop?>
          <?php wp_reset_postdata() ?>

        </div>

      </div>

      <div class="homepage-main-content">

        <div class="homepage-main-content-h3"><h3><a href="<?php echo get_permalink( get_page_by_path( 'development' ) ) ?>">Development</a></h3></div>

        <div class="homepage-main-content-inner">

          <?php $query = new WP_Query( array( "name" => "php", "post_type" => "page" ));  ?>

          <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

            <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
            <a href="<?php echo get_permalink($post->ID); ?>"><h4><?php the_title();?></h4></a>



          <?php endwhile; endif;  //end loop?>
          <?php wp_reset_postdata() ?>



        </div>


        <div class="homepage-main-content-inner">

          <?php $query = new WP_Query( array( "name" => "javascript", "post_type" => "page" ));  ?>

          <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

            <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
          <a href="<?php echo get_permalink($post->ID); ?>"><h4><?php the_title();?></h4></a>



          <?php endwhile; endif;  //end loop?>
          <?php wp_reset_postdata() ?>

        </div>

      </div>

      <div class="homepage-main-content">

        <div class="homepage-main-content-h3"><h3><a href="<?php echo esc_url( $category_research_link ); ?>" title="Research">Research</a></h3></div>

        <div class="homepage-main-content-inner">

          <?php $query = new WP_Query( array( "category_name" => "research", "post_type" => "post", "posts_per_page" => 1));  ?>

        <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

          <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
          <a href="<?php echo get_permalink($post->ID); ?>"><h4><?php the_title();?></h4></a>

        <?php endwhile; endif;  //end loop?>
        <?php wp_reset_postdata() ?>

        </div>

        <div class="homepage-main-content-inner">

          <?php $query = new WP_Query( array( "category_name" => "research", "post_type" => "post", "posts_per_page" => 1, "offset" => 1));  ?>

        <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

          <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
          <a href="<?php echo get_permalink($post->ID); ?>"><h4><?php the_title();?></h4></a>

        <?php endwhile; endif;  //end loop?>
        <?php wp_reset_postdata() ?>

        </div>



      </div>

      <!--End main content homepage-->














<?php get_footer(); ?>
