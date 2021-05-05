<?php
  $field_name = $_POST['name'];
  $field_email = $_POST['email'];
  $field_phone = $_POST['phone'];
  $field_message = $_POST['message'];

  $field_sender = 'consuelobeccarvarela@gmail.com';

  $mail_to = 'consuelobeccarvarela@gmail.com';
  $subject = 'Nuevo mensaje via #HuertaBox de '.$field_name;

  $body_message = 'De: '.$field_name."\n";
  $body_message .= 'E-mail: '.$field_email."\n";
  $body_message .= 'Celular: '.$field_phone."\n";
  $body_message .= 'Comentarios: '.$field_message;

  $headers = 'From: '.$field_sender."\r\n";
  $headers .= 'Reply-To: '.$field_email."\r\n";

  $mail_status = mail($mail_to, $subject, $body_message, $headers);
?>