<?php get_header(); ?>
	<button id="verbose">Verbose!</button>
	<div class="content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div>
				<h1><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h1>
				<p><?php the_content() ?></p>
				<p>Meta: <?php echo get_post_meta( get_the_id(), 'my_custom_data', true); ?></p>
			</div>
			<?php endwhile; ?>
		<?php endif ?>
		<h1>Pronto Two</h1>
		<p>This is paragraph. <?php echo 'Yeah'; ?></p>
	</div>
<?php get_footer(); ?>
<?php
//global $template;
//var_dump( $template );

//global $wp_query;
//var_dump( $wp_query );
?>
