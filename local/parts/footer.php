
</main>

<footer class="footer">
	<div class="footer__container container">

		<div class="footer__copy">
			<p class="company-name">© 2019, DustBusters</p>
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/footer-logo.png" alt="">
			</a>
		</div>

		<div class="footer__list">
			<?php 
				wp_nav_menu( array(
					'menu'=>'menu',
				    'theme_location'=>'menu',
				) );
			?>
			<br>
			<?php 
				wp_nav_menu( array(
					'menu'=>'footer-menu',
				    'theme_location'=>'menu',
				) );
			?>
		</div>

		<div class="footer__information">

			<div class="footer__item-info">
				<span>15854 E Otero Cir., Centennial, CO 80112</span>
				<a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
			</div>

			<div class="footer__item-sosial">
				<a href="tel:<?php the_field('phone_url', 'option'); ?>"><b><?php the_field('phone', 'option'); ?></b></a>
				<div class="footer__item-sosial_list">
					<a href="<?php the_field('faceboock', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/faceboock.png" alt="">
					</a>
					<a href="<?php the_field('twitter', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/tweeter.png" alt="">
					</a>
					<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/whatsapp.png" alt="">
					</a>
				</div>
			</div>

		</div>

	</div>
</footer>