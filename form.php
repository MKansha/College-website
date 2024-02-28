<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$message = $_POST['area'];

$from = ''; // domain
$to = ''; //ur mail
$subject = 'Subject of your email'; 

$body = "First Name: $fname.\n" .
        "Last Name: $lname.\n" .
        "Mail Id: $mail.\n" .
        "Message: $message.\n";

$header = "From: $from\r\n" .
          "Reply-To: $mail";

mail($to, $subject, $body, $header);
header("Location: contact-us.html");
?>

<!-- U can host ur website in netlify.

change the form format

<form name="contact-us" method="post" data-netlify="true" onsubmit="submit">
              <label for="fstname">First Name:</label>
              <input id="fstname" type="text" placeholder="Your Name" name="fstname" required>
          
              <label for="lastname">Last Name:</label>
              <input id="lastname" type="text" placeholder="Last Name" name="lastname" required>
          
              <label for="email">Email:</label>
              <input id="email" type="email" placeholder="Email" name="email" required>
          
              <textarea name="area" id="area" cols="30" rows="10" placeholder="Your message" required></textarea>
          
              <button type="submit" class="btn">Submit</button>
          </form> -->