<?php get_header(); ?>

<div class="main-section">
    <?php


if (have_posts()) :
   while (have_posts()) :
      the_post();
      $post_date = get_the_date( 'j F, Y ' ); 

      

        ?>

  <div class="page-title">
    <h2><?php the_title(); ?></h2>
  </div>
  <div class="page-content">
    


        <div class="single-blog">
          
          <div class="post-title">
          <h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          </div>
            <div class="blog-image">
    
              <?php if ( has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                      <?php the_post_thumbnail('post-thumbnails',array( 'class' => 'img-responsive' )); ?>
                  </a>
              <?php endif; ?>
            </div>
            <div class="blog-text">
             <p class="blog-meta"><i class="fa fa-calendar fa-lg"></i> <?php echo $post_date; ?> <i class="fa-comments fa fa-lg"></i> <?php echo get_comments_number(); ?> Comments</p>
              
              <div class="excerpt">
              <?php the_excerpt() ?>
              </div>
              <p><a href="<?php the_permalink(); ?>">Read More <i  class="fa fa-long-arrow-right"></i> </a></p>
           
            </div>
          </div>


  </div>
  <div class="page-footer"></div>
  
  
        <?php
 



   endwhile;
endif;

?>
</div>

<?php get_footer(); ?>