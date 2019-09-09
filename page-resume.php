<?php get_header(); ?>

<div class="main-section page-section">
<?php
	if(have_posts()):

		while (have_posts()): the_post();
		?>

  <div class="page-title">
    <h2><?php wp_title(''); ?></h2>
  </div>
  <div class="page-content col-12">
    <div id="resume-page" class="row m-0">
        <div class="col-lg-12">
          <div  class="resume" >
               <?php the_content(); ?>
          </div>
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
