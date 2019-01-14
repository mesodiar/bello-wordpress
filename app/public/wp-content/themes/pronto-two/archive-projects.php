<?php get_header(); ?>
    <h1>This page gathers all Projects post type</h1>
    <div class="content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div>
				<h1><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h1>
				<p><?php the_content() ?></p>
			</div>
			<?php endwhile; ?>
		<?php endif ?>
	</div>
<?php get_footer(); ?>
