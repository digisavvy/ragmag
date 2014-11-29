<?php
/**
 * Template Name: Home Page Template
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package digistarter
 */

get_header();

	$args = array(
		'post_status' 	       => 'publish',
		'post_type'              => 'post',
		'order'                  => 'ASC',
		'orderby'                => 'menu_order',
		'posts_per_page'				=> 12,
	);

	$blog_posts = new WP_Query($args);

?>


<div id="primary" class="content-area" role="main">

<?php if($blog_posts->have_posts()) : ?>

	 <?php while($blog_posts->have_posts()) : $blog_posts->the_post() ?>

	 	<?php  get_template_part( 'page-templates/partials/content', 'home' ); ?>

	 <?php endwhile ?>

<?php endif ?>

</div><!-- #primary -->


<div id="secondary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
<div id="tertiary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>

<?php

get_footer();
