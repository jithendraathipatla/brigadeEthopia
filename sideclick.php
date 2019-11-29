<?php
    if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$phone=$_POST['mobile'];
	    $to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='century Property';
		$message="ProjectName:"."Brigade Cornerstone utopia"."\n"."Email :".$email."\n"."Phone :".$phone."\n";
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers)){
			echo "<h1  style=\"text-align:center\">Sent Successfully! Thank you, We will contact you shortly!</h1>";
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1hCkrTkv0heLHcoDRmEipcJQKKO-H3UY2">Click here to download Brochure</a><h3>';
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1RtcCxtDlIGL8dDt1tZ6WuRFZius52FNR">Click here to download Cost Sheet</a><h3>';
		}
		else{
			echo "Something went wrong!";
		}
	
	}
	
?>