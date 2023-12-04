<?php
if(isset($_POST['submit'])){
  $to = 'mateusz.worek@gmail.com';
  $name = $_POST['name'];
  $from = $_POST['email'];
  $message = $POST['message'];
  $subject = "Contact Form Details";
  $headers = "From" . $from;
  $result = main($to, $subject, $message, $headers);

  if($result) {
    echo '<script type="text/javascript">alert("Your message was sent Successfully!")</script>'
    echo '<script type="text/javascript">window.location.href = window.location.href;</script>'
  } else {
    echo '<script type="text/javascript">alert("Sorry! Your message was not sent, Try again later.")</script>'
    echo '<script type="text/javascript">window.location.href = window.location.href;</script>'
  }
}
?>