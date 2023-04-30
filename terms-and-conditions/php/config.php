<?php
/**
 * Here personal email settings are applied.
 * 
 * @package Wromo
 * @since 1.0.1
 */

/*----------------------------------------------
This data will only be displayed in your inbox when an email arrives.
----------------------------------------------*/

$MessageTitle   = 'New website contact';   // Enter a title for the email that will arrive in your inbox.
$RecipientEmail = 'adm.codings@gmail.com'; // Enter the your email address that will receive form messages.
$RecipientName  = 'Your Name';             // Enter your name.
$ReplyToEmail   = 'no-reply@email.com';    // Enter the email address to which the reply message is sent.

/*----------------------------------------------
Change this only if you change the name of these fields in the HTML form.
----------------------------------------------*/

$FieldSubject = 'subject'; // Subject field name attribute.
$FieldEmail   = 'email';   // Email field name attribute.

/*----------------------------------------------
Global variables, don't change anything here.
----------------------------------------------*/
global $RecipientEmail, $RecipientName, $ReplyToEmail, $FieldSubject, $FieldEmail;