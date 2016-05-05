<?php
/**
 * The Header template for heads withought slide show
* Displays all of the <head>
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'> 
  <link href='https://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet' type='text/css'>
  </head>

  <body <?php body_class(); ?> >
      <div class="headerone container">
        <div class="row">
            <div class="hidden-sm visible-md-block col-md-3 visible-lg-block col-lg-3">
              <div id="lefthead">
                <div class="slideshow"> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_01.jpg" width="195" height="157" /> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_02.jpg" width="195" height="157" /> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_03.jpg" width="195" height="157" /> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_04.jpg" width="195" height="157" /> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_05.jpg" width="195" height="157" /> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_06.jpg" width="195" height="157" /> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_07.jpg" width="195" height="157" /> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_08.jpg" width="195" height="157" /> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_09.jpg" width="195" height="157" /> 
                  <img src="<?php bloginfo('template_directory');?>/images/dog_10.jpg" width="195" height="157" /> 
                </div>
              </div> 
            </div>
          <div class="col-sm-12 col-md-6 col-lg-6 topmid">
              <div class="row">
                <div class="col-sm-12">
                  <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><h2><?php bloginfo( 'name' ); ?></h2></a>
                  <h4>(810) 629-1564</h4>
                </div>
              </div>
              <div class="row doctors">
                <div class="col-lg-6 col-md-6 col-sm-12"><h3>Jessica R. Pascuzzo, B.S.&nbsp;D.V.M.</h3></div>
                <div class="col-lg-6 col-md-6 col-sm-12"><h3>Paul R. Temblay, D.V.M.</h3></div>
              </div>
              <div class="row bbb">
                <div class="col-sm-12"></div><p>Celebrating&nbsp;over&nbsp;69&nbsp;years&nbsp;of providing our very best&nbsp;for&nbsp;you&nbsp;and&nbsp;your&nbsp;pet.</p></div>
              <div class="bbbimage"></div>
          </div><!--topmid-->
          <div class="hidden-sm visible-md-block col-md-3 visible-lg-block col-lg-3">
            <div id="righthead">
              <div class="slideshow"> 
                <img src="/wp-content/themes/bootstrap-to-wordpress/images/cat_02.jpg" width="195" height="157" /> 
                <img src="/wp-content/themes/bootstrap-to-wordpress/images/cat_03.jpg" width="195" height="157" /> 
                <img src="/wp-content/themes/bootstrap-to-wordpress/images/cat_04.jpg" width="195" height="157" /> 
                <img src="/wp-content/themes/bootstrap-to-wordpress/images/cat_05.jpg" width="195" height="157" /> 
                <img src="/wp-content/themes/bootstrap-to-wordpress/images/cat_06.jpg" width="195" height="157" /> 
                <img src="/wp-content/themes/bootstrap-to-wordpress/images/cat_07.jpg" width="195" height="157" /> 
                <img src="/wp-content/themes/bootstrap-to-wordpress/images/cat_08.jpg" width="195" height="157" /> 
                <img src="/wp-content/themes/bootstrap-to-wordpress/images/cat_09.jpg" width="195" height="157" /> 
                <img src="/wp-content/themes/bootstrap-to-wordpress/images/cat_10.jpg" width="195" height="157" />  
              </div>
            </div>
          </div>
        </div><!--row-->
        <div class="clearfix"></div>
        <div class="row">
          <nav>
            <div class="navbar navbar-fixed-top">
              <div class="navbar-inner from-top">
                <div class="container">
                  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>            
                  <div class="nav-collapse collapse">  
                      <?php 
                      $args = array(
                        'menu'        => 'header-menu',
                        'menu_class'  => 'nav navbar-nav',
                        'container'   => 'false'
                      );
                      wp_nav_menu( $args );
                    ?>
                </div><!--/.navbar-collapse -->
            </div><!--container-->
          </nav>
        </div><!--row-->
      </div><!--end headerone -->
      