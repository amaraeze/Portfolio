<?php
require '../vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = Mailgun::create('9df8b55593def345e7fec504bdd7ddda-6140bac2-47f8e1af', 'https//amaraeze.herokuapp.com');
$domain = "sandbox7a0b75bcb65947ac958ee119c0a7ae5a.mailgun.org";
$params = array(
  'from'	=> 'Excited User <mailgun@sandbox7a0b75bcb65947ac958ee119c0a7ae5a.mailgun.org>',
	'to'	=> 'obiakotobe@gmail.com',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
    );

# Make the call to the client.
$result = $mgClient->messages()->send($domain, $params);
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'sandraamaraeze@gmail.com';

  /**if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;**/

  
  //headers = 'From: '.$from_name.'<'.$from_email.'>'; 
//   $to = $receiving_email_address;
//   $from_name = $_POST['name'];
//   $from_email = $_POST['email'];
//   $subject = $_POST['subject'];
//   $message= $_POST['message'];
//   if(mail($to, $subject, $message)){ 
//     echo 'Email has sent successfully.'; 
//  }else{ 
//     echo 'Email sending failed.'; 
//  }

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $add_message( $_POST['name'], 'From');
  // $add_message( $_POST['email'], 'Email');
  // $add_message( $_POST['message'], 'Message', 10);

  // echo $send();
?>
