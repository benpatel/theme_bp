<!DOCTYPE html>
<html lang="en">
<head>
      <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/52e89fd43b.js"></script>
</head>
<body <?php body_class(); ?>>


<!-- header -->
<header id="main-header" class="pt-4 clearfix">
  <div class="container">
  <!-- Site Logo Start -->
  <div class="site-logo-block mobile-hidden">
    <a href="https://lmpixels.com/wp/aveo/">
      <h1 class="site-title pt-3">Ben<span> Patel</span></h1>
    </a>
  </div>
  <!-- Site Logo Ends -->

  <!-- Site Navigation Start -->
  <div class="site-nav">
    <?php wp_nav_menu(array('theme_location' => 'primary' )); ?>
  </div>

  <!-- Site Navigation End -->
  </div>
</header>
<!-- end header -->

<div class="site_wrapper container">  


