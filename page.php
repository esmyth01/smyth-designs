<?php get_header(); ?>



  <div class="main-content">
<section>
    <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

          <?php the_post_thumbnail( array(706, 275) ); ?>
          <?php the_content(); ?>


        <?php endwhile; endif;  //end loop?>


        <?php $child_pages = $wpdb->get_results("SELECT *  FROM $wpdb->posts WHERE post_parent = ".$post->ID."    AND post_type = 'page' ORDER BY menu_order", 'OBJECT'); ?>
        <?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>

        <div class="page-list-child">

          <h3><a href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>"><?php echo $pageChild->post_title; ?></a></h3>

        <a href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">  <?php echo get_the_post_thumbnail($pageChild->ID, 'medium'); ?></a>

        <p> <?php the_excerpt(); ?></p>
        <a href="<?php echo  get_permalink($pageChild->ID); ?>" class="read-more" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">Read More >>></a>

        </div>
        <?php endforeach; endif;
        ?>


</section>


    <!--start page-sidebar-->

    <div class="homepage-sidebar">
<div class="child-page-sidebar">

      <div class="child-page-sidebar-h3"><h3><?php the_title(); ?></h3></div>

<?php echo wp_list_child_pages(); ?>

</div>

      <div class="homepage-sidebar-project-categories">

            <div class="homepage-sidebar-h3"><h3>Project Categories</h3></div>

            <ul>
              <?php wp_list_categories( 'title_li' ); ?>
            </ul>


          </div>









    </div><!--end homepage-sidebar-->

    <!--end page-sidebar-->






<?php get_footer(); ?>
