<?php get_header(); ?>
  <div class="container main"> 
    <?php get_sidebar(); ?>       
      <div class="col-md-9"> 
        <div class="inner"> 

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>

          <?php the_content(); ?>

          <?php endwhile; else: ?>
            
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>
            <p>No content is appearing for this page!</p>
          <?php endif; ?>
        </div><!--inner-->
      </div><!--col-md-9-->
    <?php get_sidebar( 'blog'); ?>


<?php get_footer(); ?>