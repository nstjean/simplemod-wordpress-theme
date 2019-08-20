<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>
<body>

	<header>
		<div class="row">

			<section class="top-section top-title">
				<h1 id="site-title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"> <?php bloginfo('name'); ?> </a>
					<!-- <small><?php bloginfo('description'); ?></small> -->
				</h1>
				<?php if (has_nav_menu('primary') ) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container' => false,
						'container_class' => '',
						'container_id' => '',
						'menu_class' => 'right',
						'menu_id' => ''
						)
					);
				} ?>
			</section>

			<section class="top-section icon-menu">
				<ul>
					<li><i class="fab fa-linkedin"></i></li>
					<li><i class="fab fa-github-square"></i></li>
				</ul>
			</section>

		</div>
	</header>