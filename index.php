<?php get_header(); ?>
<main>
	<div class="row">
		<div class="col-main">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			<?php wp_link_pages() ?>

		</div>
		<?php get_sidebar(); ?>
	</div>
</main>
<?php get_footer(); ?>
