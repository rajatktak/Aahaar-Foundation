<?php

 if(isset($_POST['submit']))
 {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$food = $_POST['food'];

 	$to = 'rajatktak@gmail.com';
 	$subject1 = 'Form Submission';
 	$message1 = "Name: ".$name."\n"."Food in KG:".$food;
 	$header  = "From: ".$email;

 	if(mail($to, $subject1, $message1, $header))
 	{
 		?>
 		<script>alert('Mail Sent successfully Thank you');
     window.open('index.html','_self');
 	</script>
 		<?php
     	}
 	else
 	{
 		echo "wrong";
 	}
 }
 ?>
