<?php
/**
 * The template used for displaying page content in page.php
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
	<div class="col-md-12">
<div class="col-md-2"></div>
<div class="col-md-10" style="padding-left:0px">
	
		<h1 class="entry-title"><?php the_title(); ?></h1>
	
	</div">
</div>
</header><!-- .entry-header -->
	<div class="entry-content">

		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'zerif-lite' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
		
			wp_link_pages( array(

				'before' => '<div class="page-links">' . __( 'Pages:', 'zerif-lite' ),

				'after'  => '</div>',

			) );

		?>

	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'zerif-lite' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>

</article><!-- #post-## -->