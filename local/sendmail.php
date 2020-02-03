<?php
	$SITE_TITLE = 'Message';
	$SITE_DESCR = '';

	if ( isset($_POST) ) {
		$name = htmlspecialchars(trim($_POST['name']));
		$phone = htmlspecialchars(trim($_POST['phone']));
		$mail = htmlspecialchars(trim($_POST['mail']));
		$textarea = htmlspecialchars(trim($_POST['textarea']));
		$subject = $_POST['subject'] ? htmlspecialchars(trim($_POST['subject'])) : '';
		$to = 'Info@larsengroup.us';
		// $to = 'rudolifrudolif@gmail.com';

		$headers = "From: $SITE_TITLE \r\n";
		$headers .= "Reply-To: ". $email . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";

		$data = '<h1>'.$subject."</h1>";
		$data .= 'Name: '.$name."<br>";
		$data .= 'Phone: '.$phone."<br>";
		$data .= 'Mail: '.$mail."<br>";
		$data .= 'Short description of the object: '.$textarea."<br>";

		$message = "<div style='background:#ccc;border-radius:10px;padding:20px;'>
				".$data."
				<br>\n
				<hr>\n
				<br>\n
				<small>this message was sent from the site ".$SITE_TITLE." - ".$SITE_DESCR.", no need to answer</small>\n</div>";
		$send = mail($to, $subject, $message, $headers);

		if ( $send ) {
			echo '';
		} else {
				echo '<div class="error">Error submitting form</div>';
		}

	}
	else {
			echo '<div class="error">Error, form data not submitted.</div>';
	}
	die();
?>