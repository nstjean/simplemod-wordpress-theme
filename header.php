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
		<nav class="row">
			<div id="toggle">
				<i class="fas fa-bars"></i>
			</div>
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
						'container_id' => 'menu',
						'menu_class' => 'main-menu',
						'menu_id' => ''
						)
					);
				} ?>
			</section>

			<section class="top-section">
				<ul class="icon-menu">
					<li><a href="https://www.linkedin.com/in/nataliestjean/"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="https://github.com/nstjean/"><i class="fab fa-github-square"></i></a></li>
				</ul>
			</section>

		</nav>
	</header>