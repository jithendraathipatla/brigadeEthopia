<?php
    if(isset($_POST['submit'])){
		$name=$_POST['client_name'];
		$email=$_POST['client_mail_id'];
		$phone=$_POST['client_phone_number'];
		$msg=$_POST['client_message'];
		$to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Brigade Cornerstone utopia';
		$message="ProjectName:"."Brigade Cornerstone utopia"."\n"."Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers)){
			echo "<h1 style=\"text-align:center\">Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1hCkrTkv0heLHcoDRmEipcJQKKO-H3UY2">Click here to download Brochure</a><h3>';
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1RtcCxtDlIGL8dDt1tZ6WuRFZius52FNR">Click here to download Cost Sheet</a><h3>';
		
		}
		else{
			echo "Something went wrong!";
		}
	   
	}
	
?>