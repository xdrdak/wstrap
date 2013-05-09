<?php
/**
 * IMPORTANT NOTE
 * This is where we store our row for the pages as well as define the
 * 
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * 
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="row">
		<div id="primary">
			<div id="content" role="main" class="span9">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
		<div class="span3">
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>