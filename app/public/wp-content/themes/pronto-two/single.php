<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title() ?></h1>
		<p><?php the_content() ?></p>
		<p><?php echo do_shortcode(get_the_content()) ?></p>
		<p><?php echo get_the_content() ?></p>
	<?php endwhile; ?>
<?php endif;

echo '<hr />';

global $post;

//var_dump( $post );

echo '<h1>' . $post->post_title . '</h1>'; //
echo '<p>' . $post->post_content . '</p>';

get_footer();
