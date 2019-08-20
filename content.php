<?php
/**
 * The default template for displaying content
 */
?>

<?php if(is_single()) { ?>

	<article class="post">
		<h3 class="post-title">
			<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
	</article>

<?php } else { ?>

	<article class="post">
		<h3 class="post-title">
			<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
	</article>

<?php } ?>