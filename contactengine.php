<?php

$EmailTo = "marcel@haazen.xyz";
$Name = Trim(stripslashes($_POST['Name'])); 
$Subject = Trim(stripslashes($_POST['Subject'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
if (empty($_POST['Email']) || empty($_POST['Subject']) || empty($_POST['Message']) || empty($_POST['Name'])) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact\">";
}
else{
  print "error";
}
?>