<?php
	if(isset($_POST['submit'])){
		$sub = $_POST['subject'];
		$msg = 'Name: ' .$_POST['name'] ."\n"
 			  .'Email-id: ' .$_POST['email'] ."\n"
 			  .'Phone: ' .$_POST['tel'] ."\n"
    		.'Comments: ' .$_POST['comment']; 	

    mail("info@efficientsolvere.com ,mphilip@efficientsolvere.com", $sub , $msg);	
    header('Location: Thankyou.php');
	}
	else{
		exit(0);
	}
?>