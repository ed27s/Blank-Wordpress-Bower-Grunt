<?php get_header(); ?>

<?php if(have_posts()) : ?>
	
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

	<h1>
		<?php
		if ( is_category() ) :
			_e( 'Category / ', 'themetacular' );
		single_cat_title();

		elseif ( is_tag() ) :
			_e( 'Tag / ', 'themetacular' );
		single_tag_title();

		elseif ( is_author() ) :
			printf( __( '<span>Author /</span> %s', 'themetacular' ), '<span class="vcard">' . get_the_author() . '</span>' );

		elseif ( is_day() ) :
			printf( __( 'Day / %s', 'themetacular' ), '<span>' . get_the_date() . '</span>' );

		elseif ( is_month() ) :
			printf( __( 'Month / %s', 'themetacular' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'themetacular' ) ) . '</span>' );

		elseif ( is_year() ) :
			printf( __( 'Year / %s', 'themetacular' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'themetacular' ) ) . '</span>' );

		elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
			_e( 'Asides', 'themetacular' );

		elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
			_e( 'Galleries', 'themetacular');

		elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
			_e( 'Images', 'themetacular');

		elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
			_e( 'Videos', 'themetacular' );

		elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
			_e( 'Quotes', 'themetacular' );

		elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
			_e( 'Links', 'themetacular' );

		elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
			_e( 'Statuses', 'themetacular' );

		elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
			_e( 'Audios', 'themetacular' );

		elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
			_e( 'Chats', 'themetacular' );

		else :
			_e( 'Archives', 'themetacular' );

		endif;
		?>
	</h1>

	<?php while(have_posts()) : the_post(); ?>

		<article class="post" id="<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_content(); ?>
			</div>

		</article> <!-- .post -->

	<?php endwhile; else : ?>

	<div class="post">
		
		<h2>Page Not Found</h2>
		
		<p>Looks like the page you're looking for isn't here anymore. Try browsing the <a href="">categories</a>, <a href="">archives</a>, or using the search box below.</p>
		
		<?php include(TEMPLATEPATH.'/searhform.php'); ?>
		
	</div> <!-- .post -->

<?php endif; ?>

<div class="navigation clear">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>