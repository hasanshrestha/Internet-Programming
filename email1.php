<?php

// $msg="E-mail:".$_POST['email']."\n";


//set up mail
$recipient="bbinayabishural4@gmail.com";
$subject="Form Submission Result";
$mailheaders="From: Car Rental Website
<bbinayabishural4@gmail.com>\n";
$mailheader.="Reply-To:".$_POST['email'];

//send the mail
mail($recipient,$subject,$msg,$mailheaders);

?>

<!DOCTYPE html>
<html>
<head>
		<title>Sending mail</title>
		</head>
		<body>
		      <P>Thanks,<strong><?php echo
$_POST['name'];?></strong>
						<P>Your email address:
						<strong><?php echo
$_POST['email'];?></strong>
</body>
</html>
