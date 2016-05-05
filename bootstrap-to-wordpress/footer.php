      <div class="clearfix"></div>
      <div class="container footie">

      <footer>
        <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>© 2012 Fenton Veterinary Clinic. All rights reserved. If you have any web issues, please <a href="mailto:mbuecking@thinkvolution.com?&subject=FVC%20Website%20Question">contact Webmaster</a> Site design by <a href="http://www.thinkvolution.com/" target="_new">Volution</a></p>
      </footer>
   </div><!-- /container -->


	<div class="modal fade" id="contactForm">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">Contact Us</h4>
	      </div>
	      <div class="modal-body">
	      	<?php 

				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }

	      	?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


    <?php wp_footer(); ?>
	</div><!--main.content-->
  </body>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery_002.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/sfdelay.js"></script>
		<!-- include jQuery library -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>

<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="ie.css">
		<![endif]-->
        
<!--[if lt IE 7]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
		<![endif]-->

				<!--script type="text/javascript" src="IE6helper.js"></script-->
		<script type="text/javascript">
			function clearField(whichField)
			{
				document.getElementById(whichField).value = "";
			}
		</script>	</script>

</html>
