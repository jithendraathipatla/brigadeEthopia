<?php
    if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['mobile'];
		
		$to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Brigade Cornerstone utopia';
		$message="ProjectName:"."Brigade Cornerstone utopia"."\n"."Name :".$name."\n"."Phone :".$phone."\n";
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers)){
			echo "<h1  style=\"text-align:center\">Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=1hCkrTkv0heLHcoDRmEipcJQKKO-H3UY2">Click here to download Brochure</a><h3>';
			echo '<h3 style="text-align:center"><a href="https://drive.google.com/open?id=10MFgV_joBKJsfkIDIeasShVqMbWbxWyC">Click here to download Cost Sheet</a><h3>';
		}
		else{
			echo "Something went wrong!";
		}
			
	}
?>