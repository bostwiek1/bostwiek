<?php


echo '

	<form method="post" name="contact_form"
	action="contact-form-handler.php">
	    Your Name:
	    <input type="text" name="name">
	 
	    Email Address:
	    <input type="text" name="email">
	 
	    Message:
	    <textarea name="message"></textarea>
	 
	    <input type="submit" value="Submit">
	</form>


	<script language="JavaScript">
		var frmvalidator = new Validator("contactform");
		frmvalidator.addValidation("name","req","Please provide your name");
		frmvalidator.addValidation("email","req","Please provide your email");
		frmvalidator.addValidation("email","email",
		  "Please enter a valid email address");
	</script>


;'


?>