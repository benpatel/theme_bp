<?php get_header(); ?>

<div class="main-section page-section">
<?php
	if(have_posts()):

		while (have_posts()): the_post();
		?>

  <div class="page-title">
    <h2><?php wp_title(''); ?></h2>
  </div>
  <div class="page-content">
  	   
	<?php the_content(); ?>
  </div>
  <div class="page-footer"></div>
  <?php
endwhile;
endif;
  ?>
</div>

<?php get_footer(); ?>
