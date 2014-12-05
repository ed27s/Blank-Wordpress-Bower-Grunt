<?php
/**
 * This file is runs as the standard post format.
 *
 * @packaga
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Add the featured image if any -->
	<?php get_template_part('format','post_thumbnail'); ?>

	<!-- Wrap the title etc in a header for html5 goodness -->
	<header class="post-header">
		<h1>
			<a href="<?php the_permalink() ?>">
				<?php the_title(); ?>
			</a>
		</h1>
	</header>


	<!-- Get our post meta -->
	<?php get_template_part('format','meta'); ?>

	<!-- Get the content of our post -->
	<div class="standard-entry entry">

		<?php the_content(); ?>
		
	</div>

	<!-- Load the comments template -->
	<?php themetacular_load_comments_template(); ?>

</article>