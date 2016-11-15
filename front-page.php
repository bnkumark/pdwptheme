<div class="menu-align-center">
<?php get_header(); 



?>

</header> <!-- / END HOME SECTION  -->
</div>
<div class="home-header-wrap">
<div style="background:#fff">
<div class="container">
<br>
<!--<h3 style="color:#039BE5;font-size:35px">Top articles on Pocket Doctor...</h3>
<div id="search" class="widget_search">

				<?php get_search_form(); ?>

			</div> -->
<div>
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