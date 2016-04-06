<?php get_header(); ?>



  <div class="main-content">
    <section>



      <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

<div class="page-list-child">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<small>

Posted on <?php the_time('F j, Y'); ?>
&nbsp;by <?php the_author(); ?>
&nbsp;in <?php the_category(', '); ?>

</small>
<?php the_post_thumbnail( 'medium' ); ?>
<p> <?php echo substr(get_the_content(), 0,200); ?>...</p>
<a href="<?php the_permalink(); ?>" class="read-more" >Read More >>></a>

</div>
<?php endwhile; endif;  //end loop?>


</section>
    <!--start cat-sidebar-->

    <div class="homepage-sidebar">

      <div class="child-page-sidebar-h3"><h3><?php single_cat_title(); ?></h3></div>


      <div class="homepage-sidebar-project-categories">

            <div class="homepage-sidebar-h3"><h3>Project Categories</h3></div>

            <ul>
              <?php wp_list_categories( 'title_li' ); ?>
            </ul>


          </div>


    </div>

    <!--end cat-sidebar-->


  </div>
  <!--end main-content-->

</div>
<!--end wrapper-->


<?php get_footer(); ?>
