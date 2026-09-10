<?php





$EmailFrom = "msseolink@gmail.com";

$EmailTo = "sarita.bartwal2510@gmail.com";

$Subject = "Request From Website";

$cname = Trim(stripslashes($_POST['Name:'])); 

$email = Trim(stripslashes($_POST['Email:']));

 $mes = Trim(stripslashes($_POST['Message:']));



// validation

$validationOK=true;

if (!$validationOK) {

  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";

  exit;

}



// prepare email body text

$Body = "";

$Body .= "Client Name: ";

$Body .= $cname;

$Body .= "\n";

$Body .= "Email ID: ";

$Body .= $email;

$Body .= "\n";

$Body .= "Message :: ";

$Body .= $mes;

$Body .= "\n";





// send email 

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");



// redirect to success page 

if ($success){

  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";

}

else{

  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";

}



?>