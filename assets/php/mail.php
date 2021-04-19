

<?php
$subject = $_REQUEST['subjectline'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$tel = $_REQUEST['tel'];
$message = $_REQUEST['message'];
$headers = 'From: danzins15@gmail.com' . "\r\n" .
    'Reply-To:'.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$to = "danzins15@gmail.com";
mail($to, $subject, $message, $headers, $tel, $email);
echo 'Thank you!!';
?>





<!--
//$subjectline = $_REQUEST['subjectline'];
//$name = $_REQUEST['name'];
//$email = $_REQUEST['email'];
//$tel = $_REQUEST['tel'];
//$message = $_REQUEST['message'];
//
//$to = "jondoe@gmail.com";
//
//mail ( $to, $subjectline, $name, $email, $tel, $message );
//echo 'Thank you!!';
-->





<!--
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
 
if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
-->





 




