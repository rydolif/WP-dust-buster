
<div class="modal" id="order">
	<button class="modal__close order_close" type="button">
		<span></span>
		<span></span>
	</button>
	<form action="sendmail.php" class="modal__form form">
		<input type="hidden" name="subject" value="Обратный звонок">
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

<div class="modal modal__thanks" id="thanks">
	<button class="modal__close thanks_close" type="button">
		<span></span>
		<span></span>
	</button>
	<h3>Спасибо за доверие!</h3>
	<p>Мы обязательно с вами свяжемся!</p>
</div>