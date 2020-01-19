

<header class="header">
	<div class="header__container container">

		<button class="hamburger" type="button">
			<span class="hamburger__box">
				<span class="hamburger__item"></span>
			</span>
		</button>

		<a href="<?php echo get_home_url(); ?>" class="header__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo">
		</a>

		<nav class="nav">
			<?php
				wp_nav_menu( array(
					'menu'=>'menu',
				    'theme_location'=>'menu',
				) );
			?>
		</nav>

		<a class="header__tel" href="tel:<?php the_field('phone_url', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
		<a href="#" class="order_open btn header__btn">Get a Quote</a>

	</div>
</header>

<main class="main">
