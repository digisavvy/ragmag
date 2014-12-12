
<article class="home post-id-<?php echo get_the_ID(); ?>">

	<?php
	if ( has_post_thumbnail() ) {
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
		echo '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" >';
		echo get_the_post_thumbnail( $post->ID, 'homepage-thumb' );
		echo '</a>';
	}
	?>

	<div class='articles'>

		<a href="<?php echo get_permalink(); ?>" title="Read About <?php echo get_the_title( ); ?>"><?php echo get_the_title(); ?></a>
		<br>
		by <span class="the-author">
					<?php
						$author = get_the_author();
						echo '<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" title="An article by '.$author.'">'.$author.'</a>';
					?>
				</span>
	</div>

</article >
