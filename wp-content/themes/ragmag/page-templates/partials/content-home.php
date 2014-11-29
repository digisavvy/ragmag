
<article class="home post-id-<?php echo get_the_ID(); ?>">

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
