<?php
	if(isset($_POST['submit'])){ //if subscribe btn clicked
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['jobt'];
    $d = $_POST['company'];
    $e = $_POST['message'];
    $conn=new mysqli("localhost","root","","websites");
    if($conn->connect_error){
      die("Connection Failed:" . $conn->connect_error);
    }
    $sql = "Insert into entertainmentcontact values('$a','$b','$c','$d','$e')";
    if($conn->query($sql)==TRUE){
    }
		if(filter_var($b, FILTER_VALIDATE_EMAIL)){ //validating user email
			$subject = "Our responce";
			$message = "Hi $a\n\n\nYour message was read our team\n\n Our team is contact you after some time\n\n please check evey day your email.\n\n\n Thank you,\n TressSite Team.";
		  $sender = "From: gyansabhawebsite@gmail.com";
			//php function to send mail
			if(mail($b, $subject, $message, $sender)){
			?>
			<!-- show sucess message once email send successfully -->
			<div class="alert success-alert">
				<?php echo "Our Team Analysis Your Message" ?>
			</div>
			<?php
        	  $a = "";
			  $b = "";
			}else{
			?>
			<!-- show error message if somehow mail can't be sent -->
			<div class="alert error-alert">
			<?php echo "Failed while sending your mail!" ?>
			</div>
			<?php
			}
		}else{
			?>
			<!-- show error message if user entered email is not valid -->
			<div class="alert error-alert">
			<?php echo "$b is not a valid email address!" ?>
			</div>
			<?php
		}
	}
?>