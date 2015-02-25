<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$event = $_POST['event'];
$email = $_POST['email'];
$message = $_POST['message'];
//Validate first
if(empty($name)||empty($lname)||empty($email)||empty($event)) 
{
    echo "Name, email, and the event you are attending are required";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}



$email_from = "matt@agencyzero.com".;
$email_subject = "In Person Meeting";
$email_body = "$fname.\n $lname.\n would like to setup a meeting at $event.\n ".
							"You can contact them at : $email.\n or $phone.\n"
              "They also had this to say:\n $message".

$to = "matt@agencyzero.com";
$headers = "From: $email \r\n";

//$headers .= "Reply-To: $visitor_email \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: http://smashwebadmin.wpengine.com/wp-content/themes/smashburger/thank-you');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 