<?php get_header(); ?>
	<div class="content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div>
				<h1><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h1>
				<p><?php the_content() ?></p>
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
