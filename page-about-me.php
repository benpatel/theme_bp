<?php get_header(); ?>

<div class="main-section page-section">
<?php
  if(have_posts()):

    while (have_posts()): the_post();
    ?>

  <div class="page-title">
    <h2>Front End Web Developer</h2>
  </div>
  <div class="page-content col-12">
    <div id="about-me-page" class="row m-0">
        <div class="col-lg-12">
          <div  class="resume-details" >
            
            <div class="about-me-pic">
                <?php the_post_thumbnail(); ?>
                <div class="about-me-contact">
                    <h4 class="text-center mb-0 pb-0">Binal Patel</h4>
                <p class="text-center mt-0 pt-0 text-muted mb-3">AKA : Ben Patel</p>
                <p><b><i class="fas fa-envelope-square"></i> </b> binal1510@gmail.com</p>
                <p><b><i class="fas fa-phone-square-alt"></i> </b> (516) 444 9666</p>
                <p class="text-center mt-2 mb-3"><i class="fa-2x fab fa-github-square"></i> <i class="fa-2x fab fa-linkedin"></i></p>
                </div>
            </div>

            <div class="about-me-details">

              

                <h4 class="text-center"></h4>
                 <?php the_content(); ?>
                  

            </div>

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
