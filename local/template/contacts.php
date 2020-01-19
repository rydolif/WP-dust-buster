<?php
	/**
		* Template name: Contacts
	*/
 ?>

<?php get_header(); ?>

	<section class="contacts--page contacts">
		<div class="contacts__container container">

			<div class="contacts--page__content contacts__content">
				<b>what are you waiting for?</b>
				<h2>Contact Us For a Free Quote!</h2>
				<p>
					If you have any questions or you’d like
					<br> to enquire about our services, we’re
					<br> happy to help!
				</p>
				<div class="contacts--page__info">
					<p>15854 E Otero Cir., <br>Centennial, CO 80112</p>
					<p><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></p>
				</div>
				<div class="contacts--page__info">
					<p><b>
						<a href="tel:<?php the_field('phone_url', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
					</b></p>
					<p class="contacts--page__soc">
						<a href="<?php the_field('faceboock', 'option'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/contacts__fb.png" alt="">
						</a>
						<a href="<?php the_field('twitter', 'option'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/contacts__tv.png" alt="">
						</a>
						<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/contacts__wb.png" alt="">
						</a>
					</p>
				</div>
			</div>

			<form class="contacts--page__form contacts__form form">
				<div class="form__line">
					<input type="name" name="name" placeholder="Name*" required>
				</div>
				<div class="form__line">
					<input type="tel" name="phone" placeholder="phone number*" required>
				</div>
				<div class="form__line">
					<input type="email" name="mail" placeholder="Email*" required>
				</div>
				<p class="form__text">
					By clicking Submit button you agree to the processing of yor personal data
				</p>
				<button class="form__btn btn">submit</button>
			</form>

		</div>
	</section>

<?php get_footer(); ?>