<div class="menu-align-center">
<?php get_header(); 



?>

</header> <!-- / END HOME SECTION  -->
</div>
<div class="home-header-wrap">
<div class="header-content-wrap" style="background:#fff">
<div class="container">
<h3 style="color:#039BE5;font-size:35px">Welcome to Pocket Doctor, search a disease</h3>
<div id="search" class="widget_search">

				<?php get_search_form(); ?>

			</div> 
<div>
<br>
<br>
<br>
<?php echo do_shortcode('[ajax_load_more post_type="page"]');
?>
 </div>
</div>
</div>
</div>
<?php

	/* OUR FOCUS SECTION */

	
	/* RIBBON WITH RIGHT SIDE BUTTON */



get_footer(); ?>