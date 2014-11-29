
<article class="home post-id-<?php echo get_the_ID(); ?>">

	<div class='articles'>
		<a href="<?php echo get_permalink(); ?>" title="Read About <?php echo get_the_title( ); ?>"><?php echo get_the_title(); ?></a>
		<br>
		by <span class="the-author"><?php $author = get_the_author();
				echo $author; ?></span>

	</div>

</article >
