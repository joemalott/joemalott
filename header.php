<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() . "/favicon.png"; ?>">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	 <?php wp_head(); ?>
</head>
<body>

    <div class="nav" id="main-menu">
        <div class="container">
          
          <div class="social text-center">

          <a href="http://github.com/joemalott"><i class="fa fa-github" aria-hidden="true"></i></a><br>
          <a href="http://behance.net/joemalott"><i class="fa fa-behance" aria-hidden="true"></i></a><br>
          <a href="http://vimeo.com/joemalott"><i class="fa fa-vimeo" aria-hidden="true"></i></a>


        </div>
          
          <img src="<?php echo get_stylesheet_directory_uri() . "/images/Logo.png"; ?>" alt="" style="height:20px; width:auto; margin: 0; padding: 0; border-radius: 0;">
          <div class=" nav-logo"><a href="/">Joe Malott</a></div>
          <div class=" nav-item <?php if ( is_front_page() ) { echo'animated fadeInDown'; } ?>" style="<?php if ( is_front_page() ) { echo'-webkit-animation-delay: .4s;-moz-animation-delay: .4s;'; } ?>"><a href="/Work">Work</a></div>
          <div class=" nav-item <?php if ( is_front_page() ) { echo'animated fadeInDown'; } ?>" style="<?php if ( is_front_page() ) { echo'-webkit-animation-delay: .8s;-moz-animation-delay: .8s;'; } ?>"><a href="/About">About</a></div>
          <div class=" nav-item <?php if ( is_front_page() ) { echo'animated fadeInDown'; } ?>" style="<?php if ( is_front_page() ) { echo'-webkit-animation-delay: 1.2s;-moz-animation-delay: 1.2s;'; } ?>"><a href="/Contact">Contact</a></div>
          <div class=" nav-item <?php if ( is_front_page() ) { echo'animated fadeInDown'; } ?>" style="<?php if ( is_front_page() ) { echo'-webkit-animation-delay: 1.6s;-moz-animation-delay: 1.6s;'; } ?>"><a id="parent" href="/Thoughts">Thoughts</a></div>
         
          
        </div>
    </div>

    



  <div class="container">


    


