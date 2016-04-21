<!DOCTYPE html>
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
  </head>

  <body <?php body_class(); ?>>
    <div class="wrapper">
      <div class="headerone container" style="height:158px;">
        <div class="row">
            <div class="col-sm-3">
              <div id="lefthead">
                <div class="slideshow"> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_01.jpg" width="195" height="157" /> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_02.jpg" width="195" height="157" /> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_03.jpg" width="195" height="157" /> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_04.jpg" width="195" height="157" /> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_05.jpg" width="195" height="157" /> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_06.jpg" width="195" height="157" /> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_07.jpg" width="195" height="157" /> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_08.jpg" width="195" height="157" /> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_09.jpg" width="195" height="157" /> 
                  <img src="wp-content/themes/bootstrap-to-wordpress/images/dog_10.jpg" width="195" height="157" /> 
                </div>
              </div> 
            </div>
          <div class="col-sm-6 topmid">
              <div class="row">
                <div class="col-sm-12">
                  <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><h2><?php bloginfo( 'name' ); ?></h2></a>
                  <h4>(810) 629-1564</h4>
                </div>
              </div>
              <div class="row doctors">
                <div class="col-sm-6"><h3>Jessica R. Rascuzzo, B.S. D.V.M.</h3></div>
                <div class="col-sm-6"><h3>Paul R. Temblay, D.V.M.</h3></div>
              </div>
              <div class="row bbb">
                <div class="col-sm-12"><p>Celebrating over 69 years or providing<br />our very best for you and your pet.</p>
                </div>
              </div>
          </div>
          <div class="col-sm-3">
            <div id="righthead">
              <div class="slideshow"> 
                <img src="wp-content/themes/bootstrap-to-wordpress/images/cat_02.jpg" width="195" height="157" /> 
                <img src="wp-content/themes/bootstrap-to-wordpress/images/cat_03.jpg" width="195" height="157" /> 
                <img src="wp-content/themes/bootstrap-to-wordpress/images/cat_04.jpg" width="195" height="157" /> 
                <img src="wp-content/themes/bootstrap-to-wordpress/images/cat_05.jpg" width="195" height="157" /> 
                <img src="wp-content/themes/bootstrap-to-wordpress/images/cat_06.jpg" width="195" height="157" /> 
                <img src="wp-content/themes/bootstrap-to-wordpress/images/cat_07.jpg" width="195" height="157" /> 
                <img src="wp-content/themes/bootstrap-to-wordpress/images/cat_08.jpg" width="195" height="157" /> 
                <img src="wp-content/themes/bootstrap-to-wordpress/images/cat_09.jpg" width="195" height="157" /> 
                <img src="wp-content/themes/bootstrap-to-wordpress/images/cat_10.jpg" width="195" height="157" />  
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>

          <div class="row">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="container">
                <div class="navbar-header">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>-->
                </div

                <div class="navbar-collapse collapse">

                  <?php 
                    $args = array(
                      'menu'        => 'header-menu',
                      'menu_class'  => 'nav navbar-nav',
                      'container'   => 'false'
                    );
                    wp_nav_menu( $args );
                  ?>

                </div><!--/.navbar-collapse -->
                <div>
              </div>
            </div>
        </div><!--end headerone -->
      