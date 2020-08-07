<?php 
	require 'header.php';

	if (isset($_POST['messageSubmit'])) {
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$mailFrom = $_POST['email'];
		$message = $_POST['message'];

		$mailTo = "dummy@unionx.org.bd";
		$headers = "From: ".$mailFrom;
		$txt = "You have received and e-mail from ".$name.".\n\n".$message;

		mail($mailTo, $subject, $txt, $headers);
		header("Location: contact.php?mailsend");
	}
?>

	<!--header area ends-->
	<main>
		<contact-form>
			<div class="contact-form-container">
				<div class="contact-form-content-container">
					<h4>Contact us</h4>
					<div class="contact-form-form-container">
						<form action="contact.php" method="POST">
							<label for="name"><b>Full Name</b></label>
							<input type="text" name="name" placeholder="Enter full name">
							<label for="email"><b>E-mail</b></label>
							<input type="text" name="email" placeholder="Enter email">
							<label for="subject"><b>Subject</b></label>
							<input type="text" name="subject" placeholder="Your subject">
							<label for="message"><b>Message</b></label>
							<textarea name="message" placeholder="Your message" cols="30" rows="10"></textarea>
							<button type="submit" name="messageSubmit">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</contact-form>
	</main>
	

	<!-- footer area starts-->
	<?php
		require 'footer.php';
	?>